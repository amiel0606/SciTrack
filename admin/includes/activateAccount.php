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
        $sqlUser = "UPDATE tbl_users SET status = 'Active' WHERE id = ?";

        $conn->begin_transaction();

        try {
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("i", $accountId); 
                if (!$stmt->execute()) {
                    throw new Exception("Error executing query on $table.");
                }
                $stmt->close();
            } else {
                throw new Exception("Error preparing query on $table.");
            }

            if ($stmtUser = $conn->prepare($sqlUser)) {
                $stmtUser->bind_param("i", $accountId); 
                if (!$stmtUser->execute()) {
                    throw new Exception("Error executing query on tbl_users.");
                }
                $stmtUser->close();
            } else {
                throw new Exception("Error preparing query on tbl_users.");
            }

            $conn->commit();
            $response['success'] = true;
            $response['message'] = 'Account activated successfully.';

        } catch (Exception $e) {
            $conn->rollback();
            $response['message'] = 'Error: ' . $e->getMessage();
        }
    } else {
        $response['message'] = 'Account ID or role not provided.';
    }
} else {
    $response['message'] = 'Invalid request method.';
}

$conn->close();
echo json_encode($response); 
