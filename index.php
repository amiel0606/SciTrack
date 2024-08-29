<?php
    include_once('./includes/header.php');
?>
<link rel="stylesheet" href="bg_Animate.css">
<script src="script_Animate.js" defer></script>

<div class="content">
    <p class="title is-invisible"> Welcome</p>
    <div class="container">
        <div class="columns">
            <div class="column is-7"></div>
            
            <div class="column is-5">
                <div class="box has-background-info has-text-centered is-flex-direction-column is-justify-content-center p-3" style="margin-top: 220px; z-index: 1; position: relative;">
                    <h3 id="title" class="is-size-1 has-text-white has-text-weight-bold mb-6 mt-6">LOGIN</h3>
                    <form action="./includes/login.php" method="post" id="loginForm">
                        <div class="field">
                            <label class="label is-size-5 has-text-white" for="username">Username</label>
                            <div class="control">
                                <input class="input" type="text" name="username" placeholder="Enter your username">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label is-size-5 has-text-white" for="password">Password</label>
                            <div class="control">
                                <input class="input" type="password" name="password" placeholder="Enter your password">
                            </div>
                        </div>
                        <input class="button is-primary" type="submit" name="Login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Floating images container -->
    <div class="floating-container">
        <img src="./image/moon.png" alt="moon" class="drifting-img">
        <img src="./image/pencil.png" alt="pencil" class="drifting-img">
        <img src="./image/book.png" alt="book" class="drifting-img">
        <img src="./image/saturn.png" alt="saturn" class="drifting-img">
        <img src="./image/magnet.png" alt="magnet" class="drifting-img">
        <img src="./image/apple.png" alt="apple" class="drifting-img">
        <img src="./image/plant.png" alt="plant" class="drifting-img">
        <img src="./image/magnify.png" alt="magnify" class="drifting-img">
        <img src="./image/bottle.png" alt="bottle" class="drifting-img">
        <img src="./image/scope.png" alt="scope" class="drifting-img">
        <img src="./image/brain.png" alt="brain" class="drifting-img">
        <img src="./image/cell.png" alt="cell" class="drifting-img">
        <img src="./image/fossil.png" alt="fossil" class="drifting-img">
        <img src="./image/beaker.png" alt="beaker" class="drifting-img">
        <img src="./image/frog.png" alt="frog" class="drifting-img">
        <img src="./image/asteroid.png" alt="asteroid" class="drifting-img">
        <img src="./image/dna.png" alt="dna" class="drifting-img">
        <img src="./image/telescope.png" alt="telescope" class="drifting-img">
        <img src="./image/atom.png" alt="atom" class="drifting-img">
    </div>
</div>
