<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SciTrack</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/bfc8b900f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" href="../image/scitrack-icon.png" type="image/png">
</head>

<body>
    <style>
        li {
            list-style-type: none;
        }

        :root {
            --bulma-primary-h: 240deg;
            --bulma-primary-s: 16%;
            --bulma-primary-l: 31%;
        }

        .menu {
            position: sticky;
            display: inline-block;
            vertical-align: top;
            min-height: 100vh;
            overflow-y: auto;
            width: 400px;
            padding: 25px;
        }

        .menu-item a {
            padding: 3px;
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

        body::-webkit-scrollbar {
            display: none;
        }

        .columns {
            margin-top: 0;
        }


        body {
            background-color: #F6F4EB;
        }
    </style>
    <?php
    session_start();
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
            <img class="" class="" src="../image/scitrack-logo.png" alt="SciTrack Logo"
                style="max-width: 100%; height: auto;">
            <ul class="menu-list">
                <li>
                    <p class="menu-item has-background-primary mb-6 "><i
                            class="fa-regular fa-circle-user fa-2x icon mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4"><?php echo $_SESSION['firstName'] ?></span></p>
                </li>
                <li><a href="./teacherDash.php" class="menu-item has-background-primary mt-5"><i
                            class="fa-solid fa-solid fa-house fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Home</span></a></li>
                <li><a href="./assessmentResult.php" class="menu-item has-background-primary mt-5"><i
                            class="fa-solid fa-regular fa-newspaper fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-5"> Assessment Results</span></a></li>
                <li><a href="./teacherLessons.php" class="menu-item has-background-primary mt-5"><i
                            class="fa-solid fa-solid fa-chalkboard-user fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Lessons</span></a></li>
                <li><a href="./studentProgress.php" class="menu-item has-background-primary mt-5"><i
                            class="fa-solid fa-bars-progress fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Lessons Progress</span></a></li>
                <li><a href="./manageQuizzes.php" class="menu-item has-background-primary mt-5"><i
                            class="fa-regular fa-file-lines fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Manage Quiz</span></a></li>
                <li><a href="../admin/includes/logout.php" class="menu-item has-background-primary mt-5"><i
                            class="fa-solid fa-arrow-right-from-bracket fa-2x icon is-large mr-4 has-text-white"></i><span
                            class="text has-text-white is-size-4">Logout</span></a></li>
            </ul>
        </aside>