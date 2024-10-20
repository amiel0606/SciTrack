<?php
require_once '../dbCon.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentId = $_POST['student-id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $name = $firstName . " " . $lastName . " ";
    $section = 'Papaya'; 
    $updateUser  = "UPDATE tbl_users SET username=?, password=?, firstName=?, lastName=? WHERE id=?";
    $stmtUser  = $conn->prepare($updateUser);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
    $stmtUser ->bind_param("ssssi", $userName, $hashedPassword, $firstName, $lastName, $studentId);

    $updateStudentSql = "UPDATE tbl_students SET name=?, section=?, username=? WHERE id=?";
    $stmtStudent = $conn->prepare($updateStudentSql);
    $stmtStudent->bind_param("sssi", $name, $section, $userName, $studentId);

    if ($stmtUser ->execute() && $stmtStudent->execute()) {
        header("Location: ../../adminStudents.php?error=successEditStudent");
    } else {
        header("Location: ../../adminStudents.php?error=stmtFailed" . $conn->error);
    }

    $stmtUser ->close();
    $stmtStudent->close();
    $conn->close();
}