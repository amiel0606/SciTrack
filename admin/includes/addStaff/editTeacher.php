<?php
require_once '../dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacherID = $_POST['teacherID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $password = $_POST['password']; 
    $name = $firstName . " " . $lastName; 
    $status = 'Active'; 
    $section = $_POST['section']; 
    $conn->begin_transaction();

    try {
        $updateUser  = "UPDATE tbl_users SET username=?, firstName=?, lastName=? WHERE id=?";
        if (!empty($password)) {
            $updateUser  = "UPDATE tbl_users SET username=?, password=?, firstName=?, lastName=? WHERE id=?";
        }

        $stmtUser  = $conn->prepare($updateUser );
        if (!empty($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
            $stmtUser ->bind_param("ssssi", $userName, $hashedPassword, $firstName, $lastName, $teacherID);  
        } else {
            $stmtUser ->bind_param("sssi", $userName, $firstName, $lastName, $teacherID);  
        }

        if (!$stmtUser ->execute()) {
            throw new Exception("Failed to update tbl_users: " . $stmtUser ->error);
        }

        $updateTeacherSql = "UPDATE tbl_teachers SET name=?, section=?, username=?, status=? WHERE id=?";
        $stmtTeacher = $conn->prepare($updateTeacherSql);
        $stmtTeacher->bind_param("ssssi", $name, $section, $userName, $status, $teacherID); 

        if (!$stmtTeacher->execute()) {
            throw new Exception("Failed to update tbl_teachers: " . $stmtTeacher->error);
        }

        $updateSectionSql = "UPDATE tbl_sections SET teacher=? WHERE section_name=?";
        $stmtSection = $conn->prepare($updateSectionSql);
        $stmtSection->bind_param("ss", $name, $section);
        
        if (!$stmtSection->execute()) {
            throw new Exception("Failed to update tbl_sections: " . $stmtSection->error);
        }

        $conn->commit();
        header("Location: ../../adminTeachers.php?error=successEditTeacher");
    } catch (Exception $e) {
        $conn->rollback();
        header("Location: ../../adminTeachers.php?error=stmtFailed&message=" . urlencode($e->getMessage()));
    } finally {
        if (isset($stmtUser )) $stmtUser ->close();
        if (isset($stmtTeacher)) $stmtTeacher->close();
        if (isset($stmtSection)) $stmtSection->close();
        $conn->close();
    }
}