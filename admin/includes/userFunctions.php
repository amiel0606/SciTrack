<?php
function fetchTeachers($db) {
    $result = $db->query('SELECT * FROM tbl_users WHERE role = "Teacher"');
    $teachers = [];
    while ($row = $result->fetch_assoc()) {
        $teachers[] = $row;
    }
    return $teachers;
}
