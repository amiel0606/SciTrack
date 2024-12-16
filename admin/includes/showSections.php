<?php
require_once './dbCon.php'; 
$type = $_GET['type'] ?? null;

header("Content-Type: application/json"); 
try {
    if ($type === 'sections') {
        $query = "SELECT * FROM tbl_sections";
        $result = $conn->query($query);
        $sections = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sections[] = $row;
            }
        }
        echo json_encode($sections);
    } else {
        $query = "SELECT * FROM tbl_sections WHERE teacher = 'No Teacher Assigned Yet'";
        $result = $conn->query($query);
        $sections = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sections[] = $row;
            }
        }
        echo json_encode($sections);
    }
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}

$conn->close();