<?php
session_start();
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

function fetchQuizScores($db) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION["sectionTeacher"])) {
        return [];
    }
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
            tbl_students AS s ON qs.student_id = s.id
        WHERE 
            s.section = ?; 
';

    $stmt = $db->prepare($query);
    $section = $_SESSION["sectionTeacher"]; 
    $stmt->bind_param("s", $section); 
    $stmt->execute();
    $result = $stmt->get_result();
    
    $quizScores = [];
    
    while ($row = $result->fetch_assoc()) {
        $quizScores[] = $row;
    }
    $stmt->close();

    return $quizScores;
}