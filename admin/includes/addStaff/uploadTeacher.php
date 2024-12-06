<?php
if (isset($_POST["submit"])) {
    require_once '../../../includes/functions.php';
    require_once '../dbCon.php';

    if (isset($_FILES["file"]) && $_FILES["file"]["size"] > 0) {
        $filename = $_FILES["file"]["tmp_name"];
        $file = fopen($filename, "r");

        fgetcsv($file); // Skip the header row

        while (($row = fgetcsv($file, 10000, ",")) !== FALSE) {
            $username = $row[0];
            $firstName = $row[1];
            $lastName = $row[2];
            $section  = "";
            $password = $lastName; 
            $role = "Teacher"; 

            $hashedPass = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO tbl_users (username, password, role, firstName, lastName, section) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $username, $hashedPass, $role, $firstName, $lastName, $section);
            $stmt->execute();

            $last_id = $conn->insert_id;

            $stmt = $conn->prepare("INSERT INTO tbl_teachers (id, name, username, section) VALUES (?, ?, ?, ?)");
            $name = $firstName . " " . $lastName; 
            $stmt->bind_param("isss", $last_id, $name, $username, $section);
            $stmt->execute();
        }

        fclose($file);
        header("Location: ../../adminTeachers.php?error=successAddingTeacher");

    }

    $stmt->close();
    $conn->close();
}