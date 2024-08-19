<?php
if (isset($_POST["submit"])) {
    $filename = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");
        
        require_once '../../../includes/functions.php';
        require_once '../dbCon.php';

        fgetcsv($file);

        while (($row = fgetcsv($file, 10000, ",")) !== FALSE) {
            $username = $row[0];
            $password = $row[1];
            $role = $row[2];
            $firstName = $row[3];
            $lastName = $row[4];

            $hashedPass = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO tbl_users (username, password, role, firstName, lastName) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $username, $hashedPass, $role, $firstName, $lastName);
            $stmt->execute();
        }

        fclose($file);
        $stmt->close();
        $conn->close();

        echo "CSV file has been successfully imported.";
    } else {
        echo "Please upload a valid CSV file.";
    }
}

