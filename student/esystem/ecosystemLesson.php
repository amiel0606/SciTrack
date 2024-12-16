<?php
    include_once('./includes/board.php');
?>

<link rel="stylesheet" href="../css/ecoLesson.css">

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../../image/board.png" alt="Board Image" style="width: 140%; height: 105%; max-width: 1800px;; margin-left: -17%">
                    </figure>

                    <!-- Eco Lesson -->
                    <div class="x-content" id="matterLesson">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6 mt-4">
                            <h1 class="title has-text-white secondary-font" id="headers">ECOSYSTEM</h1>
                            
                            <div class="lesson-content" id="lesson1">
                                <!-- Lesson Image -->
                                <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered mb-6">
                                    
                                    <a href="ecoEstuaries.php" id="imageLink1">
                                        <figure class="image lesson-image" id="lessonImage1">
                                            <img src="../../image/eco1.gif" alt="Ecosytem">
                                        </figure>
                                    </a>
                                    <p class="title is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-white main-font mb-6" id="description1">
                                        LESSON 1: The Ecosystem Estuaries
                                    </p>

                                    <a href="ecoIntertidal.php" id="imageLink2" class="is-hidden">
                                        <figure class="image lesson-image mb-4" id="lessonImage2">
                                            <img src="../../image/eco2.gif" alt="Ecosytem">
                                        </figure>
                                    </a>
                                    <p class="title is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-white main-font mb-6 is-hidden" id="description2">
                                        LESSON 2: The Ecosystem in the Intertidal Zone
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

                            <!-- Left and Right Buttons -->
                            <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="examplesButton">
                                <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mb-2" id="leftButton" style="z-index: 2;">
                                    <i class="fas fa-arrow-left button-icon mr-2"></i> <span class="button-text">Prev</span>
                                </button>

                                <!-- Einstein Image -->
                                <img src="../../image/einstein.png" alt="Einstein Figure" id="einstein-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<audio id="ecoEstAudio" src="../../sounds/ecoL1.mp3"></audio>
<audio id="ecoEstAudio2" src="../../sounds/ecoL2.mp3"></audio>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const images = document.querySelectorAll('.lesson-image');
        const links = document.querySelectorAll('.lesson-content a');
        const descriptions = document.querySelectorAll('.lesson-content .title');
        const leftButton = document.getElementById('leftButton');
        const leftLessonbtn = document.getElementById('leftLessonbtn');
        const rightLessonbtn = document.getElementById('rightLessonbtn');
        const urlParams = new URLSearchParams(window.location.search);
        const audio = document.getElementById('ecoEstAudio');
        const audio2 = document.getElementById('ecoEstAudio2');
        let currentIndex = 0;

        function stopAudio() {
            audio.pause();
            audio.currentTime = 0; 
        }

        function playAudio() {
            audio.play().catch(function (error) {
                console.log("Autoplay prevented by browser, waiting for user interaction.");
            });
        }
        function stopAudio2() {
            audio2.pause();
            audio2.currentTime = 0; 
        }

        function playAudio2() {
            audio2.play().catch(function (error) {
                console.log("Autoplay prevented by browser, waiting for user interaction.");
            });
        }

        function showContent(index) {
            if (currentIndex > 0) {
                playAudio2();
                stopAudio();
            }
            else {
                playAudio();
                stopAudio2();
            }
            images.forEach((img, i) => {
                img.classList.toggle('is-hidden', i !== index);
                links[i].classList.toggle('is-hidden', i !== index);
            });

            descriptions.forEach((desc, i) => {
                desc.classList.toggle('is-hidden', i !== index);
            });
        }

        leftLessonbtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex -= 1;
                showContent(currentIndex);
            }
        });

        rightLessonbtn.addEventListener('click', () => {
            if (currentIndex < images.length - 1) {
                currentIndex += 1;
                showContent(currentIndex);
            }
        });

        leftButton.addEventListener('click', () => {
            window.location.href = '../studentWelcome.php?show=Lessons';
        });

        showContent(currentIndex);
    });
</script>