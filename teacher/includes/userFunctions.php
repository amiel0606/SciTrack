<?php

function fetchLessons($db, $section) {
    $stmt = $db->prepare('SELECT * FROM tbl_lessons WHERE section = ?');
    $stmt->bind_param('s', $section);
    $stmt->execute();
    $result = $stmt->get_result();
    $lessons = [];
    while ($row = $result->fetch_assoc()) {
        $lessons[] = $row;
    }
    $stmt->close();
    return $lessons;
}
function giveLesson($db, $section, $lesson) {
    $stmt = $db->prepare('UPDATE tbl_lessons SET ' . $lesson . ' = ? WHERE section = ?');
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($db->error));
    }
    $status = 'Active';
    $stmt->bind_param('ss', $status, $section);
    $success = $stmt->execute();
        if ($success === false) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }
    $stmt->close();
    return $success;
}
