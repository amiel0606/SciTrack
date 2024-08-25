<?php
if (isset($_POST["submit"])) {
    require_once '../../../includes/functions.php';
    require_once '../dbCon.php';
    
    $username = $_POST["userName"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $password = $lastName;
    $name = $firstName. " ". $lastName;
    $role = "Teacher";
    $section = $_POST["section"];

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO tbl_users (username, password, role, section, firstName, lastName) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $hashedPass, $role, $section, $firstName, $lastName);
    $stmt->execute();

    $last_id = $conn->insert_id;
    $stmt = $conn->prepare("INSERT INTO tbl_teachers (id, name, username, section) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $last_id, $name, $username, $section);
    $stmt->execute();
    echo "Teacher has been successfully added.";

    $stmt->close();
    $conn->close();
}