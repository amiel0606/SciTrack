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
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Weathering and Soil Formation</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Weathering
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                    It is a process by which rocks are worn away and broken down into smaller pieces. 
                                    It occurs due to natural and man-made processes.
                                    </p>
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
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Weathering and Soil Formation</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Erosion
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                    When these small particles are removed and transferred from one location to another, erosion occurs.
                                    </p>
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

        let currentContent = 'surfaceWeathering';

        function updateContent() {
            if (currentContent === 'surfaceWeathering') {
                surfaceWeathering.style.display = 'block';
                surfaceErosion.style.display = 'none';
            } else {
                surfaceWeathering.style.display = 'none';
                surfaceErosion.style.display = 'block';
            }
        }

        updateContent();

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

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
        const showM = getQueryParam('show');
        if (showM === 'surfaceErosion') {
            currentContent = 'surfaceErosion';
            updateContent();
        }
    });
</script>
