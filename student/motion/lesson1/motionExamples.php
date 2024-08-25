<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .example-content {
        display: none; 
    }
    .example-content.active {
        display: block; 
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

                    <!-- Example 1 -->
                    <div class="example-content active" id="example1">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Examples</h1>

                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-centered has-text-weight-semibold has-text-white">
                                To compute for distance, multiply speed and velocity. To solve for time, divide distance with speed.
                            </p>
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                    <br>A car travels a distance of 800m in 40 seconds. How fast did it move? <br><br>
                                        Given: d = 800m, t = 40s <br>
                                        Required: speed <br>
                                        Formula: s = d / t <br><br>
                                        Solution: s = 800m / 40s = 20m/s
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/motion7.png" alt="motion7">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 2 -->
                    <div class="example-content" id="example2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Examples</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                    How long will take Carlo to reach the end of the room 5.8 meters away if he sprints at a speed of 1.2m/s? <br><br>
                                    Given: d = 5.8m, s = 1.2m/s <br> Required: time <br> Formula t = d / s <br><br> Solution: t = 5.8m / 1.2m/s = 4.83s
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/motion8.png" alt="motion8">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 3 -->
                    <div class="example-content" id="example3">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Examples</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        How far can a dog go to fetch a ball if it runs at a speed of 4.5m/s for 30 seconds? <br><br>
                                        Given: d = 4.5m/s, t = 30s <br> Required: distance <br> Formula: d = s(t) <br> <br> 
                                        Solution: d = 30s (4.5m/s) = 135m <br> Therefore, the distance that the dog runs is 135cm
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/motion9.png" alt="motion9">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="examplesButton">
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="leftButton">
                            <i class="fas fa-arrow-left button-icon"></i>
                        </button>
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mx-2" id="rightButton">
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
        const examplesButton = document.getElementById('examplesButton');
        const example1 = document.getElementById('example1');
        const example2 = document.getElementById('example2');
        const example3 = document.getElementById('example3');

        let currentExample = 1;

        function updateExamples() {
            example1.classList.toggle('active', currentExample === 1);
            example2.classList.toggle('active', currentExample === 2);
            example3.classList.toggle('active', currentExample === 3);
        }

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const showExample = getQueryParam('show');
        if (showExample === 'example3') {
            currentExample = 3;
            updateExamples();
        }

        leftButton.addEventListener('click', function () {
            if (currentExample === 1) {
                window.location.href = 'motionVelocity.php'; 
            } else if (currentExample === 2) {
                currentExample = 1;
                updateExamples();
            } else if (currentExample === 3) {
                currentExample = 2;
                updateExamples();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentExample === 1) {
                currentExample = 2;
                updateExamples();
            } else if (currentExample === 2) {
                currentExample = 3;
                updateExamples();
            } else if (currentExample === 3) {
                window.location.href = 'motionLetsTry.php'; 
            }
        });
    });
</script>


