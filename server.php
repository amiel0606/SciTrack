<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/admin/includes/dbCon.php'; // Include your dbCon.php file
require __DIR__ . '/admin/includes/userFunctions.php'; // Include the user functions file

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use React\EventLoop\Factory;
use React\Socket\Server as SocketServer;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

class UserLoader implements MessageComponentInterface {
    protected $clients;
    protected $db;

    public function __construct($db) {
        $this->clients = new \SplObjectStorage;
        $this->db = $db;
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $data = json_decode($msg, true);
        if ($data['type'] === 'loadStudents') {
            $this->loadStudents($from, $data['section']);
        } elseif ($data['type'] === 'loadTeachers') {
            $this->loadTeachers($from);
        }
    }

    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }

    private function loadStudents(ConnectionInterface $conn, $section) {
        $stmt = $this->db->prepare('SELECT * FROM tbl_users WHERE role = "Student" AND section = ?');
        $stmt->bind_param('s', $section);
        $stmt->execute();
        $result = $stmt->get_result();
        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
        $stmt->close();
    
    
        $conn->send(json_encode($students));
    }
    

    private function loadTeachers(ConnectionInterface $conn) {
        $teachers = fetchTeachers($this->db);
        foreach ($teachers as $teacher) {
            $conn->send(json_encode($teacher));
        }
    }
}

$loop = Factory::create();
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new UserLoader($conn) // Pass the database connection
        )
    ),
    8080
);

$server->run();
