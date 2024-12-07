<?php
include_once '../../admin/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lesson = $_POST['lesson'] ?? '';
    $type = $_POST['type'] ?? '';
    $question = $_POST['question'] ?? '';
    $choices = $_POST['choices'] ?? [];
    $correct_answer = $_POST['correct_answer'] ?? '';
    $additional_info = $_POST['additional_info'] ?? '';
    $difficulty = $_POST['difficulty'] ?? '';
    $quiz_image = '';

    if (empty($lesson) || empty($type) || empty($question) || empty($choices) || empty($correct_answer)) {
        echo 'Missing required fields!';
        exit;
    }

    $tableName = 'quiz_questions_' . $lesson;

    if (isset($_FILES['imageQuiz']) && $_FILES['imageQuiz']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "./uploads/";
        $fileExtension = pathinfo($_FILES['imageQuiz']['name'], PATHINFO_EXTENSION);
        $quiz_image = uniqid('', true) . '.' . $fileExtension;

        if (!move_uploaded_file($_FILES['imageQuiz']['tmp_name'], $targetDir . $quiz_image)) {
            echo 'Failed to upload image!';
            exit;
        }
    }

    $choicesJson = json_encode($choices);

    $query = "INSERT INTO $tableName (question, choices, correct_answer, additional_info, type, difficulty, quiz_image) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssssss', $question, $choicesJson, $correct_answer, $additional_info, $type, $difficulty, $quiz_image);

    if ($stmt->execute()) {
        echo 'Question added successfully!';
    } else {
        echo 'Error adding question: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}