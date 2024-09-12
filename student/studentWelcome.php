<?php
    include_once('./includes/board.php');
?>

<style>
    .student-content {
        display: none;
    }
    .student-content-active {
        display: block;
    }
    #dashboard {
        position: absolute; 
        top: 50%; 
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1; 
        width: 80%; 
        text-align: center;
    }
    #lessons{
        position: absolute; 
        top: 30%; 
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1; 
        width: 90%; 
        text-align: center;
    }
    .hero-body {
        position: relative; 
    }
    .studentdb {
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
    }
    .studentdb:hover {
        transform: scale(1.05);
    }
    .dtext{
        margin-top: -5%;
    }
    .figure-image{
        width: 100%;
        max-width: 100%;
    }
    .figure-image:hover{
        transform: scale(1.05);
    }
    #einstein-image{
        width: 100%;
        max-width: 25%;
        margin-right: -7%;
        margin-left: -8%;
        margin-bottom: -2%;
    }
    .navbar{
        background-color: #4A90E2 !important;
    }
    .navbar-item:hover{
        background-color: #266bbb;
        color: white;
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../font/Haniley.otf');
    }
    @font-face {
        font-family: 'Avenue';
        src: url('../font/Avenue.otf') format('opentype');
    }
    .secondary-font {
        font-family: 'Haniley';
    }
    .main-font {
        font-family: 'Avenue';
    }

</style>


<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../image/board.png" alt="Board Image">
                    </figure>
                    
                    <!-- Welcome -->
                    <div class="student-content student-content-active" id="welcome">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <div class="columns is-centered mb-6 mt-6">
                                <div class="column is-four-fifths">
                                    <p class="title is-size-1-widescreen is-size-2-desktop is-size-3-tablet is-size-4-mobile 
                                    has-text-white has-text-centered main-font">
                                        Welcome <span id="">[student name],</span> Dive into the fascinating world of Science with Sci-Track and spark your scientific curiosity!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard -->
                    <div class="student-content" id="dashboard">
                        <div class="is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 mt-6 p-6">
                            <div class="columns is-centered">
                                <div class="columns is-multiline is-centered">
                                    <div class="column is-half has-text-centered title is-size-3 studentdb">
                                        <a href="" id="lessonLink">
                                            <figure class="image">
                                                <img src="../image/lesson.png" alt="Lesson Image" class="lesson-image">
                                            </figure>
                                            <p class="subtitle is-size-3-tablet is-size-4-mobile has-text-white dtext secondary-font">LESSON</p>
                                        </a>
                                    </div>
                                    <div class="column is-half has-text-centered title is-size-3 studentdb">
                                        <a href="">
                                            <figure class="image">
                                                <img src="../image/assessment.png" alt="Assessment Image" class="lesson-image">
                                            </figure>
                                            <p class="subtitle is-size-3-tablet is-size-4-mobile has-text-white dtext secondary-font">ASSESSMENT</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lessons -->
                    <div class="student-content " id="lessons">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 mt-6 p-6">
                            <div class="columns is-multiline is-centered mt-6 ">
                                <div class="column is-2-mobile is-one-quarter-tablet example-image mr-6">
                                    <a href="matterDef.php">
                                        <figure class="image figure-image">
                                            <img src="../image/matterTopic.gif" alt="Matter">
                                            <p class="subtitle is-size-5 has-text-white has-text-centered secondary-font mt-2">MATTER</p>
                                        </figure>
                                    </a>
                                </div>
                                <div class="column is-2-mobile is-one-quarter-tablet example-image ml-6">
                                    <a href="./ecosystem/ecosystemDef.php">
                                        <figure class="image figure-image">
                                            <img src="../image/ecosystemTopic.gif" alt="Ecosystem">
                                            <p class="subtitle is-size-5 has-text-white has-text-centered secondary-font mt-2">ECOSYSTEM</p>
                                        </figure>
                                    </a>
                                </div>
                            </div>

                            <div class="columns is-multiline is-centered mb-1">
                                <div class="column is-2-mobile is-one-quarter-tablet example-image mr-6">
                                    <a href="./motion/motionDef.php">
                                        <figure class="image figure-image">
                                            <img src="../image/motionTopic.gif" alt="Motion">
                                            <p class="subtitle is-size-5 has-text-white has-text-centered secondary-font mt-2">MOTION</p>
                                        </figure>
                                    </a>
                                </div>
                                <div class="column is-2-mobile is-one-quarter-tablet example-image ml-6">
                                    <a href="./surface/surfaceDef.php">
                                        <figure class="image figure-image">
                                            <img src="../image/surfaceTopic.gif" alt="Earth's Surface">
                                            <p class="subtitle is-size-5 has-text-white has-text-centered secondary-font mt-2">EARTH'S SURFACE</p>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-5" id="examplesButton">
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon"></i>
                        </button>
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mx-2" id="rightButton" style="z-index: 2;">
                            <i class="fas fa-arrow-right button-icon"></i>
                        </button>

                        <!-- Einstein Image -->
                        <img src="../image/einstein.png" alt="Einstein Figure" id="einstein-image">
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
        const welcome = document.getElementById('welcome');
        const dashboard = document.getElementById('dashboard');
        const lessons = document.getElementById('lessons');
        const lessonLink = document.getElementById('lessonLink');
        const lessonFigures = document.querySelectorAll('#lessons figure');
        const urlParams = new URLSearchParams(window.location.search);

        function showWelcome() {
            welcome.classList.add('student-content-active');
            welcome.classList.remove('student-content');
            dashboard.classList.add('student-content');
            dashboard.classList.remove('student-content-active');
            lessons.classList.add('student-content');
            lessons.classList.remove('student-content-active');
            rightButton.style.display = 'block';
            leftButton.style.display = 'none';
        }

        function showDashboard() {
            dashboard.classList.add('student-content-active');
            dashboard.classList.remove('student-content');
            welcome.classList.add('student-content');
            welcome.classList.remove('student-content-active');
            lessons.classList.add('student-content');
            lessons.classList.remove('student-content-active');
            rightButton.style.display = 'none';
            leftButton.style.display = 'block';
        }

        function showLessons() {
            lessons.classList.add('student-content-active');
            lessons.classList.remove('student-content');
            dashboard.classList.add('student-content');
            dashboard.classList.remove('student-content-active');
            welcome.classList.add('student-content');
            welcome.classList.remove('student-content-active');
            rightButton.style.display = 'none';
            leftButton.style.display = 'block'; 
        }

        leftButton.addEventListener('click', function () {
            if (lessons.classList.contains('student-content-active')) {
                showDashboard();
            } else {
                showWelcome();
            }
        });

        rightButton.addEventListener('click', showDashboard);

        lessonLink.addEventListener('click', function (e) {
            e.preventDefault(); 
            showLessons(); 
        });

        lessonFigures.forEach(figure => {
            figure.addEventListener('click', function () {
                const link = figure.closest('a'); 
                if (link) {
                    window.location.href = link.href;
                }
            });
        });
        
        if (urlParams.get('show') === 'Lessons') {
            showLessons();
        } else {
            showWelcome();
        }
    });

</script>
