<?php

include '../dbCon.php'; 

$teacherId = $_POST['IDteacher']; 

$sqlTeacher = "UPDATE tbl_teachers SET status = 'Inactive' WHERE id = ?";
$sqlUser = "UPDATE tbl_users SET status = 'Inactive' WHERE id = ?";

$conn->begin_transaction(); 

try {
    if ($stmtTeacher = $conn->prepare($sqlTeacher)) {
        $stmtTeacher->bind_param("i", $teacherId); 
        if (!$stmtTeacher->execute()) {
            throw new Exception("Failed to update tbl_teachers: " . $conn->error);
        }
        $stmtTeacher->close();
    }

    if ($stmtUser = $conn->prepare($sqlUser)) {
        $stmtUser->bind_param("i", $teacherId); 
        if (!$stmtUser->execute()) {
            throw new Exception("Failed to update tbl_users: " . $conn->error);
        }
        $stmtUser->close();
    }
    $conn->commit();
    header("Location: ../../adminTeachers.php?error=successEditTeacher");

} catch (Exception $e) {
    $conn->rollback();
    header("Location: ../../adminTeachers.php?error=stmtFailed&errorMsg=" . $e->getMessage());
}

$conn->close();
