<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .surface-content {
        display: none;
    }
    .surface-content-active {
        display: block;
    }
    #button{
        margin-bottom: -0.5%;
        margin-right: 2%;
    }
    #einstein-image{
        width: 25%;
        max-width: 25%;
        margin-right: -7%;
        margin-left: -8%;
        margin-bottom: -2%;
    }
    @font-face {
        font-family: 'Avenue';
        src: url('../../../font/Avenue.otf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../../../font/Haniley.otf') format('opentype');
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
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../../image/board.png" alt="Board Image">
                    </figure>

                    <!-- Surface Weathering -->
                    <div class="x-content" id="surfaceWeathering">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Weathering and Soil Formation</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Weathering
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    It is a process by which rocks are worn away and broken down into smaller pieces. 
                                    It occurs due to natural and man-made processes.
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio" src="../../../sounds/weathering.mp3" autoplay></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface4.png" alt="surface4">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Erosion -->
                    <div class="surface-content" id="surfaceErosion">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Weathering and Soil Formation</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Erosion
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    When these small particles are removed and transferred from one location to another, erosion occurs.
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio2">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio2" src="../../../sounds/erosion.mp3" ></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface5.png" alt="surface5">
                                    </figure>
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

                        <!-- Surface Image -->
                        <img src="../../../image/surface1.png" alt="Surface Figure" id="einstein-image">
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
        const surfaceWeathering = document.getElementById('surfaceWeathering');
        const surfaceErosion = document.getElementById('surfaceErosion');
        const audio = document.getElementById('surfaceAudio'); // Audio for Weathering
        const audio2 = document.getElementById('surfaceAudio2'); 

        let currentContent = 'surfaceWeathering';


        function updateContent() {
            if (currentContent === 'surfaceWeathering') {
                surfaceWeathering.style.display = 'block';
                surfaceErosion.style.display = 'none';
                playAudio();   // Play Weathering audio
                stopAudio2();  // Stop Erosion audio
            } else {
                surfaceWeathering.style.display = 'none';
                surfaceErosion.style.display = 'block';
                playAudio2();  // Play Erosion audio
                stopAudio();   // Stop Weathering audio
            }
        }


        updateContent();

        // Audio control functions
        function playAudio(){
            audio.play();
        }

        function playAudio2(){
            audio2.play();
        }

        function stopAudio(){
            audio.pause();            
            audio.currentTime = 0;          
        }

        function stopAudio2(){
            audio2.pause();
            audio2.currentTime = 0;
        }

        leftButton.addEventListener('click', function () {
            if (currentContent === 'surfaceErosion') {
                currentContent = 'surfaceWeathering';
                updateContent();
            } else {
                window.location.href = './.././surfaceDef.php?show=surfaceTopic';
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentContent === 'surfaceWeathering') {
                currentContent = 'surfaceErosion';
                updateContent();
            } else if (currentContent === 'surfaceErosion') {
                window.location.href = 'surfacePopQuiz.php';
            }
        });

        // Helper function to get query parameters
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Automatically switch to the correct content based on the URL query parameter
        const showM = getQueryParam('show');
        if (showM === 'surfaceErosion') {
            currentContent = 'surfaceErosion';
            updateContent();
        }
    });
</script>
