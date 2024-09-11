<?php
require_once '../dbCon.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the role name from the form
    $roleName = $_POST['roleName'];

    // Check if the role name is not empty
    if (!empty($roleName)) {
        // Insert the new role into the roles table
        $query = "INSERT INTO tbl_roles (name) VALUES (?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $roleName);
        $stmt->execute();
        $roleId = $stmt->insert_id;
        $stmt->close();

        // Get the permissions from the form
        $permissions = array(
            'addStudent' => $_POST['addStudent'] ?? 0,
            'removeTeacher' => $_POST['removeTeacher'] ?? 0,
            'addTeacher' => $_POST['addTeacher'] ?? 0,
            'addAdmin' => $_POST['addAdmin'] ?? 0,
            'viewLesson' => $_POST['viewLesson'] ?? 0,
            'removeStudents' => $_POST['removeStudents'] ?? 0,
            'viewStudents' => $_POST['viewStudents'] ?? 0,
            'editRoles' => $_POST['editRoles'] ?? 0,
            'removeAdmin' => $_POST['removeAdmin'] ?? 0,
        );

        // Insert the permissions into the role_permissions table
        foreach ($permissions as $permissionName => $permissionValue) {
            if ($permissionValue == 'on') {
                // Get the permission ID from the permissions table
                $query = "SELECT id FROM tbl_permissions WHERE name = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("s", $permissionName);
                $stmt->execute();
                $result = $stmt->get_result();
        
                if ($result) { // Check if $result is not null
                    $permissionId = $result->fetch_assoc()['id'];
                    $stmt->close();
        
                    // Insert the role-permission association into the role_permissions table
                    $query = "INSERT INTO roles_permissions (id_role, id_permission) VALUES (?, ?)";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ii", $roleId, $permissionId);
                    $stmt->execute();
                    $stmt->close();
                } else {
                    // Handle the case where the permission record doesn't exist
                    echo "Error: Permission '$permissionName' does not exist.";
                }
            }
        }

        // Redirect to a success page or display a success message
        header('Location: ../../adminEdit.php?error=success');
        exit;
    } else {
        // Display an error message if the role name is empty
        echo 'Error: Role name cannot be empty.';
    }
} else {
    // Display an error message if the form has not been submitted
    echo 'Error: Form has not been submitted.';
}