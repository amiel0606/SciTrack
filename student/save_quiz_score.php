<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('../admin/includes/dbCon.php'); // Ensure the path is correct

header('Content-Type: application/json'); // Set the header for JSON response

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $data = json_decode(file_get_contents('php://input'), true);

    // Validate the received data
    if (isset($data['student_id'], $data['quiz_id'], $data['lesson'], $data['score'])) {
        $studentId = intval($data['student_id']);
        $quizId = intval($data['quiz_id']);
        $lesson = trim($data['lesson']); // Trim whitespace from lesson string
        $score = intval($data['score']);

        // Check if the score already exists
        $checkScoreStmt = $conn->prepare("SELECT score FROM tbl_quiz_scores WHERE student_id = ? AND quiz_id = ?");
        $checkScoreStmt->bind_param("ii", $studentId, $quizId);
        $checkScoreStmt->execute();
        $checkScoreStmt->store_result();

        if ($checkScoreStmt->num_rows > 0) {
            // Score already exists
            echo json_encode(["status" => "error", "message" => "You have already taken this quiz."]);
        } else {
            // Prepare the SQL statement to insert the score and lesson
            $stmt = $conn->prepare("INSERT INTO tbl_quiz_scores (student_id, quiz_id, lesson, score, date_taken) VALUES (?, ?, ?, ?, NOW())");
            $stmt->bind_param("iisi", $studentId, $quizId, $lesson, $score);

            // Execute the statement
            if ($stmt->execute()) {
                // Successful insert
                echo json_encode(["status" => "success", "message" => "Score saved successfully."]);
            } else {
                // Error while inserting
                echo json_encode(["status" => "error", "message" => "Failed to save score: " . $stmt->error]);
            }

            // Close the statement
            $stmt->close();
        }

        // Close the check score statement
        $checkScoreStmt->close();
    } else {
        // Invalid data
        echo json_encode(["status" => "error", "message" => "Invalid input."]);
    }
} else {
    // Invalid request method
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
?>
