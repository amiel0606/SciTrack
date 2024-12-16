<?php
require_once '../../admin/includes/dbCon.php';  

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$type = $data['type'] ?? null;

$response = [];

if ($type === 'loadStudentData') {
    $id = $data['id'] ?? null;
    if ($id) {
        $response = loadStudentData($id, $conn);
    } else {
        $response = ['error' => 'No student ID provided.'];
    }
} elseif ($type === 'loadLessons') {
    $section = $data['section'] ?? null;
    if ($section) {
        $response = loadLessons($section, $conn);
    } else {
        $response = ['error' => 'No section provided.'];
    }
} else {
    $response = ['error' => 'Invalid request type'];
}

echo json_encode($response);

function loadStudentData($id, $conn) {
    $stmt = $conn->prepare('SELECT * FROM tbl_students WHERE id = ?');
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = [];
    while ($row = $result->fetch_assoc()) {
        $student[] = $row;
    }
    $stmt->close();

    return $student ?: []; 
}

function loadLessons($section, $conn) {
    $stmt = $conn->prepare('SELECT * FROM tbl_lessons WHERE section = ?');
    $stmt->bind_param('s', $section);
    $stmt->execute();
    $result = $stmt->get_result();
    $lessons = [];
    while ($row = $result->fetch_assoc()) {
        $lessons[] = $row;
    }
    $stmt->close();

    return $lessons ?: []; 
}