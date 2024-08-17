<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SciTrack</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">
</head>
<body class="has-navbar-fixed-top">

<!-- Navbar -->
<nav class="navbar is-fixed-top has-background-dark">
    <div class="navbar-brand">
        <a class="navbar-item has-text-white has-text-weight-bold" href="#">
            LOGO
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-end">
            <a href="./adminDash.php" class="navbar-item has-text-white">
                <span class="icon is-small mr-2"><i class="fas fa-chart-line fa-lg"></i></span> 
                Dashboard
            </a>
            <a href="./adminLeaderboards.php" class="navbar-item has-text-white">
                <span class="icon is-small mr-2"><i class="fas fa-trophy fa-lg"></i></span> 
                Leaderboards
            </a>
            <a href="./adminTeachers.php" class="navbar-item has-text-white">
                <span class="icon is-small mr-2"><i class="fas fa-chalkboard-teacher fa-lg"></i></span> 
                Teachers
            </a>
            <a href="./includes/logout.php" class="navbar-item has-text-white">
                <span class="icon is-small mr-2"><i class="fas fa-sign-out-alt fa-lg"></i></span> 
                Logout
            </a>
        </div>
    </div>
</nav>

<!-- Main -->
<div class="section">
    <div class="container">
        <div class="columns">
            <!-- Student Profile Section -->
            <div class="column is-one-third">
                <div class="box">
                    <h2 class="title has-text-dark">Student Profile</h2>
                    <ul>
                        <li><strong>Student Name:</strong> Jorenz Ferrer</li>
                        <li><strong>Grade:</strong> 5th Grade</li>
                        <li><strong>Average Score:</strong> 85%</li>
                        <li><strong>Lesson Completion:</strong> 95%</li>
                    </ul>
                </div>
            </div>

            <!-- Lessons Section -->
            <div class="column is-two-thirds">
                <div class="box">
                    <h2 class="title has-text-dark">Lessons</h2>
                    <p>Overview of lessons:</p>
                    <div class="columns is-multiline">
                        <div class="column is-half">
                            <strong>Lesson 1:</strong>
                            <a href="#"> Matter</a>
                            <figure class="image">
                                <img src="../image/matter.png" alt="Matter">
                            </figure>
                        </div>
                        <div class="column is-half">
                            <strong>Lesson 2:</strong>
                            <a href="#"> The Ecosystem</a>
                            <figure class="image">
                                <img src="../image/ecosystem.png" alt="The Ecosystem">
                            </figure>
                        </div>
                        <div class="column is-half">
                            <strong>Lesson 3:</strong>
                            <a href="#"> Motion</a>
                            <figure class="image">
                                <img src="../image/motion.png" alt="Motion">
                            </figure>
                        </div>
                        <div class="column is-half">
                            <strong>Lesson 4:</strong>
                            <a href="#"> The Earth's Surface</a>
                            <figure class="image">
                                <img src="../image/Surface.png" alt="The Earth's Surface">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer has-background-dark has-text-centered">
    <p class="has-text-light">&copy; 2024 SciTrack. All rights reserved.</p>
</footer>

</body>
</html>
