<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('../admin/includes/dbCon.php');

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
$student_id = $data['student_id'];
$quiz_id = $data['quiz_id'];
$lesson = $data['lesson'];

if (!$conn) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit();
}

$stmt = $conn->prepare("SELECT score FROM tbl_quiz_scores WHERE student_id = ? AND quiz_id = ? AND lesson = ?");
$stmt->bind_param("iis", $student_id, $quiz_id, $lesson);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    
    echo json_encode(['status' => 'taken']);
} else {
    
    echo json_encode(['status' => 'not_taken']);
}

$stmt->close();
$conn->close();
?>
