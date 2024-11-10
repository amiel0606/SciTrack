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
    .hero-body {
        position: relative;
    }
    .navbar {
        background-color: #4A90E2 !important;
    }
    .navbar-item:hover {
        background-color: #266bbb;
        color: white;
    }
    .large-box {
        min-height: 85vh;
        width: 145%;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start; /* Align the content to the left */
        text-align: left; /* Change to left alignment */
        padding: 20px;
        border-radius: 10px;
        margin-left: 20px;
        margin-top: 20px;
        left: -10%
    }

    p.is-size-2.has-text-left.mt-1.has-text-weight-bold {
        margin-left: 40px;
    }
    
    .scrollable-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    overflow-y: auto;
    max-height: 80vh;
    width: 100%;
}

.lesson-container {
    margin-bottom: 30px;
    width: 100%;
}

.lesson-header {
    margin-bottom: 10px;
    width: 100%;
}

.image-label {
    font-size: 20px;
    font-weight: bold;
    text-align: left;
    padding: 5px;
}

.lesson-row {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    width: 100%;
    
}

.lesson-image-container {
    flex: 1;
    text-align: center;
    margin-right: 20px;
}

.lesson-image {
    max-width: 300px;
    height: 300px;
}

.lesson-boxes-container {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex: 3;
    gap: 40px; /* Add space between the boxes */
}

.lesson-box {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 10px;
    width: 250px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 15px;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.lesson-box:hover {
    background-color: #e0e0e0; 
}

.box-title {
    font-size: 16px;
    font-weight: bold;
}

.quiz-info {
    font-size: 14px;
    color: #555;
}



</style>


<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-full-mobile is-four-fifths-tablet">
                    <div class="box dash has-shadow first-box large-box">
                        <p class="is-size-2 has-text-left mt-1 has-text-weight-bold">Assessments</p>
                        
                        <!-- Scrollable container for lessons -->
                        <div class="scrollable-container">
                            <!-- Matter Section -->
                            <div class="lesson-container">
                                <div class="lesson-header">
                                    <div class="image-label">Matter</div>
                                </div>
                                <div class="lesson-row">
                                    <!-- GIF for Matter on the Left -->
                                    <div class="lesson-image-container">
                                        <img src="../image/matterTopic1.gif" alt="Matter GIF" class="lesson-image">
                                    </div>

                                    <!-- Lesson boxes on the right -->
                                    <div class="lesson-boxes-container">
                                        <div class="lesson-box" onclick="window.location.href='./matter/matterSolid.php#matterQuiz'">
                                            <div class="box-title">Lesson 1</div>
                                            <div class="box-title is-size-4">Solid</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                        <div class="lesson-box" onclick="window.location.href='./matter/matterLiquid.php#matterQuiz'">
                                            <div class="box-title">Lesson 2</div>
                                            <div class="box-title is-size-4">Liquid</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                        <div class="lesson-box" onclick="window.location.href='./matter/matterGas.php#matterQuiz'">
                                            <div class="box-title">Lesson 3</div>
                                            <div class="box-title is-size-4">Gas</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ecosystem Section -->
                            <div class="lesson-container">
                                <div class="lesson-header">
                                    <div class="image-label">Ecosystem</div>
                                </div>
                                <div class="lesson-row">
                                    <!-- GIF for Ecosystem on the Left -->
                                    <div class="lesson-image-container">
                                        <img src="../image/ecosystemTopic1.gif" alt="Ecosystem GIF" class="lesson-image">
                                    </div>

                                    <!-- Lesson boxes on the right -->
                                    <div class="lesson-boxes-container">
                                        <div class="lesson-box" onclick="window.location.href='./esystem/ecoEstuaries.php#ecoQuiz'">
                                            <div class="box-title">Lesson 1</div>
                                            <div class="box-title is-size-4">Estuaries</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                        <div class="lesson-box" onclick="window.location.href='./esystem/ecoIntertidal.php#ecoQuiz'">
                                            <div class="box-title">Lesson 2</div>
                                            <div class="box-title is-size-4">Intertidal Zones</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Motion Section -->
                            <div class="lesson-container">
                                <div class="lesson-header">
                                    <div class="image-label">Motion</div>
                                </div>
                                <div class="lesson-row">
                                    <!-- GIF for Motion on the Left -->
                                    <div class="lesson-image-container">
                                        <img src="../image/motionTopic1.gif" alt="Motion GIF" class="lesson-image">
                                    </div>

                                    <!-- Lesson boxes on the right -->
                                    <div class="lesson-boxes-container">
                                        <div class="lesson-box" onclick="window.location.href='./motion/motion.php#motionQuiz'">
                                            <div class="box-title">Lesson 1</div>
                                            <div class="box-title is-size-4">What is Motion?</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                        <div class="lesson-box" onclick="window.location.href='./motion/measuring.php#motionQuiz'">
                                            <div class="box-title">Lesson 2</div>
                                            <div class="box-title is-size-4">Measuring Distance and Time</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earth's Surface Section -->
                            <div class="lesson-container">
                                <div class="lesson-header">
                                    <div class="image-label">Earth's Surface</div>
                                </div>
                                <div class="lesson-row">
                                    <!-- GIF for Earth's Surface on the Left -->
                                    <div class="lesson-image-container">
                                        <img src="../image/surfaceTopic1.gif" alt="Earth's Surface GIF" class="lesson-image">
                                    </div>

                                    <!-- Lesson boxes on the right -->
                                    <div class="lesson-boxes-container">
                                        <div class="lesson-box" onclick="window.location.href='./surface/surfaceWeather.php#surfaceQuiz'">
                                            <div class="box-title">Lesson 1</div>
                                            <div class="box-title is-size-4">Weathering and Soil Formation</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                        <div class="lesson-box" onclick="window.location.href='./surface/surfaceSoil.php#surfaceQuiz'">
                                            <div class="box-title">Lesson 2</div>
                                            <div class="box-title is-size-4">Effects of Soil Erosion</div>
                                            <div class="quiz-info">Quiz: 10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End of scrollable-container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if there's a hash in the URL
            if (window.location.hash === '#matterQuiz') {
                const target = document.getElementById('matterQuiz');
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    </script>