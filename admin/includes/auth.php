<?php

function checkAdminRole() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true || $_SESSION['role'] !== 'Admin') {
        header("Location: ../index.php?error=notAdmin");
        exit();
    }
}
