<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/admin/includes/dbCon.php';
require __DIR__ . '/admin/includes/userFunctions.php';
require __DIR__ . '/teacher/includes/userFunctions.php'; 
require __DIR__ . '/student/includes/userFunctions.php'; 

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
        } elseif ($data['type'] === 'loadRoles') {
            $this->loadRoles($from);
        } elseif ($data['type'] === 'loadLessons') {
            $this->loadLessons($from, $data['section']);
        } elseif ($data['type'] === 'giveLesson') {
            $section = $data['section'];
            $lesson = $data['lesson'];
            $date = $data['date'];
            $success = $this->giveLessons($from, $section, $lesson, $date);
            $response = [
                'type' => 'updateLessonResponse',
                'success' => $success
            ];
            $from->send(json_encode($response));
        } elseif ($data['type'] === 'loadStudentData') {
            $this->loadStudent($from, $data['id']);
        } elseif ($data['type'] === 'getLessons') {
            $this->getLesson($from);
        } else if ($data['type'] === 'getCountRoles') {
            $this->getCountRoles($from);
        }
    }
    
    private function getCountRoles(ConnectionInterface $conn) {
        $count = getCountRoles($this->db);
        if ($conn->send(json_encode([
            'type' => 'roleCount',
            'counts' => $count
        ])));
    }
    

    private function getLesson(ConnectionInterface $conn) {
        $lessons = getLessons($this->db);
        foreach ($lessons as $lesson) {
            $lesson['type'] = 'lesson';
            $conn->send(json_encode($lesson));
        }
    }
    private function loadStudent(ConnectionInterface $conn, $id) {
        $students = getStudentSection($this->db, $id);
        foreach ($students as $student) {
            $student['type'] = 'student';
            $conn->send(json_encode($student));
        }
    }

    private function loadLessons(ConnectionInterface $conn, $section) {
        $lessons = fetchLessons($this->db, $section);
        foreach ($lessons as $lesson) {
            $lesson['type'] = 'lessons';
            $conn->send(json_encode($lesson));
        }
    }

    private function giveLessons(ConnectionInterface $conn, $section, $lesson, $date) {
        try {
            $success = giveLesson($this->db, $section, $lesson, $date);
            return $success;
        } catch (Exception $e) {
            error_log("Error updating lesson: " . $e->getMessage());
            return false;
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

    private function loadRoles(ConnectionInterface $conn) {
        $roles = fetchRoles($this->db);
        foreach ($roles as $role) {
            $role['type'] = 'role';
            $conn->send(json_encode($role));
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
