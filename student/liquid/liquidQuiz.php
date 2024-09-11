<?php
    include_once('./includes/board.php');
?>

<style>
    .button.is-text {
        transition: color 0.3s ease;
        text-decoration: none;
    }

    .button.is-text:hover {
        background-color: #32a774;
        color: white;
    }

    .quiz-content {
        display: none;
    }

    .quiz-content.active {
        display: block;
    }

    #quizButton {
        position: absolute; /* Position relative to the nearest positioned ancestor */
        right: 20px; /* Distance from the right edge */
        bottom: 20px; /* Distance from the bottom edge */
        z-index: 3; /* Higher z-index than the iframe */
    }

    .iframe-container {
        position: relative;
        z-index: 2; /* Lower z-index than buttons */
        width: 80%; /* Adjust the width of the iframe container */
        margin: 0 auto; /* Center the iframe container */
    }

    .iframe-container iframe {
        width: 100%; /* Make iframe width 100% of its container */
        margin-top: 100px; /* Adjust top margin if needed */
        border: none;
        z-index: 2; /* Ensure iframe is above image */
    }

    .image-container {
        position: relative;
    }

    .image-container img {
        width: 100%;
        height: auto;
        z-index: 1; /* Ensure image is below iframe */
    }

    #leftButton, #rightButton {
        margin-bottom: 50px;
        margin-right: 40px;

    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered mt-5">
                <div class="column is-full image-container">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                        <div class="iframe-container">
                            <iframe src="https://scitrack.h5p.com/content/1292375351285473868/embed" aria-label="Liquid Quiz" width="900" height="900" frameborder="0" 
                                allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *">
                            </iframe>
                            <script src="https://scitrack.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>
                        </div>
                    </figure>

                    <!-- Left and Right Buttons-->
                    <div id="quizButton">
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mr-4" id="leftButton">
                            <i class="fas fa-arrow-left button-icon"></i>
                        </button>
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="rightButton">
                            <i class="fas fa-arrow-right button-icon"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');

        leftButton.addEventListener('click', function () {
            window.location.href = 'matterLiquid.php'; 
        });

        rightButton.addEventListener('click', function () {
            window.location.href = 'liquidQuizResult.php'; 
        });
    });
</script>
