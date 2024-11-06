<?php
header('Content-Type: application/json');
include_once './dbCon.php';

$response = array('success' => false, 'message' => '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['role'])) {
        $accountId = intval($_POST['id']); 
        $role = $_POST['role']; 

        $table = '';
        if ($role === 'Students') {
            $table = 'tbl_students';
        } elseif ($role === 'Teachers') {
            $table = 'tbl_teachers';
        } else {
            $response['message'] = 'Invalid role provided.';
            echo json_encode($response);
            exit;
        }

        $sql = "UPDATE $table SET status = 'Active' WHERE id = ?";
        
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $accountId); 
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    $response['success'] = true;
                    $response['message'] = 'Account activated successfully.';
                } else {
                    $response['message'] = 'No account found with the provided ID.';
                }
            } else {
                $response['message'] = 'Error executing the query.';
            }
            $stmt->close();
        } else {
            $response['message'] = 'Error preparing the statement.';
        }
    } else {
        $response['message'] = 'Account ID or role not provided.';
    }
} else {
    $response['message'] = 'Invalid request method.';
}

$conn->close();
echo json_encode($response);