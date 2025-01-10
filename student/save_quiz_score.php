<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('../admin/includes/dbCon.php');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (isset($data['student_id'], $data['quiz_id'], $data['lesson'], $data['score'], $data['type'])) {
        $studentId = intval($data['student_id']);
        $quizId = intval($data['quiz_id']);
        $lesson = trim($data['lesson']);
        $type = trim($data['type']);
        $score = intval($data['score']);
        
        if ($score < 2) {
            echo json_encode(["status" => "error", "message" => "Please get a passing score before proceeding."]);
            exit(); 
        }
        
        // Check if the score for this student and quiz already exists
        $checkScoreStmt = $conn->prepare("SELECT score FROM tbl_quiz_scores WHERE student_id = ? AND quiz_id = ?");
        $checkScoreStmt->bind_param("ii", $studentId, $quizId);
        $checkScoreStmt->execute();
        $checkScoreStmt->store_result();
        
        if ($checkScoreStmt->num_rows > 0) {
            echo json_encode(["status" => "error", "message" => "You have already taken this quiz."]);
        } else {
            // Insert the score into the database with 'type' added as 'post'
            $stmt = $conn->prepare("INSERT INTO tbl_quiz_scores (student_id, quiz_id, lesson, score, type, date_taken) VALUES (?, ?, ?, ?, ?, NOW())");
            
            // Bind parameters for 'student_id', 'quiz_id', 'lesson', 'score', 'type'
            $stmt->bind_param("iisss", $studentId, $quizId, $lesson, $score, $type);
            
            if ($stmt->execute()) {
                echo json_encode(["status" => "success", "message" => "Score saved successfully."]);
            } else {
                echo json_encode(["status" => "error", "message" => "Failed to save score: " . $stmt->error]);
            }
            
            $stmt->close();
        }
        
        $checkScoreStmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid input."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
?>
