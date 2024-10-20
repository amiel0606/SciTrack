<?php
    include_once('./includes/board.php');
?>

<style>
    .matter-content {
        display: none;
    }
    .matter-content-active {
        display: block;
    }
    #matterTopic{
        position: absolute; 
        top: 3%; 
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1; 
        width: 90%; 
        text-align: center;
    }
    #einstein-image{
        width: 100%;
        max-width: 31%;
        margin-right: -25.7%;
        margin-left: -10%;
        margin-bottom: -6.8%;
    }
    .button-text {
        font-size: 0.75em;
    }
    .lesson-image{
        width: 140%;
        max-width: 450px; 
        margin-right: 12rem;
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        z-index: 5;
    }
    .lesson-image:hover {
        transform: scale(1.05);
    }
    .button-transparent {
        background-color: transparent; 
        border: none;
        color: white;
        font-size: 2em;
        padding: 0; 
    }
    .lessons-button-container {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 25%;
        z-index: 2;
    }
    .topic-container {
        width: 120%;
        max-width: 140%; 
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        text-align: center;
    }
    .topic-container:hover {
        transform: scale(1.05);
    }
    .topic-container:hover figure img {
        filter: brightness(1.2);
    }
    .navbar{
        background-color: #4A90E2 !important;
    }
    .navbar-item:hover{
        background-color: #266bbb;
        color: white;
    }

    @font-face {
        font-family: 'verdana';
        src: url('../../font/verdana.ttf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../../font/Haniley.otf') format('opentype');
    }
    .main-font {
        font-family: 'verdana';
    }
    .secondary-font{
        font-family: 'Haniley';
    }
    #headers{
        font-size: 4rem;
        margin-bottom: 7%;
    }
    #headers1{
        font-size: 4rem;
        margin-top: -13%;
        margin-bottom: 10%;
    }
    #headers2{
        font-size: 4rem;
    }
    #description1{
        font-size: 2rem;
    }
    .description2{
        font-size: 2.2rem;
    }
    .topic-container #sol{
        margin-left: -55%;
        margin-top: 10%;
        width: 110%;
        max-width: 130%;
    }
    .topic-container #liquid{
        margin-left: -10%;
        margin-top: 10%;
        width: 110%;
        max-width: 130%; 
    }
    .topic-container #gas{
        margin-left: 25%;
        margin-top: 10%;
        width: 110%;
        max-width: 130%; 
    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../../image/board.png" alt="Board Image" style="width: 140%; height: 105%; max-width: 1800px;; margin-left: -17%">
                    </figure>
                    

                    <!-- Matter Lesson -->
                    <div class="x-content" id="matterLesson">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6 mt-4">
                            <h1 class="title has-text-white secondary-font" id="headers">MATTER</h1>
                            
                            <div class="lesson-content" id="lesson1">
                                <!-- Lesson Image -->
                                <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered mb-6">
                                    <a href="#" id="lessonImageLink">
                                        <figure class="image lesson-image">
                                            <img src="../../image/matter1.png" alt="Matter 1">
                                        </figure>
                                    </a>
                                    <p class="subtitle  has-text-white main-font mb-6" id="description1">
                                        LESSON 1: STATE OF MATTER
                                    </p>
                                </div>

                                <div class="lessons-button-container" id="lessonsButton">
                                    <button class="button button-transparent" id="leftLessonbtn">
                                        <i class="fas fa-chevron-left button-icon"></i>
                                    </button>
                                    <button class="button button-transparent" id="rightLessonbtn">
                                        <i class="fas fa-chevron-right button-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Matter Objective -->
                    <div class="matter-content" id="objectives">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="headers1">LEARNING OBJECTIVES</h1>

                            <!-- Content Layout -->
                            <div class="is-centered">
                                <p class="subtitle description2 has-text-white main-font mb-6"> At the end of the lesson you will able to:</p>
                                <!-- Text Column -->
                                <div class="column is-full mt-4">
                                    <div class="subtitle description2 has-text-white">
                                        <p class="mb-5 main-font">Define what is matter</p>
                                        <p class="mb-5 main-font">Describe the four states of matter</p>
                                        <p class="mb-5 main-font">Identify the matter in the states of solid, liquid and gas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Topic -->
                    <div class="matter-content" id="matterTopic">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center p-6">
                            <h1 class="title has-text-white secondary-font" id="headers2">CHOOSE TOPIC</h1>
                            
                            <div class="columns is-centered mt-5">
                                <!-- One-third -->
                                <div class="column is-one-third has-text-centered">
                                    <div class="title is-size-3 has-text-white topic-container main-font">
                                        <div id="sol">
                                            <p style="letter-spacing: 0.15em;">SOLID</p>
                                            <a href="matterSolid.php">
                                                <figure class="image">
                                                    <img src="../../image/solidGif.gif" alt="Solid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Two-thirds -->
                                <div class="column is-two-thirds">
                                    <div class="columns">
                                        <!-- Two-third, left -->
                                        <div class="column is-half has-text-centered">
                                            <div class="title is-size-3 has-text-white topic-container main-font">
                                                <div id="liquid">
                                                    <p style="letter-spacing: 0.15em;">LIQUID</p>
                                                    <a href="matterLiquid.php">
                                                        <figure class="image">
                                                            <img src="../../image/liquidGif.gif" alt="Liquid">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Two-third, right -->
                                        <div class="column is-half has-text-centered">
                                            <div class="title is-size-3 has-text-white topic-container main-font">
                                                <div id="gas">
                                                    <p style="letter-spacing: 0.15em;">GAS</p>
                                                    <a href="matterGas.php">
                                                        <figure class="image">
                                                            <img src="../../image/gasGif.gif" alt="Gas">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="examplesButton">
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon mr-2"></i> <span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2" id="rightButton" style="z-index: 2;">
                            <span class="button-text">Next</span> <i class="fas fa-arrow-right button-icon ml-2"></i>
                        </button>

                        <!-- Einstein Image -->
                        <img src="../../image/einstein.png" alt="Einstein Figure" id="einstein-image">
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
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const matterLesson = document.getElementById('matterLesson');
        const objectives = document.getElementById('objectives');
        const matterTopic = document.getElementById('matterTopic');
        const lessonImageLink = document.getElementById('lessonImageLink');
        const urlParams = new URLSearchParams(window.location.search);

        function showMatterLesson() {
            matterLesson.style.display = 'block';
            examplesButton.style.display = 'none';
            einsteinImage.style.display = 'flex';
            leftButton.style.display = 'block';
            rightButton.style.display = 'none';
            objectives.style.display = 'none';
            matterTopic.style.display = 'none';
        }

        function showExamplesButton() {
            matterLesson.style.display = 'none';
            examplesButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            leftButton.style.display = 'block';
            rightButton.style.display = 'block';
            objectives.style.display = 'none';
            matterTopic.style.display = 'none';
        }

        function showMatterObjective() {
            matterLesson.style.display = 'none';
            examplesButton.style.display = 'block';
            leftButton.style.display = 'block';
            rightButton.style.display = 'block';
            einsteinImage.style.display = 'flex';
            objectives.style.display = 'block';
            matterTopic.style.display = 'none';
        }

        function showMatterTopic() {
            matterLesson.style.display = 'none';
            objectives.style.display = 'none';
            matterTopic.style.display = 'block';
            leftButton.style.display = 'block';
            rightButton.style.display = 'none';
            einsteinImage.style.display = 'flex';
        }
        if (urlParams.get('show') === 'matterTopic') {
            showMatterTopic();
        } else{
            showMatterLesson();
        }
        
        leftButton.addEventListener('click', function() {
            if (objectives.style.display === 'block') {
                showMatterLesson();
            } else if (matterTopic.style.display === 'block') {
                showMatterObjective();
            } else if (matterLesson.style.display === 'block') {
                window.location.href = '../studentWelcome.php?show=Lessons';
            }
        });

        rightButton.addEventListener('click', function() {
            showMatterTopic();
        });

        lessonImageLink.addEventListener('click', function(event) {
            event.preventDefault();
            showMatterObjective();
        });
    });
</script>