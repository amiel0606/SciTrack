<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .motion-content {
        display: none;
    }
    .motion-content-active {
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

                    <!-- Motion Distance -->
                    <div class="x-content" id="motionDistance">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">MOTION</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Distance
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    It is identified as the length covered between two points or position. 
                                    The standard unit used for measuring distance is meter, with the symbol, m. Other units include kilometer (km), 
                                    centimeter (cm), mile (mi), and others
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/motion3.png" alt="motion3">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Time -->
                    <div class="motion-content" id="motionTime">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">MOTION</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Time
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    is a quantity that measures the duration of events. 
                                    The standard unit for time is second(s). Other unit include minute (min) and hour (hr). 
                                    Time is measured using a clock or stopwatch
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/motion4.png" alt="motion4">
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

                        <!-- Motion Image -->
                        <img src="../../../image/motion1.png" alt="Motion Figure" id="einstein-image">
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
        const motionDistance = document.getElementById('motionDistance');
        const motionTime = document.getElementById('motionTime');

        let currentContent = 'motionDistance';

        function updateContent() {
            if (currentContent === 'motionDistance') {
                motionDistance.style.display = 'block';
                motionTime.style.display = 'none';
            } else {
                motionDistance.style.display = 'none';
                motionTime.style.display = 'block';
            }
        }

        updateContent();

        leftButton.addEventListener('click', function () {
            if (currentContent === 'motionTime') {
                currentContent = 'motionDistance';
                updateContent();
            } else {
                window.location.href = './.././motionDef.php?show=motionTopic';
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentContent === 'motionDistance') {
                currentContent = 'motionTime';
                updateContent();
            } else if (currentContent === 'motionTime') {
                window.location.href = 'motionPopQuiz.php';
            }
        });

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
        const showM = getQueryParam('show');
        if (showM === 'motionTime') {
            currentContent = 'motionTime';
            updateContent();
        }
    });
</script>
