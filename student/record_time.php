<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include_once('../admin/includes/dbCon.php');

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid JSON input']);
    exit();
}

// Check if required fields are present
if (!isset($data['student_id'], $data['lesson'], $data['section_index'], $data['section_name'], $data['time_spent'])) {
    echo json_encode(['status' => 'error', 'message' => 'Missing required fields']);
    exit();
}

// Extract the data
$student_id = $data['student_id'];
$lesson = $data['lesson'];
$section_index = $data['section_index'];
$section_name = $data['section_name'];
$time_spent = $data['time_spent'];

// First, check if there is an existing record for this student and section
$query_check = "SELECT time_spent FROM tbl_time_tracking WHERE student_id = ? AND lesson = ? AND section_index = ? AND section_name = ?";

$stmt_check = $conn->prepare($query_check);
if ($stmt_check === false) {
    echo json_encode(['status' => 'error', 'message' => 'Failed to prepare SQL statement for check']);
    exit();
}

$stmt_check->bind_param("isis", $student_id, $lesson, $section_index, $section_name);
$stmt_check->execute();
$stmt_check->store_result();

// If a record exists, update the time_spent
if ($stmt_check->num_rows > 0) {
    $stmt_check->bind_result($existing_time_spent);
    $stmt_check->fetch();
    
    // Add the new time spent to the existing time
    $new_time_spent = $existing_time_spent + $time_spent;

    // Update the existing record
    $query_update = "UPDATE tbl_time_tracking SET time_spent = ? WHERE student_id = ? AND lesson = ? AND section_index = ? AND section_name = ?";
    $stmt_update = $conn->prepare($query_update);
    
    if ($stmt_update === false) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare SQL statement for update']);
        exit();
    }

    $stmt_update->bind_param("iisii", $new_time_spent, $student_id, $lesson, $section_index, $section_name);
    if ($stmt_update->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Time data updated successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update time data']);
    }

    $stmt_update->close();
} else {
    // If no record exists, insert a new one
    $query_insert = "INSERT INTO tbl_time_tracking (student_id, lesson, section_index, section_name, time_spent) VALUES (?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($query_insert);

    if ($stmt_insert === false) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare SQL statement for insert']);
        exit();
    }

    $stmt_insert->bind_param("isisi", $student_id, $lesson, $section_index, $section_name, $time_spent);
    if ($stmt_insert->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Time data saved successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to save time data']);
    }

    $stmt_insert->close();
}

// Close the check statement and the database connection
$stmt_check->close();
?>
