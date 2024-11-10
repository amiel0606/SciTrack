<?php
session_start(); 
include_once('./includes/board.php'); 
include_once('../../admin/includes/dbCon.php'); 

if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["id"])) {
    $name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
    $id = $_SESSION["id"]; 
} else {
    
    header("Location: index.php"); 
    exit();
}
$sql = "SELECT question, choices, quiz_image, correct_answer, additional_info FROM quiz_questions_motion";
$result = $conn->query($sql);

$quiz_questions_solid = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['choices'] = json_decode($row['choices']); 
        $quiz_questions_solid[] = $row;
    }
} else {
    echo "No quiz questions found.";
}


$conn->close();
?>

<link rel="stylesheet" href="../css/motion.css">

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../../image/board.png" alt="Board Image" style="width: 140%; height: 105%; max-width: 1800px;; margin-left: -17%">
                    </figure>
                    
                    <!-- Motion Objective -->
                    <div class="x-content" id="objectives">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header1">LEARNING OBJECTIVES</h1>

                            <!-- Content Layout -->
                            <div class="is-centered">
                                <p class="subtitle description2 has-text-white main-font mb-6"> At the end of the lesson you will able to:</p>
                                <!-- Text Column -->
                                <div class="column is-full mt-4">
                                    <div class="subtitle description2 has-text-white">
                                        <p class="mb-5 main-font">Define what is the motion</p>
                                        <p class="mb-5 main-font">Learn how to solve speed, distance, time, and velocity</p>
                                        <p class="mb-5 main-font">Describe the motion of an object by measuring its change position over a period of time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion But First -->
                    <div class="motion-content" id="motionFirst">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image c-image">
                                        <img src="../../image/einstein.png" alt="Einstein">
                                    </figure>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-half pr-6 mr-6">
                                    <figure class="image letstry">
                                        <img src="../../image/motionFirst.png" alt="letstry">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Def -->
                    <div class="motion-content" id="motionDef">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-4 p-6">
                            <h1 class="title has-text-white secondary-font" id="header">WHAT IS MOTION?</h1>

                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered">
                                <figure class="image es-image">
                                    <img src="../../image/motion15.gif" alt="Ecosystem">
                                </figure>

                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white mb-6">
                                    <span style="color: yellow;">Motion</span> occurs when a body or object changes position or place.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Distance -->
                    <div class="motion-content" id="motionDistance">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-4 p-6">
                            <h1 class="title has-text-white secondary-font" id="header">Distance</h1>

                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered">
                                <figure class="image es-image">
                                    <img src="../../image/motion1.gif" alt="Ecosystem">
                                </figure>

                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white mb-6">
                                    Identified as the length covered between two points or position
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Time -->
                    <div class="motion-content" id="motionTime">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Time
                                    </p>
                                    <p class="title description1 main-font has-text-white">
                                        Measures the duration of events. Unit for time is second(s), minute (min) and hour (hr).
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/motion2.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Speed -->
                    <div class="motion-content" id="motionSpeed">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-4 p-6">
                            <h1 class="title has-text-white secondary-font" id="header">Speed</h1>

                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered">
                                <figure class="image motion-image">
                                    <img src="../../image/motion3.gif" alt="Ecosystem">
                                </figure>

                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white mb-6">
                                    Is the measurement of how fast an object moves.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Velocity -->
                    <div class="motion-content" id="motionVelocity">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-4 p-6">
                            <h1 class="title has-text-white secondary-font" id="header">Velocity</h1>

                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered">
                                <figure class="image motion-image2">
                                    <img src="../../image/motion4.gif" alt="Ecosystem">
                                </figure>

                                <p class="title main-font column is-four-fifths is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white mb-6">
                                    The measure of rate at which an object changes its position.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Video -->
                    <div class="motion-content" id="motionVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6" style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="header2">Motion</h1>

                            <!-- Video for -->
                            <div class="box">
                                <video id="solidVideo" width="750" height="520" controls>
                                    <source src="../../videos/Motion.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: Bluniverse Design Studio Youtube
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Formula -->
                    <div class="motion-content" id="motionFormula">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Speed Formula
                                    </p>
                                    <p class="title is-size-3-widescreen main-font has-text-white has-text-justified">
                                        Speed = Distance divided by Time → How fast you're going is how far the distance you went, divided by how long it took.
                                    </p>
                                    <p class="title is-size-3-widescreen main-font has-text-white has-text-justified">
                                        Formula: s (speed) = d (distance) / t (time)
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/forSpeed.png" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Example1 -->
                    <div class="motion-content" id="motionExample1">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="headerEx">Examples</h1>
                            
                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered" id="formula1">
                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white mb-6" id="question">
                                    A car travels a distance of 800m in 40 seconds. How fast did it move?
                                </p>
                            </div>
                            
                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="ex-text">
                                    <p class="title main-font has-text-white">
                                        Given: d = 800m, t = 40s <br>
                                        Required: speed <br>
                                        Formula: s = d / t <br>
                                        Solution: s = 800m / 40s = 20m/s
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image" id="exImage">
                                        <img src="../../image/motion5.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Formula2 -->
                    <div class="motion-content" id="motionFormula2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Time Formula
                                    </p>
                                    <p class="title is-size-3-widescreen main-font has-text-white has-text-justified">
                                        Time = Distance divided by Speed → To find out how long it took, divide how far you went by how fast you were going.
                                    </p>
                                    <p class="title is-size-3-widescreen main-font has-text-white has-text-justified">
                                        Formula: t (time) = d (distance) / s (speed)
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/forTime.png" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Example2 -->
                    <div class="motion-content" id="motionExample2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="headerEx">Examples</h1>
                            
                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered" id="formula1">
                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white mb-6" id="question">
                                    How long will it take Carlo to reach the end of the room 5.8 meters away if he sprints at a speed of 1.2m/s? 
                                </p>
                            </div>
                            
                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="ex-text">
                                    <p class="title main-font has-text-white">
                                        Given: d = 5.8m, s = 1.2m/s <br>
                                        Required: time <br>
                                        Formula: t = d / s <br>
                                        Solution: t = 5.8m / 1.2s = 4.83s
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image" id="exImage">
                                        <img src="../../image/motion6.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Formula3 -->
                    <div class="motion-content" id="motionFormula3">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Distance Formula
                                    </p>
                                    <p class="title is-size-3-widescreen main-font has-text-white has-text-justified">
                                        Distance = Speed times Time → To find out how far you went, multiply how fast you were going by how long it took."
                                    </p>
                                    <p class="title is-size-3-widescreen main-font has-text-white has-text-justified">
                                        Formula: = d (distance) = s(t)
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/forDistance.png" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Example3 -->
                    <div class="motion-content" id="motionExample3">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="headerEx">Examples</h1>
                            
                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered" id="formula1">
                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white mb-6" id="question">
                                    How far can a dog go to fetch a ball if it runs at a speed of 4.5m/s for 30 seconds?
                                </p>
                            </div>
                            
                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="ex-text1">
                                    <p class="title main-font has-text-white">
                                    Give: d = 4.5m/s, t = 30s <br>
                                    Required: distance <br>
                                    Formula: d = s(t) <br>
                                    Solution: d = 30s (4.5m/s) = 135m <br><br>
                                    Therefore, the distance that the dog runs is 135cm
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image" id="exImage">
                                        <img src="../../image/motion7.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LetsTry -->
                    <div class="eco-content" id="letsTry">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image c-image">
                                        <img src="../../image/einstein.png" alt="Einstein">
                                    </figure>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-half pr-6 mr-6">
                                    <figure class="image letstry">
                                        <img src="../../image/letstry.png" alt="letstry">
                                    </figure>
                                </div>
                            </div>
                            
                            <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="letsTryButton">
                                <button class="button main-font is-danger is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile has-text-white">
                                    Go Back
                                </button>
                                <button class="button main-font is-success is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile mx-2 has-text-white">
                                    Proceed to quiz
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Quiz -->
                    <div class="motion-content" id="motionQuiz">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6" style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="header4">
                                QUIZ
                            </h1>
                            <!-- Quiz Container -->
                            <div class="box has-text-centered" id="quizContainer" style="width: 100%; max-width: 90%; max-height: 80%; padding: 30px; z-index: 2;">
                                <div class="columns">
                                    <!-- Left Column for Image -->
                                    <div class="column is-one-third has-text-centered placeholderImage">
                                        <img src="../../image/book.png" alt="Quiz Image" id="quizImage">
                                    </div>

                                    <!-- Right Column for Question and Choices -->
                                    <div class="column is-two-thirds">
                                        <!-- Question Number -->
                                        <h2 class="title secondary-font is-2" id="questionNumber">Question 1</h2>

                                        <!-- Question -->
                                        <p class="subtitle main-font is-4" id="questionText"></p>

                                        <!-- Choices as Buttons with Responsive Sizes -->
                                        <div class="buttons is-flex is-flex-direction-column ml-3">
                                            <button class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                        </div>

                                        <div class="box extra-info-box" id="extraInfoBox" style="display:none;">
                                            <h3 class="subtitle secondary-font is-3" id="extraInfoTitle">Additional Information</h3>
                                            <p id="extraInfoText" class="main-font"></p>
                                        </div>

                                        <!-- Next Button -->
                                        <button class="button is-success main-font is-size-6-widescreen is-size-7-tablet" id="nextButton" disabled>Next Question</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Quiz Result -->
                            <div class="box has-text-centered p-6" id="quizResult" style="margin-top: -10px;">
                                <h2 class="subtitle secondary-font is-1">Quiz Result</h2>
                                <p class="subtitle secondary-font is-2">Good Job!</p>
                                
                                <div class="columns is-centered is-vcentered mt-5">
                                    
                                    <div class="column is-3 has-text-centered">
                                        <div class="is-flex is-align-items-center is-justify-content-center">
                                            <p class="has-text-weight-bold" style="font-size: 6rem; color: #FFA500; margin-right: 4rem;" id="displayCorrectAnswers">0</p>
                                            <p style="font-size: 24px;">Out Of</p>
                                            <p class="has-text-weight-bold" style="font-size: 6rem; color: #007BFF; margin-left: 4rem;" id="displayTotalQuestions">0</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="columns is-centered mt-5">
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;" id="displayCorrectAnswers">Total Questions: <span class="has-text-weight-bold" id="totalQuestions">0</span></p>
                                        <p style="font-size: 24px; margin-left: 60px;" id="displayCorrectAnswers">Percentage: <span class="has-text-weight-bold" id="percentage">0%</span></p>
                                    </div>
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;" ><span class="has-text-weight-bold has-text-success">Correct Answers:</span> <span class="has-text-weight-bold has-text-success" id="correctAnswers">0</span></p>
                                        <p style="font-size: 24px; margin-left: 60px;" ><span class="has-text-weight-bold has-text-danger">Wrong Answers:</span> <span class="has-text-weight-bold has-text-danger" id="wrongAnswers">0</span></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- Motion Completed -->
                    <div class="motion-content" id="motionCompleted">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                        <div class="column is-full is-flex is-justify-content-flex-end mb-6" id="compButton">
                                <div class="columns is-half ml-6 p-2" id="mainbtn">
                                    <a href="../studentWelcome.php?show=Lessons">
                                        <button class="button back-button is-success is-size-6-desktop is-size-6-tablet" style="z-index: 5;">
                                        <p class="has-text-white">Back To Main Menu</p>
                                        </button>
                                    </a>
                                </div>
                                <div class="columns is-half ml-6 p-2" id="nxtbtn">
                                    <a href="measuring.php">
                                        <button class="button back-button is-success is-size-6-desktop is-size-6-tablet" style="z-index: 5;">
                                        <p class="has-text-white">Next Topic</p>
                                        </button>
                                    </a>
                                </div>

                            </div>

                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half ">
                                    <figure class="image einstein">
                                        <img src="../../image/einstein.png" alt="Einstein">
                                    </figure>
                                </div>

                                <div class="column is-half is-one-fifths is-flex is-flex-direction-column align-bottom mt-5">
                                    <div class="has-text-centered">
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header6">
                                            YOU DID GREAT!
                                        </p>
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header6">
                                            Here is a medal for completing the lesson 1
                                        </p>
                                    </div>
                                    <figure class="image is-flex is-justify-content-center medal-image mt-5 mb-4">
                                        <img src="../../image/medal1.png" alt="medal1">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="examplesButton">
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mb-2" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon mr-2"></i> <span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2 mb-2" id="rightButton" style="z-index: 2;">
                            <span class="button-text">Next</span> <i class="fas fa-arrow-right button-icon ml-2"></i>
                        </button>

                        <!-- Einstein Image -->
                        <img src="../../image/einstein.png" alt="Einstein Figure" id="einstein-image">
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<audio id="motionAudio" src="../../sounds/motion1.mp3"></audio>
<audio id="motionAudio2" src="../../sounds/motion2.mp3"></audio>
<audio id="motionAudio3" src="../../sounds/motion3.mp3"></audio>
<audio id="motionAudio4" src="../../sounds/motion4.mp3"></audio>
<audio id="motionAudio5" src="../../sounds/motion5.mp3"></audio>
<audio id="motionAudio6" src="../../sounds/motion6.mp3"></audio>
<audio id="motionAudio7" src="../../sounds/motion7.mp3"></audio>
<audio id="motionAudio8" src="../../sounds/motion8.mp3"></audio>
<audio id="motionAudio9" src="../../sounds/motion9.mp3"></audio>
<audio id="motionAudio10" src="../../sounds/motion10.mp3"></audio>
<audio id="motionAudio11" src="../../sounds/motion11.mp3"></audio>
<audio id="motionAudio12" src="../../sounds/motion12.mp3"></audio>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const objectives = document.getElementById('objectives');
        const motionFirst = document.getElementById('motionFirst');
        const motionDef = document.getElementById('motionDef');
        const motionDistance = document.getElementById('motionDistance');
        const motionTime = document.getElementById('motionTime');
        const motionSpeed = document.getElementById('motionSpeed');
        const motionVelocity = document.getElementById('motionVelocity');
        const motionVideo = document.getElementById('motionVideo');
        const motionFormula = document.getElementById('motionFormula');
        const motionExample1 = document.getElementById('motionExample1');
        const motionFormula2 = document.getElementById('motionFormula2');
        const motionExample2 = document.getElementById('motionExample2');
        const motionFormula3 = document.getElementById('motionFormula3');
        const motionExample3 = document.getElementById('motionExample3');
        const letsTry = document.getElementById('letsTry');
        const motionQuiz = document.getElementById('motionQuiz');
        const motionCompleted = document.getElementById('motionCompleted');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        const audio = document.getElementById('motionAudio');
        const audio2 = document.getElementById('motionAudio2');
        const audio3 = document.getElementById('motionAudio3');
        const audio4 = document.getElementById('motionAudio4');
        const audio5 = document.getElementById('motionAudio5');
        const audio6 = document.getElementById('motionAudio6');
        const audio7 = document.getElementById('motionAudio7');
        const audio8 = document.getElementById('motionAudio8');
        const audio9 = document.getElementById('motionAudio9');
        const audio10 = document.getElementById('motionAudio10');
        const audio11 = document.getElementById('motionAudio11');
        const audio12 = document.getElementById('motionAudio12');
        let currentSection = 0;
        const sections = [objectives, motionFirst, motionDef, motionDistance, motionTime, motionSpeed, motionVelocity, motionVideo, motionFormula, 
                        motionExample1, motionFormula2, motionExample2, motionFormula3, motionExample3, letsTry, motionQuiz, motionCompleted];
                        let sectionTimeSpent = new Array(sections.length).fill(0); 
        let sectionTimerInterval;
        const studentId = <?php echo json_encode($id); ?>;
        console.log("Student ID from PHP:", studentId);

        function startSectionTimer() {
    console.log("Starting timer for section " + currentSection);
    sectionTimerInterval = setInterval(() => {
        sectionTimeSpent[currentSection]++;
        console.log(`Time in section ${currentSection}: ${sectionTimeSpent[currentSection]} seconds`);
    }, 1000);
}

