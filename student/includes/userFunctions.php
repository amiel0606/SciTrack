<?php

function getStudentSection($db, $id){
    $stmt = $db->prepare('SELECT * FROM tbl_students WHERE id = ?');
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = [];
    while ($row = $result->fetch_assoc()) {
        $student[] = $row;
    }
    $stmt->close();
    return $student;
}

function getLessons($db){
    $result = $db->query('SELECT * FROM tbl_lessons');
    $lessons = [];
    while ($row = $result->fetch_assoc()) {
        $lessons[] = $row;
    }
    return $lessons;
}