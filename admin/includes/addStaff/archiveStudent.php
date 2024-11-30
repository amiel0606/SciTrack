<?php

include '../dbCon.php'; 

$studentId = $_POST['id-student']; 

$sqlStudent = "UPDATE tbl_students SET status = 'Inactive' WHERE id = ?";

$sqlUser = "UPDATE tbl_users SET status = 'Inactive' WHERE id = ?";

$conn->begin_transaction();

try {
    if ($stmtStudent = $conn->prepare($sqlStudent)) {
        $stmtStudent->bind_param("i", $studentId); 
        if (!$stmtStudent->execute()) {
            throw new Exception("Error executing query on tbl_students.");
        }
        $stmtStudent->close();
    } else {
        throw new Exception("Error preparing query on tbl_students.");
    }

    if ($stmtUser = $conn->prepare($sqlUser)) {
        $stmtUser->bind_param("i", $studentId); 
        if (!$stmtUser->execute()) {
            throw new Exception("Error executing query on tbl_users.");
        }
        $stmtUser->close();
    } else {
        throw new Exception("Error preparing query on tbl_users.");
    }

    $conn->commit();
    header("Location: ../../adminStudents.php?error=successEditStudent");

} catch (Exception $e) {
    $conn->rollback();
    header("Location: ../../adminStudents.php?error=stmtFailed&errorMsg=" . $e->getMessage());
}

$conn->close();