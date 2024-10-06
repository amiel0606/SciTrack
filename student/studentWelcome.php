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
    .button-text {
        font-size: 0.75em;
    }
    .lesson-image{
        width: 100%;
        max-width: 100%; 
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        z-index: 5;
    }
    .lesson-image:hover {
        transform: scale(1.05);
    }
    .button-transparent {
        background-color: transparent; 
        border: none;
        color: white;
        font-size: 2em;
        padding: 0;
    }
    .lessons-button-container {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 25%;
        z-index: 2;
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
    .no-way {
        display: none;
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
                    <input type="hidden" id="myID" name="id" value="<?php echo $id; ?>">
                    <!-- Welcome -->
                    <div class="student-content student-content-active" id="welcome">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <div class="columns is-centered mb-6 mt-6">
                                <div class="column is-four-fifths">
                                    <p class="title is-size-1-widescreen is-size-2-desktop is-size-3-tablet is-size-4-mobile 
                                    has-text-white has-text-centered main-font">
                                        Welcome <span id="studentName">,</span> Dive into the fascinating world of Science with Sci-Track and spark your scientific curiosity!
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
                    <div class="student-content" id="lessons">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6 mt-4">
                            <div class="columns is-centered mt-6">
                                <div id="matters" class="column has-text-centered">
                                    <a href="./matter/matterLesson.php">
                                        <figure class="image lesson-image">
                                            <img src="../image/matterTopic1.gif" alt="Matter">
                                            <p class="subtitle is-size-5 has-text-white has-text-centered secondary-font mt-2">MATTER</p>
                                        </figure>
                                    </a>
                                </div>
                                <div id="eco" class="column has-text-centered is-hidden">
                                    <a href="./esystem/ecosystemLesson.php">
                                        <figure class="image lesson-image">
                                            <img src="../image/ecosystemTopic1.gif" alt="Ecosystem">
                                            <p class="subtitle is-size-5 has-text-white has-text-centered secondary-font mt-2">ECOSYSTEM</p>
                                        </figure>
                                    </a>
                                </div>
                                <div id="motion" class="column has-text-centered is-hidden">
                                    <a href="./motion/motionDef.php">
                                        <figure class="image lesson-image">
                                            <img src="../image/motionTopic1.gif" alt="Motion">
                                            <p class="subtitle is-size-5 has-text-white has-text-centered secondary-font mt-2">MOTION</p>
                                        </figure>
                                    </a>
                                </div>
                                <div id="earth" class="column has-text-centered is-hidden">
                                    <a href="./motion/motionDef.php">
                                        <figure class="image lesson-image">
                                            <img src="../image/surfaceTopic1.gif" alt="Surface">
                                            <p class="subtitle is-size-5 has-text-white has-text-centered secondary-font mt-2">SURFACE</p>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Left and Right Buttons -->
                        <div class="lessons-button-container">
                            <button class="button-transparent" id="leftLessonButton">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="button-transparent" id="rightLessonButton">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>


                    
                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-5" id="examplesButton">
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mb-2" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon"></i><span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2 mb-2" id="rightButton" style="z-index: 2;">
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
    document.addEventListener('DOMContentLoaded', function () {
        var id =document.getElementById('myID').value;
        var conn = new WebSocket('ws://localhost:8080');
        const idsToProperties = {
        'matter': 'matter',
        'eco': 'ecosystem',
        'motion': 'motion',
        'earth': 'earth'
        };
        conn.onopen = function() {
            conn.send(JSON.stringify({ type: 'loadStudentData', id: id }));
            conn.send(JSON.stringify({ type: 'loadLessons', section: 'Papaya' }));
        };
        conn.onmessage = function(e) {
    var data = JSON.parse(e.data);
    console.log(data);
    var matter = document.getElementById('matters');
    var eco = document.getElementById('eco');
    var motion = document.getElementById('motion');
    var earth = document.getElementById('earth');
    const today = new Date();
    const offset = today.getTimezoneOffset();
    const philippinesOffset = 360; // Philippines is UTC+8, which is 360 minutes ahead of UTC
    const philippinesTime = new Date(today.getTime() + (philippinesOffset - offset) * 60000);
    const formattedToday = philippinesTime.toISOString().slice(0, 10); // Get today's date in yyyy-MM-dd format, using Philippines timezone

    if (data.type === 'student') {
        document.getElementById('studentName').innerText = data.name;
    }
    if (data.type === 'lessons') {
        if (data.matter === formattedToday) {
            matter.classList.remove('is-invisible');
            console.log('Matter is set to today');
        } else {
            matter.classList.add('is-invisible');
            console.log('Matter is not set to today');
        }
        if (data.ecosystem === formattedToday) {
            eco.classList.remove('is-invisible');
            console.log('Ecosystem is set to today');
        } else {
            eco.classList.add('is-invisible');
            console.log('Ecosystem is not set to today');
        }
        if (data.motion === formattedToday) {
            motion.classList.remove('is-invisible');
            console.log('Motion is set to today');
        } else {
            motion.classList.add('is-invisible');
            console.log('Motion is not set to today');
        }
        if (data.earth === formattedToday) {
            earth.classList.remove('is-invisible');
            console.log('Earth is set to today');
        } else {
            earth.classList.add('is-invisible');
            console.log('Earth is not set to today');
        }
    }
};
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
