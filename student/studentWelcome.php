<?php
session_start();
include_once('./includes/board.php');
include_once('../admin/includes/dbCon.php');
$name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
$id = $_SESSION["id"];
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

    #lessons {
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

    .dtext {
        margin-top: -5%;
    }

    .figure-image {
        width: 100%;
        max-width: 100%;
    }

    .figure-image:hover {
        transform: scale(1.05);
    }

    #einstein-image {
        width: 100%;
        max-width: 30%;
        margin-right: -23%;
        margin-left: -10%;
        margin-bottom: -5%;
    }

    .button-text {
        font-size: 0.75em;
    }

    .welcomeText {
        font-size: 4em;
    }

    .lesson-image {
        width: 140%;
        max-width: 130%;
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        z-index: 5;
    }

    .lesson-image:hover {
        transform: scale(1.05);
    }

    #matters .lesson-image {
        margin-left: -75%;
    }

    #eco .lesson-image {
        margin-left: -45%;
    }

    #motion .lesson-image {
        margin-left: -5%;
    }

    #earth .lesson-image {
        margin-left: 25%;
    }

    .navbar {
        background-color: #4A90E2 !important;
    }

    .navbar-item:hover {
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

    .no-way {
        display: none;
    }
</style>


<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../image/board.png" alt="Board Image"
                            style="width: 140%; height: 105%; max-width: 1800px;; margin-left: -17%">
                    </figure>
                    <input type="hidden" id="myID" name="id" value="<?php echo $id; ?>">
                    <!-- Welcome -->
                    <div class="student-content student-content-active" id="welcome">
                        <div
                            class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <div class="columns is-centered mb-6 mt-6">
                                <div class="column is-four-fifths">
                                    <p class="title has-text-white has-text-centered main-font welcomeText">
                                        Welcome <span id="studentName" style="color: yellow;"></span>, Dive into the
                                        fascinating world of Science with Sci-Track and spark your scientific curiosity!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard -->
                    <div class="student-content" id="dashboard">
                        <div
                            class="is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 mt-6 p-6">
                            <div class="columns is-centered">
                                <div class="columns is-multiline is-centered">
                                    <div class="column is-half has-text-centered title is-size-3 studentdb">
                                        <a href="" id="lessonLink">
                                            <figure class="image" style="width: 500px; height: 500px;">
                                                <img src="../image/lesson.png" alt="Lesson Image">
                                            </figure>
                                            <p
                                                class="subtitle is-size-3-tablet is-size-4-mobile has-text-white dtext secondary-font">
                                                LESSON</p>
                                        </a>
                                    </div>
                                    <div class="column is-half has-text-centered title is-size-3 studentdb">
                                        <a href="assessments.php">
                                            <figure class="image" style="width: 500px; height: 500px;">
                                                <img src="../image/assessment.png" alt="Assessment Image">
                                            </figure>
                                            <p
                                                class="subtitle is-size-3-tablet is-size-4-mobile has-text-white dtext secondary-font">
                                                ASSESSMENTS</p>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lessons -->
                    <div class="student-content" id="lessons">
                        <div
                            class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6 mt-4">
                            <div class="columns is-centered mt-6">
                                <div id="matters" class="column has-text-centered">
                                    <a href="./matter/matterLesson.php">
                                        <figure class="image lesson-image">
                                            <img src="../image/matterTopic1.gif" alt="Matter">
                                            <p
                                                class="subtitle is-size-2 has-text-white has-text-centered secondary-font mt-2">
                                                MATTER</p>
                                        </figure>
                                    </a>
                                </div>
                                <div id="eco" class="column has-text-centered ">
                                    <a href="./esystem/ecosystemLesson.php">
                                        <figure class="image lesson-image">
                                            <img src="../image/ecosystemTopic1.gif" alt="Ecosystem">
                                            <p
                                                class="subtitle is-size-2 has-text-white has-text-centered secondary-font mt-2">
                                                ECOSYSTEM</p>
                                        </figure>
                                    </a>
                                </div>
                                <div id="motion" class="column has-text-centered ">
                                    <a href="./motion/motionLesson.php">
                                        <figure class="image lesson-image">
                                            <img src="../image/motionTopicx.gif" alt="Motion">
                                            <p
                                                class="subtitle is-size-2 has-text-white has-text-centered secondary-font mt-2">
                                                MOTION</p>
                                        </figure>
                                    </a>
                                </div>
                                <div id="earth" class="column has-text-centered ">
                                    <a href="./surface/surfaceLesson.php">
                                        <figure class="image lesson-image">
                                            <img src="../image/surfaceTopic1.gif" alt="Surface">
                                            <p
                                                class="subtitle is-size-2 has-text-white has-text-centered secondary-font mt-2">
                                                SURFACE</p>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-5"
                        id="examplesButton">
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mb-2"
                            id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon"></i><span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2 mb-2"
                            id="rightButton" style="z-index: 2;">
                            <span class="button-text">Next</span> <i class="fas fa-arrow-right button-icon"></i>
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
$(document).ready(function() {
    $(document).ready(function() {
    var id = $('#myID').val();
    $.ajax({
        url: './includes/welcomeStudent.php', 
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ type: 'loadStudentData', id: id }),
        success: function(data) {
            if (data.length > 0) {
                $('#studentName').text(data[0].name); 
            } else {
                console.error('No student data found.');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error loading student data:', error);
        }
    });

    $.ajax({
        url: './includes/welcomeStudent.php', 
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ type: 'loadLessons', section: 'Papaya' }),
        success: function(data) {
            var matterImage = $('#matters figure.image img');
            var ecoImage = $('#eco figure.image img');
            var motionImage = $('#motion figure.image img');
            var earthImage = $('#earth figure.image img');
            const today = new Date();
            const offset = today.getTimezoneOffset();
            const philippinesOffset = 360;
            const philippinesTime = new Date(today.getTime() + (philippinesOffset - offset) * 60000);
            const formattedToday = philippinesTime.toISOString().slice(0, 10);            
            data.forEach(lesson => {
                console.log(lesson);
                if (lesson.matter <= formattedToday) {
                    matterImage.attr('src', '../image/matterTopic1.gif');
                    matterImage.parent().parent().css('pointer-events', 'auto');
                    console.log('Matter is set to today');
                } else {
                    matterImage.attr('src', '../image/matterlock.gif');
                    matterImage.parent().parent().css('pointer-events', 'none');
                    console.log('Matter is not set to today');
                }

                if (lesson.ecosystem <= formattedToday) {
                    ecoImage.attr('src', '../image/ecosystemTopic1.gif');
                    ecoImage.parent().parent().css('pointer-events', 'auto');
                    console.log('Ecosystem is set to today');
                } else {
                    ecoImage.attr('src', '../image/ecosystemlock.gif');
                    ecoImage.parent().parent().css('pointer-events', 'none');
                    console.log('Ecosystem is not set to today');
                }

                if (lesson.motion <= formattedToday) {
                    motionImage.attr('src', '../image/motionTopicx.gif');
                    motionImage.parent().parent().css('pointer-events', 'auto');
                    console.log('Motion is set to today');
                } else {
                    motionImage.attr('src', '../image/motionlock.gif');
                    motionImage.parent().parent().css('pointer-events', 'none');
                    console.log('Motion is not set to today');
                }

                if (lesson.earth <= formattedToday) {
                    earthImage.attr('src', '../image/surfaceTopic1.gif');
                    earthImage.parent().parent().css('pointer-events', 'auto');
                    console.log('Earth is set to today');
                } else {
                    earthImage.attr('src', '../image/surfacelock.gif');
                    earthImage.parent().parent().css('pointer-events', 'none');
                    console.log('Earth is not set to today');
                }
            });
        },
        error: function(xhr, status, error) {
            console.error('Error loading lessons:', error);
        }
    });
});
});
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


    document.addEventListener('DOMContentLoaded', function () {
        const lessons = ['matters', 'eco', 'motion', 'earth'];
        let currentLesson = 0;

        const leftLessonButton = document.getElementById('leftLessonButton');
        const rightLessonButton = document.getElementById('rightLessonButton');

        function showLesson(index) {
            lessons.forEach((lesson, i) => {
                const lessonDiv = document.getElementById(lesson);
                if (i === index) {
                    lessonDiv.classList.remove('is-hidden');
                } else {
                    lessonDiv.classList.add('is-hidden');
                }
            });
        }

        leftLessonButton.addEventListener('click', () => {
            currentLesson = (currentLesson - 1 + lessons.length) % lessons.length;
            showLesson(currentLesson);
        });

        rightLessonButton.addEventListener('click', () => {
            currentLesson = (currentLesson + 1) % lessons.length;
            showLesson(currentLesson);
        });

        showLesson(currentLesson);
    });

</script>