<?php
include_once '../../admin/dbCon.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $section_counts = [];
    if (isset($_POST['student_id']) && !empty($_POST['student_id'])) {
        $student_id = $_POST['student_id'];
        $stmt = $conn->prepare("
            SELECT tt.student_id, s.name AS student_name, s.username, tt.section_name, COUNT(*) AS section_count
            FROM tbl_time_tracking AS tt
            INNER JOIN tbl_students AS s ON tt.student_id = s.id
            WHERE tt.student_id = ?
            GROUP BY tt.section_name
        ");
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
    } else {
        $stmt = $conn->prepare("
            SELECT tt.student_id, s.name AS student_name, s.username, tt.section_name, COUNT(*) AS section_count
            FROM tbl_time_tracking AS tt
            INNER JOIN tbl_students AS s ON tt.student_id = s.id
            GROUP BY tt.student_id, tt.section_name
        ");
        $stmt->execute();
    }
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        if (isset($student_id)) {
            $section_counts[] = [
                'student_id' => $row['student_id'], 
                'student_name' => $row['student_name'], 
                'username' => $row['username'], 
                'section_name' => $row['section_name'],
                'section_count' => $row['section_count']
            ];
        } else {
            $section_counts[] = [
                'id' => $row['student_id'],
                'student_name' => $row['student_name'],
                'username' => $row['username'],
                'section_name' => $row['section_name'],
                'section_count' => $row['section_count']
            ];
        }
    }
    
    $stmt->close();
    echo json_encode(['section_counts' => $section_counts]);
}