<?php
require_once '../dbCon.php'; 

if (isset($_POST['submit'])) {
    $sectionId = $_POST['section_id']; 
    $sectionName = $_POST['section'];

    if (empty($sectionName)) {
        header("Location: ../manageSections.php?error=emptySectionName");
        exit();
    }

    try {
        $stmt = $conn->prepare("UPDATE tbl_sections SET section_name = ? WHERE section_id = ?");
        $stmt->bind_param("si", $sectionName, $sectionId);

        if ($stmt->execute()) {
            header("Location: ../manageSections.php?error=sectionUpdated");
        } else {
            header("Location: ../manageSections.php?error=updateFailed");
        }
    } catch (Exception $e) {
        header("Location: ../manageSections.php?error=" . urlencode($e->getMessage()));
    }
    $stmt->close();
    $conn->close();
} else {
    header("Location: ../manageSections.php");
    exit();
}
