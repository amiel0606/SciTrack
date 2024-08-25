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
            $this->loadStudents($from);
        } elseif ($data['type'] === 'loadTeachers') {
            $this->loadTeachers($from);
        }
    }

    private function loadStudents(ConnectionInterface $conn) {
        $students = fetchStudents($this->db);
        foreach ($students as $student) {
            $student['type'] = 'student';
            $conn->send(json_encode($student));
        }
    }

    private function loadTeachers(ConnectionInterface $conn) {
        $teachers = fetchTeachers($this->db);
        foreach ($teachers as $teacher) {
            $teacher['type'] = 'teacher';
            $conn->send(json_encode($teacher));
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


}

$loop = Factory::create();
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new UserLoader($conn)
        )
    ),
    8080
);

$server->run();
