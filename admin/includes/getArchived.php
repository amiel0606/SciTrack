<?php
header('Content-Type: application/json');

include_once './dbCon.php';

$role = $_POST['role'];
$data = [];
if ($role == 'Teachers') {
    $sql = "SELECT id, name, username, 'Teacher' as role FROM tbl_teachers WHERE Status = 'Inactive'";
} elseif ($role == 'Students') {
    $sql = "SELECT id, name, username, 'Student' as role FROM tbl_students WHERE Status = 'Inactive'";
} else {
    echo json_encode($data);
    exit;
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$conn->close();
echo json_encode($data);