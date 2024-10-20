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
function giveLesson($db, $section, $lesson, $date) {
    $stmt = $db->prepare('UPDATE tbl_lessons SET ' . $lesson . ' = ? WHERE section = ?');
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($db->error));
    }
    $status = $date;
    $stmt->bind_param('ss', $status, $section);
    $success = $stmt->execute();
        if ($success === false) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }
    $stmt->close();
    return $success;
}

function fetchQuizScores($db) {
    $query = '
        SELECT 
            qs.id AS quiz_id, 
            qs.student_id, 
            qs.quiz_id, 
            qs.lesson, 
            qs.score,
            qs.date_taken,
            s.name AS student_name
        FROM 
            tbl_quiz_scores AS qs
        JOIN 
        tbl_students AS s ON qs.student_id = s.id;
    ';

    $result = $db->query($query);
    
    $quizScores = [];
    
    while ($row = $result->fetch_assoc()) {
        $quizScores[] = $row;
    }
    
    return $quizScores;
}