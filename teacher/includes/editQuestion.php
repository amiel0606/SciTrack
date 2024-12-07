<?php
include_once '../../admin/dbCon.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lesson = $_POST['lesson'] ?? '';
    $type = $_POST['type'] ?? '';
    $questionId = $_POST['questionId'] ?? '';
    $question = $_POST['question'] ?? '';
    $choices = $_POST['choices'] ?? '[]';
    $correct_answer = $_POST['correct_answer'] ?? '';
    $additional_info = $_POST['additional_info'] ?? '';
    $difficulty = $_POST['difficulty'] ?? '';

    if (empty($lesson) || empty($type) || empty($questionId) || empty($question) || empty($choices) || empty($correct_answer)) {
        echo json_encode(['status' => 'error', 'message' => 'Missing required fields.']);
        exit;
    }

    $quizImage = '';
    if (isset($_FILES['quiz_image']) && $_FILES['quiz_image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = '../../uploads/';
        $fileExtension = pathinfo($_FILES['quiz_image']['name'], PATHINFO_EXTENSION);
        $quizImage = uniqid('quiz_', true) . '.' . $fileExtension;
        move_uploaded_file($_FILES['quiz_image']['tmp_name'], $targetDir . $quizImage);
    }

    $tableName = 'quiz_questions_' . $lesson; 
    $choicesArray = json_decode($choices, true);
    $choicesJson = json_encode($choicesArray, JSON_UNESCAPED_UNICODE); 

    $query = "UPDATE $tableName 
                SET question = ?, choices = ?, correct_answer = ?, additional_info = ?, difficulty = ?, type = ?" .
                (!empty($quizImage) ? ", quiz_image = ?" : "") .
                " WHERE id = ?";
    $stmt = $conn->prepare($query);

    if (!empty($quizImage)) {
        $stmt->bind_param('sssssssi', $question, $choicesJson, $correct_answer, $additional_info, $difficulty, $type, $quizImage, $questionId);
    } else {
        $stmt->bind_param('ssssssi', $question, $choicesJson, $correct_answer, $additional_info, $difficulty, $type, $questionId);
    }

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Question updated successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}