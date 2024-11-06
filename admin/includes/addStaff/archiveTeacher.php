<?php

include '../dbCon.php'; 

$teacherId = $_POST['IDteacher']; 

$sql = "UPDATE tbl_teachers SET status = 'Inactive' WHERE id = ?";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $teacherId); 
    
    if ($stmt->execute()) {
        header("Location: ../../adminTeachers.php?error=successEditTeacher");
    } else {
        header("Location: ../../adminTeachers.php?error=stmtFailed&errorMsg=" . $conn->error);
    }
    $stmt->close();
} else {
    header("Location: ../../adminTeachers.php?error=stmtFailed&errorMsg=" . $conn->error);
}

$conn->close();