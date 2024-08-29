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

<!-- Main Content Area -->
<div class="section">
    <div class="container">
        <div class="columns">
            <!-- Lessons Section -->
            <div class="column">
                <h1 class="title">Lesson: Ecosystem</h1>
                <!-- H5P Content Embed -->
                <iframe src="https://scitrack.h5p.com/content/1292357213164786898/embed" 
                        aria-label="Ecosystem" 
                        width="1088" 
                        height="637" 
                        frameborder="0" 
                        allowfullscreen="allowfullscreen" 
                        allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *">
                </iframe>
                <script src="https://scitrack.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>
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
