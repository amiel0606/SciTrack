<?php
require_once '../dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacherID = $_POST['teacherID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $password = $_POST['password']; 
    $name = $firstName . " " . $lastName . " "; 
    $status = 'Active'; 
    $section = 'Papaya'; 

    $updateUser = "UPDATE tbl_users SET username=?, firstName=?, lastName=? WHERE id=?";
    if (!empty($password)) {
        $updateUser = "UPDATE tbl_users SET username=?, password=?, firstName=?, lastName=? WHERE id=?";
    }

    $stmtUser = $conn->prepare($updateUser);
    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
        $stmtUser->bind_param("ssssi", $userName, $hashedPassword, $firstName, $lastName, $teacherID);  
    } else {
        $stmtUser->bind_param("sssi", $userName, $firstName, $lastName, $teacherID);  
    }
    $updateTeacherSql = "UPDATE tbl_teachers SET name=?, section=?, username=?, status=? WHERE id=?";
    $stmtTeacher = $conn->prepare($updateTeacherSql);
    $stmtTeacher->bind_param("ssssi", $name, $section, $userName, $status, $teacherID); 

    if ($stmtUser->execute() && $stmtTeacher->execute()) {
        header("Location: ../../adminTeachers.php?error=successEditTeacher");
    } else {
        header("Location: ../../adminTeachers.php?error=stmtFailed" . $conn->error);
    }
    $stmtUser->close();
    $stmtTeacher->close();
    $conn->close();
}
