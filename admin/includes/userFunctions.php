<?php
function fetchTeachers($db) {
    $result = $db->query('SELECT * FROM tbl_teachers where status = "Active"');
    $teachers = [];
    while ($row = $result->fetch_assoc()) {
        $teachers[] = $row;
    }
    return $teachers;
}

function fetchStudents($db){
    $result = $db->query('SELECT * FROM tbl_students where status = "Active"');
    $students = [];
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
    return $students;
}

function fetchRoles($db){
    $result = $db->query('SELECT * FROM tbl_roles');
    $roles = [];
    while ($row = $result->fetch_assoc()) {
        $roles[] = $row;
    }
    return $roles;
}

function getCountRoles($db) {
    $result = $db->query('SELECT role, COUNT(*) as count FROM tbl_users GROUP BY role');
    $rolesCount = [];
    while($row = $result->fetch_assoc()) {
        $rolesCount[$row['role']] = $row['count'];
    }
    return $rolesCount;
}

