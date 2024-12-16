<?php
$host = "localhost";
$dbname = "scitrack";
$user = "root";
$pass = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host, $user, $pass, $dbname, 3306);
$conn->set_charset('utf8mb4');

if ($conn->connect_errno) {
    die("Connection Error: " . $conn->connect_errno);
}