<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 100%;
        height: auto;
    }
    .surface-content {
        display: none;
    }
    .surface-content.active {
        display: block;
    }
    #button{
        margin-bottom: 1%;
        margin-right: 2%;
    }
    #einstein-image{
        width: 25%;
        max-width: 25%;
        margin-right: -7%;
        margin-left: -8%;
        margin-bottom: 0%;
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
    #ecosystemTopic figure {
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

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">

                        <!-- Surface Definition -->
                        <div class="x-content" id="surfaceDef">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6 secondary-font">The process that shapes the Earth's surface</h1>
                                
                                <!-- Text -->
                                <div class="column is-four-fifths mt-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-centered has-text-weight-semibold has-text-white main-font">
                                    The geomorphic Process is the process responsible for the formation and alteration of the earth's surface. 
                                    The physical and chemical interactions between the earth's surface and the natural forces acting upon it to produce landforms.

                                    </p>
                                </div>
                                <div class="audio-icon">
                                            <button id="playAudio">
                                                <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio" src="../../sounds/surfaceDef.mp3" autoplay></audio>
                                        </div>
                            </div>
                        </div>
                        
                        <!-- Surface Topic -->
                        <div class="surface-content" id="surfaceTopic">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-4 secondary-font">CHOOSE TOPIC</h1>
                                
                                <div class="columns is-centered">
                                    <!-- Lesson 1 and 2 -->
                                    <div class="column is-two-thirds ml-6 mr-6">
                                        <div class="columns">
                                            <div class="column is-half has-text-centered">
                                                <div class="title is-size-3-dekstop is-size-4-tablet has-text-white 
                                                has-text-weight-semibold topic-container main-font">
                                                    <a href="./lesson1/surfaceWeathering.php">
                                                        <figure class="image">
                                                            <img src="../../image/surface2.png" alt="surface2">
                                                        </figure>
                                                    </a>
                                                    <p>Lesson 1: Weathering and soil Formation</p>
                                                </div>
                                            </div>

                                            <div class="column is-narrow"></div>

                                            <div class="column is-half has-text-centered">
                                                <div class="title is-size-3-dekstop is-size-4-tablet has-text-white 
                                                has-text-weight-semibold topic-container main-font">
                                                    <a href="./lesson2/surfaceSoil.php">
                                                        <figure class="image">
                                                            <img src="../../image/surface3.png" alt="surface3">
                                                        </figure>
                                                    </a>
                                                    <p>Lesson 2: Effects of soil erosion</p>
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

                            <!-- Eco Image -->
                            <img src="../../image/surface1.png" alt="Eco Figure" id="einstein-image">
                        </div>

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
        const surfaceDef = document.getElementById('surfaceDef');
        const surfaceTopic = document.getElementById('surfaceTopic');
        const audio = document.getElementById('surfaceAudio');

        let currentContent = 'surfaceDef';

        function updateContent() {
            if (currentContent === 'surfaceDef') {
                surfaceDef.style.display = 'block';
                surfaceTopic.style.display = 'none';
                rightButton.style.display = 'block'; 
                playAudio();
            } else {
                surfaceDef.style.display = 'none';
                surfaceTopic.style.display = 'block';
                rightButton.style.display = 'none'; 
            }
        }

        function playAudio(){
            audio.play();
        }

        function stopAudio(){
            audio.pause();
            audio.currentTime = 0;
        }

        updateContent();

        leftButton.addEventListener('click', function () {
            stopAudio()
            if (currentContent === 'surfaceTopic') {
                currentContent = 'surfaceDef';
                updateContent();
            } else {
                window.location.href = './../studentWelcome.php?show=Lessons';
            }
        });

        rightButton.addEventListener('click', function () {
            stopAudio()
            if (currentContent === 'surfaceDef') {
                currentContent = 'surfaceTopic';
                updateContent();
            }
        });

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
        const showM = getQueryParam('show');
        if (showM === 'surfaceTopic') {
            currentContent = 'surfaceTopic';
            updateContent();
        }
    });
</script>