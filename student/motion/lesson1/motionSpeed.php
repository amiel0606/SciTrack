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
    #letsTryButton {
        z-index: 10;
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

                    
                    <!-- Motion Speed -->
                    <div class="x-content" id="motionSpeed">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">MOTION</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Speed
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                        is a measure of how fast an object moves. The motion of an object can be properly described using speed which is computed by the formula below
                                        <br><br> Speed (s) = Distance (d) / Time (t)
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="motionAudio" src="../../../sounds/speed.mp3" autoplay></audio>
                                        </div>
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
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">MOTION</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Velocity
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    It is identified as the length covered between two points or position. 
                                    The standard unit used for measuring distance is meter, with the symbol, m. 
                                    Other units include kilometer (km), centimeter (cm), mile (mi), and others
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio2">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="motionAudio2" src="../../../sounds/velocity.mp3"></audio>
                                        </div>
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
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Examples</h1>

                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                            has-text-centered has-text-weight-semibold has-text-white main-font">
                                To compute for distance, multiply speed and velocity. To solve for time, divide distance with speed.
                            </p>
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    <br>A car travels a distance of 800m in 40 seconds. How fast did it move? <br><br>
                                        Given: d = 800m, t = 40s <br>
                                        Required: speed <br>
                                        Formula: s = d / t <br><br>
                                        Solution: s = 800m / 40s = 20m/s
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio3">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="motionAudio3" src="../../../sounds/carExample.mp3"></audio>
                                        </div>
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
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Examples</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    How long will it take Carlo to reach the end of the room which is 5.8 meters away if he sprints at a speed of 1.2m/s? <br><br>
                                    Given: d = 5.8m, s = 1.2m/s <br> Required: time <br> Formula t = d / s <br><br> Solution: t = 5.8m / 1.2m/s = 4.83s
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio4">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="motionAudio4" src="../../../sounds/carloExample.mp3"></audio>
                                        </div>
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
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Examples</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    How far does a dog fetch a ball if it runs at a speed of 4.5m/s for 30 seconds? <br><br>
                                        Given: d = 4.5m/s, t = 30s <br> Required: distance <br> Formula: d = s(t) <br> <br> 
                                        Solution: d = 30s (4.5m/s) = 135m <br> Therefore, the distance that the dog runs is 135cm
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio5">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="motionAudio5" src="../../../sounds/dogExample.mp3"></audio>
                                        </div>
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

                    <!-- Motion LetsTry -->
                    <div class="motion-content" id="motionLetsTry">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image m-character">
                                        <img src="../../../image/motion1.png" alt="motion1">
                                    </figure>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-half pr-6 mr-6">
                                    <figure class="image letstry">
                                        <img src="../../../image/letstry.png" alt="letstry">
                                    </figure>
                                </div>
                            </div>
                            
                        
                            <!-- Go Back and Proceed Button -->
                            <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="letsTryButton">
                                <button class="button is-danger is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile has-text-white">
                                    Go Back
                                </button>
                                <button class="button is-success is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile mx-2 has-text-white">
                                    Proceed to quiz
                                </button>
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
        const einsteinImage = document.getElementById('einstein-image');
        const motionSpeed = document.getElementById('motionSpeed');
        const motionVelocity = document.getElementById('motionVelocity');
        const motionExample1 = document.getElementById('motionExample1');
        const motionExample2 = document.getElementById('motionExample2');
        const motionExample3 = document.getElementById('motionExample3');
        const motionLetsTry = document.getElementById('motionLetsTry');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        const audio = document.getElementById('motionAudio');
        const audio2 = document.getElementById('motionAudio2');
        const audio3 = document.getElementById('motionAudio3');
        const audio4 = document.getElementById('motionAudio4');
        const audio5 = document.getElementById('motionAudio5');

        let currentSection = 0;
        const sections = [motionSpeed, motionVelocity, motionExample1, motionExample2, motionExample3, motionLetsTry];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('motion-content-active');
                section.classList.add('motion-content');
            });
        }

        function playAudio() {
            stopAllAudio(); // Stop all previous audio before playing new
            if (currentSection === 0) {
                audio.play(); 
            } else if (currentSection === 1) {
                audio2.play(); 
            } else if (currentSection === 2) {
                audio3.play(); 
            } else if (currentSection === 3) {
                audio4.play(); 
            } else if (currentSection === 4) {
                audio5.play();
            }
        }

        function stopAllAudio() {
            [audio, audio2, audio3, audio4, audio5].forEach(aud => {
                aud.pause();
                aud.currentTime = 0; // Reset audio to the beginning
            });
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('motion-content');
            sections[index].classList.add('motion-content-active');
            playAudio(); // Play relevant audio when showing section
        }

        // Attempt to play speed.mp3 on page load
        function attemptPlayAudio() {
            const playPromise = audio.play();

            if (playPromise !== undefined) {
                playPromise.then(() => {
                    // Audio is playing
                }).catch((error) => {
                    // Autoplay was prevented
                    console.log('Autoplay was prevented:', error);
                });
            }
        }

        attemptPlayAudio(); // Try to play audio on page load

        rightButton.addEventListener('click', function () {
            stopAllAudio();
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);

                if (sections[currentSection] === motionLetsTry) {
                    leftButton.style.display = 'none';
                    rightButton.style.display = 'none';
                    einsteinImage.style.display = 'none';
                    goBackButton.style.display = 'flex';
                    proceedToQuizButton.style.display = 'flex';
                } else {
                    examplesButton.style.display = 'flex';
                    einsteinImage.style.display = 'block';
                }
            }
        });

        leftButton.addEventListener('click', function () {
            stopAllAudio();
            if (currentSection === 0) {
                window.location.href = 'motionDistance.php?show=motionTime';
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);

                if (sections[currentSection] === motionSpeed) {
                    examplesButton.style.display = 'flex';
                    einsteinImage.style.display = 'block';
                }
            }
        });

        goBackButton.addEventListener('click', function () {
            stopAllAudio();
            hideAllSections();
            motionExample3.classList.remove('motion-content');
            motionExample3.classList.add('motion-content-active');
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            goBackButton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            window.location.href = 'motionQuiz.php';
        });
    });
</script>
