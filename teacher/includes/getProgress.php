<?php
include_once '../../admin/dbCon.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $section_counts = [];
    $stmt = null;
    try {
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
        } else {
            $teacherId = $_SESSION["id"];
            $sectionQuery = "SELECT section FROM tbl_teachers WHERE id = ?";
            $stmtSection = $conn->prepare($sectionQuery);
            $stmtSection->bind_param("i", $teacherId); 
            $stmtSection->execute();
            $resultSection = $stmtSection->get_result();
            if ($resultSection->num_rows > 0) {
                $rowSection = $resultSection->fetch_assoc();
                $sectionTeacher = $rowSection['section'];
                $_SESSION["sectionTeacher"]= $rowSection['section'];
                $stmt = $conn->prepare("
                    SELECT tt.student_id, s.name AS student_name, s.username, tt.section_name, COUNT(*) AS section_count
                    FROM tbl_time_tracking AS tt
                    INNER JOIN tbl_students AS s ON tt.student_id = s.id
                    WHERE s.section = ?
                    GROUP BY tt.student_id, tt.section_name
                ");
                $stmt->bind_param("s", $sectionTeacher);
            } else {
                echo json_encode(["error" => "No section found for the teacher."]);
                exit; 
            }
            $stmtSection->close();
        }
        if ($stmt) {
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $section_counts[] = [
                    'student_id' => $row['student_id'], 
                    'student_name' => $row['student_name'], 
                    'username' => $row['username'], 
                    'section_name' => $row['section_name'],
                    'section_count' => $row['section_count']
                ];
            }
            $stmt->close(); 
        }
        echo json_encode(['section_counts' => $section_counts]);
    } catch (Exception $e) {
        echo json_encode(["error" => $e->getMessage()]);
    } finally {
        if ($conn) {
            $conn->close();
        }
    }
}