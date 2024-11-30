<!DOCTYPE html>
<html lang="en" data-theme="light" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SciTrack</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/bfc8b900f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <style>
        :root {
            --bulma-primary-h: 0deg;
            --bulma-primary-s: 49%;
            --bulma-primary-l: 28%;
            --bulma-danger-h: 0deg;
            --bulma-danger-s: 81%;
            --bulma-danger-l: 53%;
        }
        body {
            background-color: #ffffff;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            min-height: 100vh;
            color: #ffffff;
        }

        .floating-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh; 
            z-index: 0;
            overflow: hidden; 
        }

        .floating-container img {
            position: absolute;
            z-index: 0;
            opacity: 0.7;
            transition: transform 0.5s ease-in-out; 
        }

        @keyframes drift {
            0% { transform: translate(0, 0); }
            25% { transform: translate(60px, -40px); }
            50% { transform: translate(120px, 60px); }
            75% { transform: translate(-60px, 40px); }
            100% { transform: translate(0, 0); }
        }
    </style>

    
    <!-- Navbar -->
    <nav class="navbar is-fixed-top ">
        <div class="navbar-brand">
            <a class="navbar-item has-text-white has-text-weight-bold" href="#">
                LOGO
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                <a href="studentdashBoard.php" class="navbar-item has-text-white">
                    <span class="icon is-medium mr-2"><i class="fas fa-chart-line fa-lg"></i></span> 
                    Dashboard
                </a>
                <a href="leaderboards.php" class="navbar-item has-text-white">
                    <span class="icon is-medium mr-2"><i class="fas fa-trophy fa-lg"></i></span> 
                    Leaderboards
                </a>
                <a href="studentWelcome.php?show=Lessons" class="navbar-item has-text-white">
                    <span class="icon is-medium mr-2"><i class="fas fa-user fa-lg"></i></span> 
                    Lessons
                </a>

                <a href="./../admin/includes/logout.php" class="navbar-item has-text-white">

                    <span class="icon is-medium mr-2"><i class="fas fa-sign-out-alt fa-lg"></i></span> 
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Floating images container -->
    <div class="floating-container">
        <img src="../image/moon.png" alt="moon" class="drifting-img">
        <img src="../image/pencil.png" alt="pencil" class="drifting-img">
        <img src="../image/book.png" alt="book" class="drifting-img">
        <img src="../image/saturn.png" alt="saturn" class="drifting-img">
        <img src="../image/magnet.png" alt="magnet" class="drifting-img">
        <img src="../image/apple.png" alt="apple" class="drifting-img">
        <img src="../image/plant.png" alt="plant" class="drifting-img">
        <img src="../image/magnify.png" alt="magnify" class="drifting-img">
        <img src="../image/bottle.png" alt="bottle" class="drifting-img">
        <img src="../image/scope.png" alt="scope" class="drifting-img">
        <img src="../image/brain.png" alt="brain" class="drifting-img">
        <img src="../image/cell.png" alt="cell" class="drifting-img">
        <img src="../image/fossil.png" alt="fossil" class="drifting-img">
        <img src="../image/beaker.png" alt="beaker" class="drifting-img">
        <img src="../image/frog.png" alt="frog" class="drifting-img">
        <img src="../image/asteroid.png" alt="asteroid" class="drifting-img">
        <img src="../image/dna.png" alt="dna" class="drifting-img">
        <img src="../image/telescope.png" alt="telescope" class="drifting-img">
        <img src="../image/atom.png" alt="atom" class="drifting-img">
    </div>
    
    <script>
        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.drifting-img');
            const container = document.querySelector('.floating-container');
            const containerWidth = container.clientWidth;
            const containerHeight = container.clientHeight;

            const imgSize = 300; 
            const margin = 10; 

            const shuffledImages = Array.from(images);
            shuffleArray(shuffledImages);

            const cols = Math.ceil(containerWidth / (imgSize + margin));
            const rows = Math.ceil(containerHeight / (imgSize + margin));

            shuffledImages.forEach((img, index) => {
                const col = index % cols;
                const row = Math.floor(index / cols);

                const startX = col * (imgSize + margin) - margin;
                const startY = row * (imgSize + margin) - margin;

                img.style.width = imgSize + 'px';
                img.style.left = startX + 'px';
                img.style.top = startY + 'px';

                img.style.maxWidth = 'none';
                img.style.maxHeight = 'none';

                img.style.animation = `drift ${Math.random() * 20 + 20}s infinite linear`;

                img.style.transform = `translate(${Math.random() * containerWidth}px, ${Math.random() * containerHeight}px)`;
            });
        });

    </script>