<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../dbCon.php';
    $sectionId = $_POST['section_id'];
    if (!empty($sectionId)) {
        $stmt = $conn->prepare("DELETE FROM tbl_sections WHERE section_id = ?");
        $stmt->bind_param("i", $sectionId);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete the section.']);
        }
        $stmt->close();
        $conn->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid section ID.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}