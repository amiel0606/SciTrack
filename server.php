<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/admin/includes/dbCon.php';
require __DIR__ . '/admin/includes/userFunctions.php';
require __DIR__ . '/teacher/includes/userFunctions.php';
require __DIR__ . '/student/includes/userFunctions.php';

header('Content-Type: application/json');
$type = $_POST['type'] ?? null;

$response = [];

if ($type === 'loadStudents') {
    header('Content-Type: application/json');
    $students = loadStudents($conn);
    if (!$students) {
        echo json_encode([]);
        exit;
    }
    echo json_encode($students);
    exit;
} elseif ($type === 'loadTeachers') {
    $teachers = loadTeachers($conn);
    if (!$teachers) {
        echo json_encode([]);
        exit;
    }
    echo json_encode($teachers);
    exit;
} elseif ($type === 'loadRoles') {
    $response = loadRoles($conn);
} elseif ($type === 'loadLessons') {
    $section = $_POST['section'] ?? null;
    $response = loadLessons($conn, $section);
}  elseif ($type === 'loadStudentData') {
    $id = $_POST['id'] ?? null;
    $response = loadStudent($conn, $id);
} elseif ($type === 'getLessons') {
    $response = getLesson($conn);
} elseif ($type === 'getCountStudents') {
    header('Content-Type: application/json');

    $studentCount = getCountActiveStudents($conn);
    echo json_encode(['counts' => ['active' => $studentCount]]);
    exit;
} elseif ($type === 'getTeacherCounts') {
    header('Content-Type: application/json');

    $teacherCount = getCountActiveTeachers($conn);
    echo json_encode(['counts' => ['active' => $teacherCount]]);
    exit;
} elseif ($type === 'getQuizScores') {
    $quizScores = sendQuizScores($conn);
    if (!$quizScores) {
        echo json_encode([]);
        exit;
    }
    echo json_encode($quizScores);
    exit;
} else {
    $response = ['error' => 'Invalid request type'];
}

echo json_encode($response);

// Helper functions
function loadStudents($conn)
{
    return fetchStudents($conn);
}

function loadTeachers($conn)
{
    return fetchTeachers($conn);
}

function loadRoles($conn)
{
    return fetchRoles($conn);
}

function loadLessons($conn, $section)
{
    return fetchLessons($conn, $section);
}

function giveLessons($conn, $section, $lesson, $date)
{
    try {
        return giveLesson($conn, $section, $lesson, $date);
    } catch (Exception $e) {
        error_log("Error updating lesson: " . $e->getMessage());
        return false;
    }
}

function loadStudent($conn, $id)
{
    return getStudentSection($conn, $id);
}

function getLesson($conn)
{
    return getLessons($conn);
}

function getCountStudents($conn)
{
    return [
        'type' => 'studentCount',
        'counts' => getCountActiveStudents($conn)
    ];
}

function getCountTeachers($conn)
{
    return [
        'type' => 'teacherCount',
        'counts' => getCountActiveTeachers($conn)
    ];
}

function sendQuizScores($conn)
{
    $quizScores = fetchQuizScores($conn);
    foreach ($quizScores as &$quizScore) {
        $quizScore['type'] = 'quiz_score';
    }
    return $quizScores;
}
