<?php
    include_once('./includes/board.php');
?>

<style>
    .motion-content {
        display: none;
    }
    .motion-content-active {
        display: block;
    }
    .topic-container {
        position: relative; 
        z-index: 10;
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
    }
    .topic-container:hover {
        transform: scale(1.05);
    }
    .topic-container:hover figure img {
        filter: brightness(1.1);
    }
    #button{
        margin-bottom: 1%;
        margin-right: 2%;
    }
    #einstein-image{
        width: 25%;
        max-width: 25%;
        margin-right: -5%;
        margin-left: -8%;
        margin-bottom: 0%;
    }
    #motionTopic figure {
        position: relative;
        z-index: 15;
    }
    @font-face {
        font-family: 'Avenue';
        src: url('../../font/Avenue.otf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../../font/Haniley.otf') format('opentype');
    }
    .main-font {
        font-family: 'Avenue';
    }
    .secondary-font{
        font-family: 'Haniley';
    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="column is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                    </figure>

                    <!-- Motion Definition -->
                    <div class="x-content" id="motionDef">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6 secondary-font">WHAT IS MOTION?</h1>
                            
                            <!-- Text -->
                            <div class="column is-four-fifths mt-6">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                has-text-centered has-text-weight-semibold has-text-white main-font">
                                Motion occurs when a body or object changes position or place. 
                                It involves a lot of factors such as how fast the change in position occurred 
                                and to what direction the change in position happened.

                                </p>
                            </div>
                            <div class="audio-icon">
                                            <button id="playAudio">
                                                <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="motionAudio" src="../../sounds/motionDef.mp3"></audio>
                                        </div>
                        </div>
                    </div>

                    <!-- Motion Topic -->
                    <div class="motion-content" id="motionTopic">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-2 secondary-font">CHOOSE TOPIC</h1>
                            
                            <div class="columns is-centered">
                                <!-- Lesson 1 and 2 -->
                                <div class="column is-two-thirds">
                                    <div class="columns">
                                        <div class="column is-half has-text-centered">
                                            <div class="title is-size-3-dekstop is-size-4-tablet has-text-white 
                                            has-text-weight-semibold topic-container main-font">
                                                <a href="./lesson1/motionDistance.php">
                                                    <figure class="image">
                                                        <img src="../../image/motion1.png" alt="motion1">
                                                    </figure>
                                                </a>
                                                <p>Lesson 1: What is Motion?</p>
                                            </div>
                                        </div>

                                        <div class="column is-half has-text-centered">
                                            <div class="title is-size-3-dekstop is-size-4-tablet has-text-white 
                                            has-text-weight-semibold topic-container main-font">
                                                <a href="./lesson2/measuringDef.php">
                                                    <figure class="image">
                                                        <img src="../../image/motion2.png" alt="motion2">
                                                    </figure>
                                                </a>
                                                <p>Lesson 2: Measuring Distance and Time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left and Right Buttons-->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-5" id="examplesButton">
                        <div class="column is-full is-flex is-justify-content-flex-end" id="button">
                            <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mr-4" id="leftButton">
                                <i class="fas fa-arrow-left button-icon"></i>
                            </button>
                            <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="rightButton">
                                <i class="fas fa-arrow-right button-icon"></i>
                            </button>
                        </div>

                        <!-- Motion Image -->
                        <img src="../../image/motion1.png" alt="Motion Figure" id="einstein-image">
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
        const motionDef = document.getElementById('motionDef');
        const motionTopic = document.getElementById('motionTopic');
        const audio = document.getElementById('motionAudio');

        let currentContent = 'motionDef';

        // Update content and manage audio playback
        function updateContent() {
            if (currentContent === 'motionDef') {
                motionDef.style.display = 'block';
                motionTopic.style.display = 'none';
                rightButton.style.display = 'block'; 
                playAudio(); // Play audio when motionDef is active
            } else {
                motionDef.style.display = 'none';
                motionTopic.style.display = 'block';
                rightButton.style.display = 'none';
                pauseAudio(); // Pause audio when switching away from motionDef
            }
        }

        // Function to play audio
        function playAudio() {
            audio.currentTime = 0; // Start audio from the beginning
            audio.play();
        }

        // Function to pause audio
        function pauseAudio() {
            audio.pause();
            audio.currentTime = 0;
        }

        updateContent();

        // Left button functionality
        leftButton.addEventListener('click', function () {
            if (currentContent === 'motionTopic') {
                currentContent = 'motionDef';
                updateContent();
            } else {
                window.location.href = './../studentWelcome.php?show=Lessons';
            }
        });

        // Right button functionality
        rightButton.addEventListener('click', function () {
            if (currentContent === 'motionDef') {
                currentContent = 'motionTopic';
                updateContent();
            }
        });

        // Function to get URL parameters
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const showM = getQueryParam('show');
        if (showM === 'motionTopic') {
            currentContent = 'motionTopic';
            updateContent();
        }

        // Pause audio when navigating
        leftButton.addEventListener('click', pauseAudio);
        rightButton.addEventListener('click', pauseAudio);
    });
</script>
