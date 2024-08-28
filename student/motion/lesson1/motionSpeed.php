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
</style>



<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../../image/board.png" alt="Board Image">
                    </figure>

                    
                    <!-- Motion Speed -->
                    <div class="x-content" id="motionSpeed">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">MOTION</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Speed
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        is a measure of how fast an object moves. The motion of an object can be properly described using speed which is computed by the formula below
                                        <br><br> Speed (s) = Distance (d) / Time (t)
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/motion5.png" alt="motion5">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Velocity -->
                    <div class="motion-content" id="motionVelocity">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">MOTION</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Velocity
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                    It is identified as the length covered between two points or position. 
                                    The standard unit used for measuring distance is meter, with the symbol, m. 
                                    Other units include kilometer (km), centimeter (cm), mile (mi), and others
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/motion6.png" alt="motion6">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Examples 1 -->
                    <div class="motion-content" id="motionExample1">
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

                    <!-- Motion Examples 2 -->
                    <div class="motion-content" id="motionExample2">
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

                    <!-- Motion Examples 3 -->
                    <div class="motion-content" id="motionExample3">
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
    document.addEventListener('DOMContentLoaded', () => {
        const sections = ['motionSpeed', 'motionVelocity', 'motionExample1', 'motionExample2', 'motionExample3'];
        let currentIndex = 0;

        const contentSections = sections.map(id => document.getElementById(id));
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');

        function showSection(index) {
            contentSections.forEach((section, i) => {
                if (i === index) {
                    section.classList.add('motion-content-active');
                    section.style.display = 'block';
                } else {
                    section.classList.remove('motion-content-active');
                    section.style.display = 'none';
                }
            });
        }

        rightButton.addEventListener('click', () => {
            if (currentIndex < sections.length - 1) {
                currentIndex++;
                showSection(currentIndex);
            } else if (currentIndex === sections.length - 1) {
                window.location.href = 'motionLetsTry.php';
            }
        });

        leftButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                showSection(currentIndex);
            } else {
                window.location.href = 'motionDistance.php?show=motionTime';
            }
        });

        const urlParams = new URLSearchParams(window.location.search);
        const showSectionId = urlParams.get('show');
        if (showSectionId && sections.includes(showSectionId)) {
            currentIndex = sections.indexOf(showSectionId);
        }
        
        showSection(currentIndex);
    });
</script>


