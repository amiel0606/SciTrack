<?php
require_once './dbCon.php'; 

header("Content-Type: application/json"); 

try {
    $query = "SELECT * FROM tbl_sections";
    $result = $conn->query($query);

    $sections = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sections[] = $row;
        }
    }
    echo json_encode($sections);
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}

$conn->close();