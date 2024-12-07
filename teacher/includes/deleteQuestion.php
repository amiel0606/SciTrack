<?php
include_once '../../admin/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lesson = $_POST['lesson'] ?? '';
    $type = $_POST['type'] ?? '';
    $questionId = $_POST['id'] ?? '';

    if (empty($lesson) || empty($type) || empty($questionId)) {
        echo json_encode(['status' => 'error', 'message' => 'Missing required fields.']);
        exit;
    }

    $tableName = 'quiz_questions_' . $lesson;
    $query = "DELETE FROM $tableName WHERE id = ? AND type = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare the statement.']);
        exit;
    }
    $stmt->bind_param('is', $questionId, $type);
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Question deleted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No question found with the provided ID and type.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete the question: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}