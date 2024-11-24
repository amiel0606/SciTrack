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
            $password = $lastName; 
            $role = "Teacher"; 

            $hashedPass = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO tbl_users (username, password, role, firstName, lastName) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $username, $hashedPass, $role, $firstName, $lastName);
            $stmt->execute();

            $last_id = $conn->insert_id;

            $stmt = $conn->prepare("INSERT INTO tbl_teachers (id, name, username) VALUES (?, ?, ?)");
            $name = $firstName . " " . $lastName; 
            $stmt->bind_param("iss", $last_id, $name, $username);
            $stmt->execute();
        }

        fclose($file);
        header("Location: ../../adminTeacher.php?error=successEditTeacher");

    }

    $stmt->close();
    $conn->close();
}