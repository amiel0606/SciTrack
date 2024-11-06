<?php

include '../dbCon.php'; 

    $studentId = $_POST['id-student'];

    $sql = "UPDATE tbl_students SET status = 'Inactive' WHERE id = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $studentId); 
        if ($stmt->execute()) {
            header("Location: ../../adminStudents.php?error=successEditStudent");
        } else {
            header("Location: ../../adminStudents.php?error=stmtFailed" . $conn->error);
        }
        $stmt->close();
    } else {
        header("Location: ../../adminStudents.php?error=stmtFailed" . $conn->error);
    }

$conn->close();