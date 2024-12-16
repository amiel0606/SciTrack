<?php
    include_once('./includes/header.php');
?>
<link rel="stylesheet" href="./css/bg_Animate.css">
<script src="./js/script_Animate.js" defer></script>
<style>

    :root {
        --bulma-primary-h: 310deg;
        --bulma-primary-s: 41%;
        --bulma-primary-l: 39%;
        --bulma-info-h: 270deg;
        --bulma-info-s: 79%;
        --bulma-info-l: 83%;
        --bulma-link-h: 0deg;
    }
    .input {
        height: 45px;
        --bulma-input-focus-h: 310deg;
        --bulma-input-focus-s: 63%;
        --bulma-input-focus-l: 39%;
        border-color: #808080;
    }
    .background-login{
        background-color: #4A90E2;
    }
    .input::placeholder{
        color: #808080;
    }
    .input:focus{
        border-color: #808080;
        box-shadow: 0 0 0 0;
    }
</style>


<div class="content">
    <p class="title is-invisible"> Welcome</p>
    <div class="container">
        <div class="columns">
            <div class="column is-7"></div>
            
            <div class="column is-5">
                <div class="box background-login has-text-centered is-flex-direction-column is-justify-content-center p-3" style="margin-top: 220px; z-index: 1; position: relative;">
                    <h3 id="title" class="is-size-1 has-text-white has-text-weight-bold mb-6 mt-6">LOGIN</h3>
                    <form action="./includes/login.php" method="post" id="loginForm">
                        <div class="field">
                            <label class="label is-size-5 has-text-white" for="username">Username</label>
                            <div class="control">
                                <input class="input has-background-light has-text-dark" type="text" name="username" placeholder="Enter your username">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label is-size-5 has-text-white" for="password">Password</label>
                            <div class="control">
                                <input class="input has-background-light has-text-dark" type="password" name="password" placeholder="Enter your password">
                            </div>
                        </div>
                        <input class="button is-secondary has-text-white" type="submit" name="Login" value="Login">
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
