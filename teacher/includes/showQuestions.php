<?php
include_once '../../admin/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lesson = $_POST['lesson'] ?? '';
    $type = $_POST['type'] ?? '';

    if (empty($lesson) || empty($type)) {
        echo json_encode(['status' => 'error', 'message' => 'Missing required parameters']);
        exit;
    }

    $tableName = 'quiz_questions_' . $lesson;

    $query = "SELECT * FROM $tableName WHERE type = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $type);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $questions = [];

        while ($row = $result->fetch_assoc()) {
            $questions[] = $row;
        }

        echo json_encode(['status' => 'success', 'data' => $questions]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Query execution failed: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}