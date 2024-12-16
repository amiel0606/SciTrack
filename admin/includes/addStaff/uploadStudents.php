<?php
if (isset($_POST["submit"])) {
    require_once '../../../includes/functions.php';
    require_once '../dbCon.php';

    if (isset($_FILES["file"]) && $_FILES["file"]["size"] > 0) {
        $filename = $_FILES["file"]["tmp_name"];
        $file = fopen($filename, "r");

        fgetcsv($file);

        while (($row = fgetcsv($file, 10000, ",")) !== FALSE) {
            $username = $row[0];
            $firstName = $row[1];
            $lastName = $row[2];
            $password = $lastName;
            $name = $firstName. " ". $lastName;
            $section = "";
            $role = "Student";

            $hashedPass = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO tbl_users (username, password, role, firstName, lastName, section) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $username, $hashedPass, $role, $firstName, $lastName, $section);
            $stmt->execute();
            $last_id = $conn->insert_id;

            $stmt = $conn->prepare("INSERT INTO tbl_students (id, name, username, section) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $last_id, $name, $username, $section);
            $stmt->execute();
        }

        fclose($file);
        header("Location: ../../adminStudents.php?error=addStudentSuccess");
    }

    $stmt->close();
    $conn->close();
}