<?php
$fname = $_SESSION['firstName'];
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SciTrack</title>
    <link rel="stylesheet" href="./css/style.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/bfc8b900f1.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" href="../image/scitrack-icon.png" type="image/png">
</head>

<body>
    <style>
        li {
            list-style-type: none;
            margin-top: 0;
        }

        .menu-list li:last-child {
            margin-top: 0;
            /* Ensure no extra gap for the last item */
        }

        :root {
            --bulma-primary-h: 240deg;
            --bulma-primary-s: 16%;
            --bulma-primary-l: 31%;
            --bulma-danger-h: 0deg;
            --bulma-danger-s: 81%;
            --bulma-danger-l: 53%;
        }

        .menu {
            position: sticky;
            display: inline-block;
            vertical-align: top;
            min-height: 100vh;
            overflow-y: auto;
            align-items: center;
            width: 400px;
            text-align: center;
            padding: 25px;
        }

        .menu .menu-label {
            font-size: 0.25rem;
        }

        .menu-list .menu-item {
            font-size: 0.3rem;
        }

        .menu-list .menu-item .icon {
            font-size: 1.4rem;
            margin-right: 10px;
        }

        .dash {
            box-shadow: 10px 10px 14px 0px rgba(0, 0, 0, 0.75);
            height: 267px;
            width: 100%;
        }


        .table {
            --bulma-table-color: hsl(0, 2%, 58%);
            --bulma-table-background-color: hsl(0, 0%, 93%);
            --bulma-table-head-cell-color: hsl(0, 0%, 100%);
            --bulma-table-cell-text-align: center;
            --bulma-table-head-background-color: hsl(240, 16%, 31%);
            --bulma-table-cell-padding: 5px;
            --bulma-table-row-hover-background-color: hsl(237, 68%, 94%);
            width: 1077px;
        }

        .columns {
            margin-top: 0;
            background-color: #D9D9D9;
        }

        body {
            overflow: hidden;
            /* Hide scrollbars */
            height: 100vh;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .navbar {
            --bulma-navbar-box-shadow-size: 0px 7px 7px -1px;
            --bulma-navbar-box-shadow-color: rgba(0, 0, 0, 0.75);

        }

        .navbar-end {
            align-items: center;
        }
    </style>

    <?php
    $error = $_GET['error'] ?? 'none';

    $errorMessages = [
        'WrongLogin' => 'Invalid username or password.',
        'EmptyInput' => 'Please fill in all required fields.',
        'none' => '',
        'Success' => 'Added admin Successfully.',
        'stmtFailed' => 'Something went wrong. Please try again.',
        'addStudentSuccess' => 'Added student Successfully.',
        'successEditStudent' => 'Edited Information Successfully.',
        'successEditTeacher' => 'Edited Information Successfully.',
        'addTeacherSuccess' => 'Added Teacher Successfully'
    ];

    if (isset($errorMessages[$error])) {
        $errorMessage = $errorMessages[$error];
    } else {
        $errorMessage = 'An unknown error occurred.';
    }

    $notificationClass = ($error !== 'none') ? 'notification is-success addNotification has-text-centered' : 'notification is-success addNotification has-text-centered is-invisible';

    ?>
    <div class="columns">
        <aside class="menu has-background-primary">
            <img class="" class="" src="../image/scitrack-logo.png" alt="SciTrack Logo" style="max-width: 100%; height: auto;">
            <ul class="menu-list">
                <li>
                    <p class="menu-item has-background-primary mb-6 "><i
                            class="fa-regular fa-circle-user fa-4x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4"><?php echo $fname ?></span></p>
                </li>
                <li><a href="./adminDash.php" class="menu-item has-background-primary mt-6"><i
                            class="fa-solid fa-chart-line fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Dashboard</span></a></li>
                <li><a href="./adminStudents.php" class="menu-item has-background-primary mt-6"><i
                            class="fa-solid fa-graduation-cap fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Students</span></a></li>
                <li><a href="./adminTeachers.php" class="menu-item has-background-primary mt-6"><i
                            class="fa-solid fa-chalkboard-user fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Teachers</span></a></li>
                <li><a href="./adminRegister.php" class="menu-item has-background-primary mt-6"><i
                            class="fa-solid fa-solid fa-plus fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Add an Admin</span></a></li>
                <li><a href="./viewArchivedAccounts.php" class="menu-item has-background-primary mt-6"><i
                            class="fa-solid fa-solid fa-gears fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Archived Accounts</span></a></li>
                <li><a href="./includes/logout.php" class="menu-item has-background-primary mt-6"><i
                            class="fa-solid fa-arrow-right-from-bracket fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Logout</span></a></li>
            </ul>
        </aside>