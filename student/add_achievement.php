
<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('../admin/includes/dbCon.php'); // Use your actual path
header('Content-Type: application/json');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the JSON input
    $data = json_decode(file_get_contents('php://input'), true);

    // Check if necessary data is present
    if (isset($data['student_id'], $data['achievement_name'], $data['image_path'])) {
        // Sanitize and assign variables
        $studentId = intval($data['student_id']);
        $achievementName = trim($data['achievement_name']);
        $imagePath = trim($data['image_path']);

        // Check if the student already has the achievement (optional)
        $checkAchievementStmt = $conn->prepare("SELECT * FROM tbl_achievements WHERE student_id = ? AND achievement_name = ?");
        $checkAchievementStmt->bind_param("is", $studentId, $achievementName);
        $checkAchievementStmt->execute();
        $checkAchievementStmt->store_result();

        if ($checkAchievementStmt->num_rows > 0) {
            // If the achievement is already added, return an error message
            echo json_encode(["status" => "error", "message" => "Achievement already earned."]);
        } else {
            // Insert new achievement into tbl_achievements
            $stmt = $conn->prepare("INSERT INTO tbl_achievements (student_id, achievement_name, image_path, date_earned) VALUES (?, ?, ?, NOW())");
            $stmt->bind_param("iss", $studentId, $achievementName, $imagePath);

            if ($stmt->execute()) {
                // On success, return a success message
                echo json_encode(["status" => "success", "message" => "Achievement added successfully."]);
            } else {
                // On failure, return the error message
                echo json_encode(["status" => "error", "message" => "Failed to add achievement: " . $stmt->error]);
            }

            $stmt->close();
        }

        $checkAchievementStmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid input."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