function stopSectionTimer() {
    if (sectionTimerInterval) {
        console.log(`Stopping timer for section ${currentSection}. Time spent: ${sectionTimeSpent[currentSection]} seconds`);
        sendTimeData(studentId, 'Motion', currentSection, 'What is Motion?', sectionTimeSpent[currentSection]);
        clearInterval(sectionTimerInterval);
        sectionTimerInterval = null;
    }
}

function resetSectionTimer() {
        sectionTimeSpent[currentSection] = 0; 
    }

    function sendTimeData(studentId, lessonName, sectionIndex, sectionName, timeSpent) {
    const data = {
        student_id: studentId,  // from PHP
        lesson: lessonName,
        section_index: sectionIndex,
        section_name: sectionName,
        time_spent: timeSpent
    };


    fetch('../record_time.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.text()) 
    .then(responseText => {
        console.log('Raw response from server:', responseText);  
        try {
            const responseData = JSON.parse(responseText);  
            console.log("Time data saved successfully", responseData);
        } catch (error) {
            console.error("Error parsing JSON response", error);  
        }
    })
    .catch((error) => {
        console.error("Error saving time data", error);
    });
}
        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('motion-content-active');
                section.classList.add('motion-content');
            });
        }

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
    function stopAudio3() {
        audio3.pause();
        audio3.currentTime = 0; 
    }

    function playAudio3() {
        audio3.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio4() {
        audio4.pause();
        audio4.currentTime = 0; 
    }

    function playAudio4() {
        audio4.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio5() {
        audio5.pause();
        audio5.currentTime = 0; 
    }

    function playAudio5() {
        audio5.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio6() {
        audio6.pause();
        audio6.currentTime = 0; 
    }

    function playAudio6() {
        audio6.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio7() {
        audio7.pause();
        audio7.currentTime = 0; 
    }

    function playAudio7() {
        audio7.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio8() {
        audio8.pause();
        audio8.currentTime = 0; 
    }

    function playAudio8() {
        audio8.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio9() {
        audio9.pause();
        audio9.currentTime = 0; 
    }

    function playAudio9() {
        audio9.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio10() {
        audio10.pause();
        audio10.currentTime = 0; 
    }

    function playAudio10() {
        audio10.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio11() {
        audio11.pause();
        audio11.currentTime = 0; 
    }

    function playAudio11() {
        audio11.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio12() {
        audio12.pause();
        audio12.currentTime = 0; 
    }

    function playAudio12() {
        audio12.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
        function updateEinsteinImageAndButtons() {
            if (currentSection === 14 || currentSection === 15 || currentSection === 16) {
                einsteinImage.style.display = 'none';
                examplesButton.style.marginLeft = '100%';    
            } else {
                einsteinImage.style.display = 'block';
                examplesButton.style.marginLeft = '0%'; 
            }

            if (currentSection === 14 || currentSection === 16) {
                leftButton.style.display = 'none';
                rightButton.style.display = 'none'; 
            } else {
                leftButton.style.display = 'block';
                rightButton.style.display = 'block'; 
            }
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('motion-content');
            sections[index].classList.add('motion-content-active');
            updateEinsteinImageAndButtons();
            resetSectionTimer()
            currentSection = index; 
            startSectionTimer();
            if (sections[index] === motionFirst) {
            playAudio(); 
        } else {
            stopAudio();
        }
        if (sections[index] === motionDef) {
            playAudio2(); 
        } else {
            stopAudio2();
        }
        if (sections[index] === motionDistance) {
            playAudio3(); 
        } else {
            stopAudio3();
        }

        if (sections[index] === motionTime) {
            playAudio4(); 
        } else {
            stopAudio4();
        }
        if (sections[index] === motionSpeed) {
            playAudio5(); 
        } else {
            stopAudio5();
        }
        if (sections[index] === motionVelocity) {
            playAudio6(); 
        } else {
            stopAudio6();
        }
        if (sections[index] === motionFormula) {
            playAudio7(); 
        } else {
            stopAudio7();
        }

        if (sections[index] === motionExample1) {
            playAudio8(); 
        } else {
            stopAudio8();
        }
        if (sections[index] === motionFormula2) {
            playAudio9(); 
        } else {
            stopAudio9();
        }
        if (sections[index] === motionExample2) {
            playAudio10(); 
        } else {
            stopAudio10();
        }
        if (sections[index] === motionFormula3) {
            playAudio11(); 
        } else {
            stopAudio11();
        }

        if (sections[index] === motionExample3) {
            playAudio12(); 
        } else {
            stopAudio12();
        }

        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                stopSectionTimer();
                currentSection++;
                showSection(currentSection);
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'motionLesson.php'; 
            } else if (currentSection > 0) {
                stopSectionTimer();
                currentSection--;
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 13; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 15; 
            showSection(currentSection);
        });

        hideAllSections();
        showSection(0); 
    });

// Quiz Data
const quizData = <?php echo json_encode($quiz_questions_solid); ?>;

let currentQuestionIndex = 0;
let correctAnswersCount = 0;
const totalQuestions = quizData.length;
let selectedAnswer = null;

const choices = document.querySelectorAll('.choice-btn');
const nextButton = document.getElementById('nextButton');
const extraInfoBox = document.getElementById('extraInfoBox');
const questionNumber = document.getElementById('questionNumber');
const questionText = document.getElementById('questionText');
const quizImage = document.getElementById('quizImage');
const extraInfoText = document.getElementById('extraInfoText');
const quizResult = document.getElementById('quizResult');
const totalQuestionsDisplay = document.getElementById('totalQuestions');
const correctAnswersDisplay = document.getElementById('correctAnswers');
const wrongAnswersDisplay = document.getElementById('wrongAnswers');
const percentageDisplay = document.getElementById('percentage');
const totalScoreDisplay = document.getElementById('totalScore');

// Function to load a question
function loadQuestion() {
    const currentQuestion = quizData[currentQuestionIndex];

    questionNumber.textContent = `Question ${currentQuestionIndex + 1}`;
    questionText.textContent = currentQuestion.question;
    quizImage.src = currentQuestion.quiz_image;

    choices.forEach((button, index) => {
        button.textContent = currentQuestion.choices[index];
        button.classList.remove('correct', 'wrong');
        button.style.display = 'inline-block';
        button.style.color = 'black'; 
    });

    extraInfoBox.style.display = 'none';
    nextButton.disabled = true;
    selectedAnswer = null;
}

// Adding click event listeners to choices
choices.forEach(button => {
    button.addEventListener('click', function() {
        if (selectedAnswer) return; // Prevent selecting again

        selectedAnswer = button.textContent; // Set the selected answer
        const correctAnswer = quizData[currentQuestionIndex].correct_answer;

        // Check each choice
        choices.forEach(btn => {
            // Hide incorrect answers if they are not selected
            if (btn.textContent !== correctAnswer && btn.textContent !== selectedAnswer) {
                btn.style.display = 'none'; // Hides the button
            } else {
                // Add correct or wrong class based on the selected answer
                btn.classList.add(btn.textContent === correctAnswer ? 'correct' : 'wrong');
                btn.style.color = 'white';
            }
        });

        // Display additional information about the question
        extraInfoText.textContent = quizData[currentQuestionIndex].additional_info;
        extraInfoBox.style.display = 'block';
        nextButton.disabled = false; // Enable the next button

        // Check if the answer is correct
        if (selectedAnswer === correctAnswer) {
            correctAnswersCount++; // Increment the correct answers count
        }
    });
});

// Function to handle next question
nextButton.addEventListener('click', function () {
    if (!selectedAnswer) {
        alert('Please select an answer!');
        return;
    }

    // Increment the current question index
    currentQuestionIndex++;

    // Check if the current question index is the last one
    if (currentQuestionIndex >= quizData.length) {
        // Call the showResults function to display the results
        showResults();
    } else {
        // Load the next question
        loadQuestion();
    }
});

function showResults() {
    const quizContainer = document.getElementById('quizContainer'); // Ensure this ID matches your HTML
    quizContainer.style.display = 'none'; // Hide the quiz container

    document.getElementById('displayTotalQuestions').textContent = totalQuestions;
    document.getElementById('displayCorrectAnswers').textContent = correctAnswersCount;

    quizResult.style.display = 'block';
    totalQuestionsDisplay.textContent = totalQuestions;
    correctAnswersDisplay.textContent = correctAnswersCount;
    wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
    percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
    totalScoreDisplay.textContent = correctAnswersCount + ' / ' + totalQuestions;

    // Send the score to the server (optional)
    sendScoreToServer(correctAnswersCount);
}

// Function to send score to server
function sendScoreToServer(score) {
    const studentId = "<?php echo $id; ?>"; // Get the student ID from the PHP session
    const quizId = 6; 
    const lesson = "Motion"; 

    fetch('../save_quiz_score.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({ student_id: studentId, quiz_id: quizId, lesson: lesson, score: score }),
})
.then(response => {
    if (!response.ok) {
        return response.text().then(text => {
            throw new Error(`Network response was not ok: ${text}`);
        });
    }
    return response.json();
})
.then(data => {
    console.log('Score saved successfully:', data);
})
.catch(error => {
    console.error('There was a problem saving the score:', error);
});
}
    // Load the first question
    loadQuestion();
</script>