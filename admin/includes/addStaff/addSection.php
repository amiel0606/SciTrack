<?php
if (isset($_POST["submit"])) {
    require_once '../dbCon.php';

    $section = trim($_POST["section"]);

    if (empty($section)) {
        header("Location: ../../manageSections.php?error=emptySectionName");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM tbl_sections WHERE section_name = ?");
    $stmt->bind_param("s", $section);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $stmt->close();
        $conn->close();
        header("Location: ../../manageSections.php?error=sectionExists");
        exit();
    }
    $stmt->close();
    $stmt = $conn->prepare("INSERT INTO tbl_sections (section_name) VALUES (?)");
    $stmt->bind_param("s", $section);
    
    if ($stmt->execute()) {
        header("Location: ../../manageSections.php?success=sectionAdded");
    } else {
        header("Location: ../../manageSections.php?error=addSectionFailed");
    }
    
    $stmt->close();
    $conn->close();
} else {
    header("Location: ../../manageSections.php");
    exit();
}