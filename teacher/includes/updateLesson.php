<?php
require_once '../../admin/includes/dbCon.php';  

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$type = $data['type'] ?? null;

$response = [];

if ($type === 'lessonGive') {
    $lesson = $data['lesson'] ?? null;
    $section = $data['section'] ?? null;
    $date = $data['date'] ?? null;
    if (!$lesson || !$section || !$date) {
        echo json_encode([
            'success' => false,
            'error' => 'Invalid input. All fields are required.'
        ]);
        exit;
    }

    $allowedColumns = ['matter', 'ecosystem', 'motion', 'earth'];
    if (!in_array($lesson, $allowedColumns, true)) {
        echo json_encode([
            'success' => false,
            'error' => 'Invalid column name.'
        ]);
        exit;
    }

    $query = "UPDATE tbl_lessons SET $lesson = ? WHERE section = ?";
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        echo json_encode([
            'success' => false,
            'error' => 'Prepare failed: ' . htmlspecialchars($conn->error)
        ]);
        exit;
    }

    $status = $date;
    $stmt->bind_param('ss', $status, $section);
    $success = $stmt->execute();
    if ($success === false) {
        echo json_encode([
            'success' => false,
            'error' => 'Execute failed: ' . htmlspecialchars($stmt->error)
        ]);
        exit;
    }

    $stmt->close();
    echo json_encode([
        'success' => true,
        'message' => 'Lesson updated successfully.'
    ]);
    exit;
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request type']);
    exit;
}