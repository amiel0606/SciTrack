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

// Fetch pre-assessment questions
$preAssessmentData = [];
$postAssessmentData = [];

// Fetch 'pre' questions
$sqlPre = "SELECT question, choices, quiz_image, correct_answer, additional_info 
           FROM quiz_questions_motion
           WHERE type = 'pre' 
           ORDER BY RAND() 
           LIMIT 5";

$resultPre = $conn->query($sqlPre);

if ($resultPre->num_rows > 0) {
    while ($row = $resultPre->fetch_assoc()) {
        $row['choices'] = json_decode($row['choices']);
        $preAssessmentData[] = $row;
    }
}

// Fetch 'post' questions with IDs 1-10
$sqlPost = "SELECT question, choices, quiz_image, correct_answer, additional_info 
            FROM quiz_questions_motion
            WHERE type = 'post' AND id BETWEEN 1 AND 10
            ORDER BY RAND()";

$resultPost = $conn->query($sqlPost);

if ($resultPost->num_rows > 0) {
    while ($row = $resultPost->fetch_assoc()) {
        $row['choices'] = json_decode($row['choices']);
        $postAssessmentData[] = $row;
    }
}

// If we have post-assessment questions with images, randomly assign a post-assessment image to pre-assessment questions
if (count($postAssessmentData) > 0) {
    foreach ($preAssessmentData as &$preQuestion) {
        // Randomly pick an image from the post-assessment questions (IDs 1-10)
        $randomPostQuestion = $postAssessmentData[array_rand($postAssessmentData)];
        $preQuestion['quiz_image'] = $randomPostQuestion['quiz_image'];
    }
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
                                <p class="subtitle description2 has-text-white main-font mb-6"> At the end of the lesson you will be able to:</p>
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

                    <!-- Pre-Assessment -->
                    <div class="motion-content" id="motionPreAssessment">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6"
                            style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="headerPreAssessment">
                                PRE-ASSESSMENT
                            </h1>
                            <!-- Pre-Assessment Container -->
                            <div class="box has-text-centered" id="preAssessmentContainer"
                                style="width: 100%; max-width: 90%; max-height: 80%; padding: 30px; z-index: 2;">
                                <div class="columns">
                                    <!-- Left Column for Image -->
                                    <div class="column is-one-third has-text-centered placeholderImage">
                                        <img src="../../image/book.png" alt="Pre-Assessment Image" id="preAssessmentImage">
                                    </div>

                                    <!-- Right Column for Question and Choices -->
                                    <div class="column is-two-thirds">
                                        <!-- Question Number -->
                                        <h2 class="title secondary-font is-2" id="preAssessmentQuestionNumber">Question 1</h2>

                                        <!-- Question -->
                                        <p class="subtitle main-font is-4" id="preAssessmentQuestionText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>

                                        <!-- Choices as Buttons with Responsive Sizes -->
                                        <div class="buttons is-flex is-flex-direction-column ml-3">
                                            <button
                                                class="button main-font is-fullwidth preAssessment-choice-btn is-size-6-widescreen is-size-7-tablet">Lorem ipsum</button>
                                            <button
                                                class="button main-font is-fullwidth preAssessment-choice-btn is-size-6-widescreen is-size-7-tablet">Lorem ipsum</button>
                                            <button
                                                class="button main-font is-fullwidth preAssessment-choice-btn is-size-6-widescreen is-size-7-tablet">Lorem ipsum</button>
                                            <button
                                                class="button main-font is-fullwidth preAssessment-choice-btn is-size-6-widescreen is-size-7-tablet">Lorem ipsum</button>
                                        </div>

                                        <div class="box extra-info-box" id="preAssessmentExtraInfoBox" style="display:none;">
                                            <h3 class="subtitle secondary-font is-3" id="preAssessmentExtraInfoTitle">Additional
                                                Information</h3>
                                            <p id="preAssessmentExtraInfoText" class="main-font"></p>
                                        </div>

                                        <!-- Next Button -->
                                        <button
                                            class="button is-success main-font is-size-6-widescreen is-size-7-tablet"
                                            id="preAssessmentNextButton" disabled>Next Question</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Pre-Assessment Result -->
                            <div class="box has-text-centered p-6" id="preAssessmentResult">
                                <h2 class="subtitle secondary-font is-1">Pre-Assessment Result</h2>
                                <p class="subtitle secondary-font is-2 Feedback">Well Done!</p>

                                <div class="columns is-centered is-vcentered mt-5">
                                    <div class="column is-3 has-text-centered">
                                        <div class="is-flex is-align-items-center is-justify-content-center">
                                            <p class="has-text-weight-bold"
                                                style="font-size: 6rem; color: #FFA500; margin-right: 4rem;"
                                                id="preAssessmentDisplayCorrectAnswers">0</p>
                                            <p style="font-size: 24px;">Out Of</p>
                                            <p class="has-text-weight-bold"
                                                style="font-size: 6rem; color: #007BFF; margin-left: 4rem;"
                                                id="preAssessmentDisplayTotalQuestions">0</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="columns is-centered mt-5">
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;" id="preAssessmentTotalQuestions">Total
                                            Questions: <span class="has-text-weight-bold" id="preAssessmentTotal">0</span>
                                        </p>
                                        <p style="font-size: 24px; margin-left: 60px;" id="preAssessmentPercentage">
                                            Percentage: <span class="has-text-weight-bold" id="preAssessmentPercent">0%</span></p>
                                    </div>
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;"><span
                                                class="has-text-weight-bold has-text-success">Correct Answers:</span>
                                            <span class="has-text-weight-bold has-text-success"
                                                id="preAssessmentCorrectAnswers">0</span>
                                        </p>
                                        <p style="font-size: 24px; margin-left: 60px;"><span
                                                class="has-text-weight-bold has-text-danger">Wrong Answers:</span> <span
                                                class="has-text-weight-bold has-text-danger" id="preAssessmentWrongAnswers">0</span>
                                        </p>
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

                    <!-- Motion Activity -->
                    <div class="motion-content" id="motionActivity">
                        <div class="modal">
                            <!-- Modal Background -->
                            <div class="modal-background"></div>

                            <!-- Modal Content -->
                            <div class="modal-content" id="activityContainer1">
                                <div class="box has-background-white-ter activity">
                                    
                                    <p class="title has-text-centered has-text-black actHeader">ACTIVITY</p>
                                    
                                    <p class="subtitle has-text-centered has-text-grey is-size-3 mb-5 actStatement">
                                        Which of these images shows motion?
                                    </p>

                                    <div class="columns">
                                        <!-- Activity Boxes -->
                                        <div class="column is-two-thirds">
                                            <div class="columns is-multiline">
                                                <!-- Top Row: 3 Images -->
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct1">
                                                        <img src="../exerciseImage/dragMotion1.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct2">
                                                        <img src="../exerciseImage/dragMotion2.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct3">
                                                        <img src="../exerciseImage/dragSolid9.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <!-- Bottom Row: 2 Images -->
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct4">
                                                        <img src="../exerciseImage/dragMotion3.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct5">
                                                        <img src="../exerciseImage/dragSolid10.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="column is-one-third">
                                            <p class="subtitle has-text-centered actStatement">Drop Here</p>
                                            <div class="columns is-multiline">
                                                <div class="column is-one-third">
                                                    <div class="box has-background-white dropZone" id="dropZone1"></div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box has-background-white dropZone" id="dropZone2"></div>
                                                </div>
                                            </div>

                                            <div class="column is-full mt-4">
                                                <div class="box has-background-white dropZone" id="dropZone3"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Information Icon -->
                                    <div class="info-icon" id="infoIcon">
                                        <i class="fas fa-info-circle"></i> <!-- Using Font Awesome icon -->
                                    </div>

                                    <!-- Instruction Modal -->
                                    <div class="instruction-modal" id="instructionModal">
                                        <div class="instruction-content">
                                            <p class="subtitle main-font has-text-dark is-size-1">
                                                <span style= "color: blue; font-weight: bold;">Drag and Classify</span>
                                            </p>
                                            <p class="subtitle main-font has-text-dark">
                                                <span class="title">Instruction:</span> <br><br>Drag 3 images to the correct box based on their descriptions. Match each image with the right category.
                                            </p>
                                            <button class="button is-medium is-secondary" id="closeInstruction">Close</button>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="has-text-centered">
                                        <button class="button is-success mt-4 submitAct" id="submitAct1">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Content -->
                            <div class="modal-content" id="activityContainer2">
                                <div class="box has-background-white-ter activity">
                                    
                                    <p class="title has-text-centered has-text-black actHeader">ACTIVITY</p>

                                    <!-- Activity Boxes -->
                                    <div class="columns is-multiline">
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct6">
                                                <img src="../exerciseImage/dragMotion4.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct7">
                                                <img src="../exerciseImage/dragMotion5.png" alt="Image 1" />
                                            </div>
                                        </div>
                                        
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct8">
                                                <img src="../exerciseImage/dragMotion6.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct9">
                                                <img src="../exerciseImage/dragMotion7.png" alt="Image 1" />
                                            </div>
                                        </div>

                                        <div class="column is-half">
                                            <p class="subtitle has-text-left has-text-grey is-size-3 mb-5 actStatement2">
                                                _______ is identified as the length covered between two points or position.
                                            </p>

                                            <!-- Input Box below actStatement2 -->
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input has-text-centered" type="text" placeholder="Your answer here">
                                                </div>
                                            </div>

                                            <!-- Information Icon -->
                                            <div class="info-icon" id="infoIcon1">
                                                <i class="fas fa-info-circle"></i> <!-- Using Font Awesome icon -->
                                            </div>

                                            <!-- Instruction Modal -->
                                            <div class="instruction-modal" id="instructionModal1">
                                                <div class="instruction-content">
                                                    <p class="subtitle main-font has-text-dark is-size-1">
                                                        <span style= "color: blue; font-weight: bold;">Guess the Concept</span>
                                                    </p>
                                                    <p class="subtitle main-font has-text-dark">
                                                        <span class="title">Instruction:</span> <br><br>Look at the image and read the statement. Use them to identify the correct answer. Type your answer in the answer box.
                                                    </p>
                                                    <button class="button is-medium is-secondary" id="closeInstruction1">Close</button>
                                                </div>
                                            </div>

                                            <!-- Submit Button below the input box -->
                                            <div class="has-text-centered">
                                                <button class="button is-success mt-4 submitAct" id="submitAct2">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Content -->
                            <div class="modal-content" id="activityContainer3">
                                <div class="box has-background-white-ter activity">
                                    
                                    <p class="title has-text-centered has-text-black actHeader">ACTIVITY</p>

                                    <!-- Activity Boxes -->
                                    <div class="columns is-multiline">
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct10">
                                                <img src="../exerciseImage/dragMotion8.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct11">
                                                <img src="../exerciseImage/dragMotion9.png" alt="Image 1" />
                                            </div>
                                        </div>
                                        
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct12">
                                                <img src="../exerciseImage/dragMotion10.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct13">
                                                <img src="../exerciseImage/dragMotion11.png" alt="Image 1" />
                                            </div>
                                        </div>

                                        <div class="column is-half">
                                            <p class="subtitle has-text-left has-text-grey is-size-3 actStatement3">
                                                _______ is the measurement of how fast an object moves.
                                            </p>

                                            <p class="subtitle has-text-centered has-text-grey is-size-3 jLetters">
                                                <span style="color: blue;">Letters: </span>
                                            </p>

                                            <div class="box letterChoicesBox">
                                                <div class="columns is-multiline">
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter1">S</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter2">A</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter3">D</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter4">Z</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter5">E</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter6">L</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter7">G</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter8">P</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter9">F</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter10">E</div>
                                                    </div>
                                                    <!-- Add more letters as needed -->
                                                </div>
                                            </div>

                                            <!-- Input Box below actStatement3 -->
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input2 has-text-centered" type="text" placeholder="Your answer here">
                                                </div>
                                            </div>

                                            <!-- Information Icon -->
                                            <div class="info-icon" id="infoIcon2">
                                                <i class="fas fa-info-circle"></i> <!-- Using Font Awesome icon -->
                                            </div>

                                            <!-- Instruction Modal -->
                                            <div class="instruction-modal" id="instructionModal2">
                                                <div class="instruction-content">
                                                    <p class="subtitle main-font has-text-dark is-size-1">
                                                        <span style= "color: blue; font-weight: bold;">What’s the Right Word?</span>
                                                    </p>
                                                    <p class="subtitle main-font has-text-dark">
                                                        <span class="title">Instruction:</span> <br><br>Look at the four pictures and read the description carefully. The description will give you a clue about what the pictures are showing. 
                                                        You will see a set of letters in the choices. Click on the letters to put them into the answer box to form the correct word. If you want to remove a letter, click it again to take it out of the box. When you’re done, click Submit to check if you’re correct!
                                                    </p>
                                                    <button class="button is-medium is-secondary" id="closeInstruction2">Close</button>
                                                </div>
                                            </div>

                                            <!-- Submit Button below the input box -->
                                            <div class="has-text-centered">
                                                <button class="button is-success mt-4 submitAct" id="submitAct3">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Correct Answer -->
                            <div class="modal answerMod" id="correctAnswerModal">
                                <div class="modal-content">
                                    <div class="box has-background-success">
                                        <img src="https://cdn-icons-png.flaticon.com/512/5610/5610944.png" alt="Correct Icon"/>
                                        <p class="subtitle main-font is-size-3 has-text-white">Great Job!</p>
                                        <p class="subtitle main-font is-size-2 has-text-white">Correct!</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Wrong Answer -->
                            <div class="modal answerMod" id="wrongAnswerModal">
                                <div class="modal-content">
                                    <div class="box has-background-danger">
                                        <img src="https://cdn-icons-png.freepik.com/256/11560/11560478.png?ga=GA1.1.1655042950.1733505836&semt=ais_hybrid" alt="Wrong Icon"/>
                                        <p class="subtitle main-font is-size-3 has-text-white">Try Again!</p>
                                        <p class="subtitle main-font is-size-2 has-text-white">Incorrect!</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Modal for "Answer First" -->
                            <div class="modal" id="noAnswerModal">
                                <div class="modal-content">
                                    <div class="box has-background-warning has-text-centered">
                                        <p class="has-text-black is-size-4">Please drag and drop an image before submitting!</p>
                                    </div>
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
                                <p class="subtitle secondary-font is-2 Feedback">Good Job!</p>
                                
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
                                        <img src="../../image/med5.png" alt="medal1">
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
<audio id="motionAudio13" src="../../sounds/motionObj1.mp3"></audio>
<audio id="motionAudio14" src="../../sounds/letsTry.mp3"></audio>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const objectives = document.getElementById('objectives');
        const motionPreAssessment = document.getElementById('motionPreAssessment');
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
        const motionActivity = document.getElementById('motionActivity');
        const letsTry = document.getElementById('letsTry');
        const motionQuiz = document.getElementById('motionQuiz');
        const motionCompleted = document.getElementById('motionCompleted');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');

        const images = document.querySelectorAll('.imageAct');
        const dropZones = document.querySelectorAll('.dropZone');
        const modal = document.querySelector('.modal');
        const modalBackground = document.querySelector('.modal-background');
        const infoIcon = document.getElementById('infoIcon');
        const infoIcon1 = document.getElementById('infoIcon1');
        const infoIcon2 = document.getElementById('infoIcon2');
        const instructionModal = document.getElementById('instructionModal');
        const instructionModal1 = document.getElementById('instructionModal1');
        const instructionModal2 = document.getElementById('instructionModal2');
        const closeInstruction = document.getElementById('closeInstruction');
        const closeInstruction1 = document.getElementById('closeInstruction1');
        const closeInstruction2 = document.getElementById('closeInstruction2');

        const submitAct1 = document.getElementById('submitAct1');
        const submitAct2 = document.getElementById('submitAct2');
        const submitAct3 = document.getElementById('submitAct3');
        const activityContainer1 = document.getElementById('activityContainer1');
        const activityContainer2 = document.getElementById('activityContainer2');
        const activityContainer3 = document.getElementById('activityContainer3');
        const input2 = document.querySelector('.input');
        const input3 = document.querySelector('.input2');
        const tiles = document.querySelectorAll('.tileLetter');
        const correctAnswerModal = document.getElementById('correctAnswerModal');
        const wrongAnswerModal = document.getElementById('wrongAnswerModal');

        const correctSound = new Audio('../../sounds/correct.mp3');
        const incorrectSound = new Audio('../../sounds/incorrect.mp3');
        const buzzer = new Audio('../../sounds/wrong.mp3');
        buzzer.volume = 0.5;

        let selectedImage = null;
        activityContainer1.style.display = 'block';
        activityContainer2.style.display = 'none';
        activityContainer3.style.display = 'none';

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
        const audio13 = document.getElementById('motionAudio13');
        const audio14 = document.getElementById('motionAudio14');
        let currentSection = 0;
        const sections = [objectives, motionPreAssessment, motionFirst, motionDef, motionDistance, motionTime, motionSpeed, motionVelocity, motionVideo, motionFormula, 
                        motionExample1, motionFormula2, motionExample2, motionFormula3, motionExample3, motionActivity, letsTry, motionQuiz, motionCompleted];
                        let sectionTimeSpent = new Array(sections.length).fill(0); 
        let sectionTimerInterval;
        const studentId = <?php echo json_encode($id); ?>;
        console.log("Student ID from PHP:", studentId);

        function checkSectionComplete() {
            if (currentSection === sections.length - 1) {  // 'matterCompleted' is the last section
                checkQuizTaken();  // Check quiz status

                fetch('../check_quiz_status.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        student_id: studentId,
                        quiz_id: 6,
                        lesson: 'Motion'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'taken') {

                        const achievementData = {
                            student_id: studentId,
                            achievement_name: 'Motion: What is Motion?',  
                            image_path: '../image/med5.png'  
                        };


                        fetch('../add_achievement.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(achievementData)
                        })
                        .then(response => response.json())
                        .then(achievementResponse => {
                            console.log('Achievement added:', achievementResponse.message);
                            console.log(achievementData);  
                        })
                        .catch(error => {
                            console.error('Error adding achievement:', error);
                        });
                    } else {
                        showSection(17); // Show a section to encourage quiz completion

                    }
                })
                .catch(error => {
                    console.error('Error checking quiz status:', error);
                });
            }}

        function checkQuizTaken() {
            fetch('../check_quiz_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    student_id: studentId,
                    quiz_id: 6,
                    lesson: 'Motion'
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Server response:', data);


                rightButton.onclick = (event) => {
                    if (data.status !== 'taken') {
                        alert('Quiz not taken yet. Please complete the quiz before proceeding.');

                        showSection(17); 

                        updateEinsteinImageAndButtons();
                    } else {
                        if (currentSection < sections.length - 1) {
                            showSection(currentSection + 1);
                        }
                    }
                };
            })
            .catch(error => {
                console.error('Error checking quiz status:', error);
            });
        }

        //For Exercise

        // Show the instruction modal when the icon is clicked
        infoIcon.addEventListener('click', () => {
            instructionModal.style.display = 'block';
        });
        infoIcon1.addEventListener('click', () => {
            instructionModal1.style.display = 'block';
        });
        infoIcon2.addEventListener('click', () => {
            instructionModal2.style.display = 'block';
        });

        // Close the instruction modal when the close button is clicked
        closeInstruction.addEventListener('click', () => {
            instructionModal.style.display = 'none';
        });
        closeInstruction1.addEventListener('click', () => {
            instructionModal1.style.display = 'none';
        });
        closeInstruction2.addEventListener('click', () => {
            instructionModal2.style.display = 'none';
        });

        const originalPositions = {};
        images.forEach(image => {
            const rect = image.getBoundingClientRect();
            originalPositions[image.id] = {
                parent: image.parentElement,
                styles: {
                    marginLeft: image.style.marginLeft || '0',
                    marginTop: image.style.marginTop || '0',
                    left: rect.left,
                    top: rect.top,
                }
            };
            image.setAttribute('draggable', 'true');

            image.addEventListener('dragstart', (e) => {
                e.dataTransfer.setData('text/plain', e.target.id);
                e.target.classList.add('selected-box'); 
            });

            image.addEventListener('dragend', (e) => {
                e.target.classList.remove('selected-box'); 
            });
        });

        dropZones.forEach(zone => {
            zone.addEventListener('dragover', (e) => {
                e.preventDefault(); 
                zone.classList.add('hovered'); 
            });

            zone.addEventListener('dragleave', () => {
                zone.classList.remove('hovered'); 
            });

            zone.addEventListener('drop', (e) => {
                e.preventDefault();
                zone.classList.remove('hovered'); 

                const draggedId = e.dataTransfer.getData('text/plain');
                const draggedElement = document.getElementById(draggedId);

                if (draggedElement) {
                    
                    if (!zone.querySelector('.imageAct')) {
                        zone.appendChild(draggedElement);
                        draggedElement.style.marginLeft = '0';
                    } else {
                        noAnswerModal.querySelector('p').textContent = "This drop box already contains an element.";
                        noAnswerModal.style.display = 'block';
                        setTimeout(() => {
                            noAnswerModal.style.display = 'none';
                        }, 3000); 
                        return;
                    }
                }
            });

            zone.addEventListener('click', (e) => {
                if (e.target.classList.contains('imageAct')) {
                    const imageId = e.target.id;
                    const originalData = originalPositions[imageId];

                    if (originalData) {
                        const originalParent = originalData.parent;

                        originalParent.appendChild(e.target);

                        e.target.style.marginLeft = originalData.styles.marginLeft;
                        e.target.style.marginTop = originalData.styles.marginTop;

                        if (imageId === 'imageAct2') {
                            e.target.style.marginLeft = '-62px'; 
                        } else if (imageId === 'imageAct3') {
                            e.target.style.marginLeft = '-130px'; 
                        } else if (imageId === 'imageAct4') {
                            e.target.style.marginLeft = '130px';
                        } else if (imageId === 'imageAct5') {
                            e.target.style.marginLeft = '130px';
                        }

                        // Reset position
                        e.target.style.position = 'static';
                    }
                }
            });
        });
        const tileStates = {};
        tiles.forEach(letter => {
            tileStates[letter.id] = false; 

            letter.addEventListener('click', function() {
                const letterValue = this.innerText;
                const letterId = this.id; 

                const currentInput = input3.value; 
                const letterCountInInput = currentInput.split('').filter(char => char === letterValue).length;

                if (!tileStates[letterId]) {
                    input3.value += letterValue;  
                    tileStates[letterId] = true;  

                    this.style.pointerEvents = 'none';
                    this.style.backgroundColor = '#d3d3d3'; 
                } else if (tileStates[letterId] && letterCountInInput > 0) {
                    const lastIndex = currentInput.lastIndexOf(letterValue);
                    if (lastIndex !== -1) {
                        input3.value = currentInput.slice(0, lastIndex) + currentInput.slice(lastIndex + 1); 
                        tileStates[letterId] = false;  

                        this.style.pointerEvents = 'auto';
                        this.style.backgroundColor = '';  
                    }
                }
            });
        });

        submitAct1.addEventListener('click', () => {
            const imageAct1 = document.getElementById('imageAct1');
            const imageAct2 = document.getElementById('imageAct2');
            const imageAct3 = document.getElementById('imageAct3');
            const imageAct4 = document.getElementById('imageAct4');
            const imageAct5 = document.getElementById('imageAct5');

            const dropZone1 = document.getElementById('dropZone1');
            const dropZone2 = document.getElementById('dropZone2');
            const dropZone3 = document.getElementById('dropZone3');

            const correctDropZones = [dropZone1, dropZone2, dropZone3];
            const wrongImages = [imageAct3, imageAct5];
            const placedImages = correctDropZones.filter(dropZone => dropZone.children.length > 0);

            if (placedImages.length === 0) {
                const noAnswerModal = document.getElementById('noAnswerModal');
                noAnswerModal.querySelector('p').textContent = "No images placed. Please try again.";
                noAnswerModal.style.display = 'block';
                setTimeout(() => {
                    noAnswerModal.style.display = 'none';
                }, 3000);
                return;
            }


            if (placedImages.length < correctDropZones.length) {
                const noAnswerModal = document.getElementById('noAnswerModal');
                noAnswerModal.querySelector('p').textContent = "Make sure to place an image in every drop box.";
                noAnswerModal.style.display = 'block';
                setTimeout(() => {
                    noAnswerModal.style.display = 'none';
                }, 3000);
                return;
            }

            const allCorrectImagesPlaced = [imageAct1, imageAct2, imageAct4].every(image =>
                correctDropZones.includes(image.parentElement)
            );

            const noWrongImagesPlaced = !wrongImages.some(image =>
                correctDropZones.includes(image.parentElement)
            );

            const isCorrect = allCorrectImagesPlaced && noWrongImagesPlaced;

            if (isCorrect) {
                correctSound.play();
                correctAnswerModal.style.display = 'block';
                setTimeout(() => {
                    correctAnswerModal.style.display = 'none';
                    activityContainer1.style.display = 'none';
                    activityContainer2.style.display = 'block'; 
                }, 3000); 
            } else {
                incorrectSound.play();
                incorrectSound.addEventListener('ended', () => {
                    buzzer.play();
                });
                wrongAnswerModal.style.display = 'block';
                setTimeout(() => {
                    wrongAnswerModal.style.display = 'none';
                }, 3000); 
            }
        });

        submitAct2.addEventListener('click', function() {
            const answer = input2.value.trim().toLowerCase();
            const correctAnswer = "distance";
            if (!answer) {
                noAnswerModal.querySelector('p').textContent = "Please provide an answer to proceed.";
                noAnswerModal.style.display = 'block';
                setTimeout(() => {
                    noAnswerModal.style.display = 'none';
                }, 3000); 
                return;
            }
            if (answer === correctAnswer) {
                correctSound.play();
                const correctAnswerModal = document.getElementById('correctAnswerModal');
                correctAnswerModal.style.display = 'block';
                setTimeout(() => {
                    correctAnswerModal.style.display = 'none';
                    activityContainer2.style.display = 'none';
                    activityContainer3.style.display = 'block';
                }, 3000);
            } else {
                const wrongAnswerModal = document.getElementById('wrongAnswerModal');
                incorrectSound.play();
                incorrectSound.addEventListener('ended', () => {
                    buzzer.play();
                });
                wrongAnswerModal.style.display = 'block';
                setTimeout(() => {
                    wrongAnswerModal.style.display = 'none';
                    noAnswerModal.querySelector('p').textContent = "Hint: 8 letters";
                    noAnswerModal.style.display = 'block';

                    setTimeout(() => {
                        noAnswerModal.style.display = 'none';
                    }, 2000);
                }, 3000); 
            }
        });

        submitAct3.addEventListener('click', function() {
            const answer = input3.value.trim();
            const correctAnswer = "SPEED";
            if (!answer) {
                noAnswerModal.querySelector('p').textContent = "Please provide an answer to proceed.";
                noAnswerModal.style.display = 'block';
                setTimeout(() => {
                    noAnswerModal.style.display = 'none';
                }, 3000); 
                return;
            }
            if (answer === correctAnswer) {
                correctSound.play();
                const correctAnswerModal = document.getElementById('correctAnswerModal');
                correctAnswerModal.style.display = 'block';
                setTimeout(() => {
                    activityContainer3.style.display = 'none'; 
                    modal.style.display = 'none'; 
                    modalBackground.style.display = 'none'; 
                    letsTry.style.display = 'block'; 
                }, 3000);
            } else {
                const wrongAnswerModal = document.getElementById('wrongAnswerModal');
                incorrectSound.play();
                incorrectSound.addEventListener('ended', () => {
                    buzzer.play();
                });
                wrongAnswerModal.style.display = 'block';
                setTimeout(() => {
                    wrongAnswerModal.style.display = 'none';
                    noAnswerModal.querySelector('p').textContent = "Hint: 5 letters";
                    noAnswerModal.style.display = 'block';

                    setTimeout(() => {
                        noAnswerModal.style.display = 'none';
                    }, 2000);
                }, 3000);
            }
        });

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
                sendTimeData(studentId, 'Motion', currentSection, 'WhatisMotion', sectionTimeSpent[currentSection]);
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

        function stopAudio13() {
            audio13.pause();
            audio13.currentTime = 0; 
        }

        function playAudio13() {
            audio13.play().catch(function (error) {
                console.log("Autoplay prevented by browser, waiting for user interaction.");
            });
        }
        function stopAudio14() {
            audio14.pause();
            audio14.currentTime = 0; 
        }

        function playAudio14() {
            audio14.play().catch(function (error) {
                console.log("Autoplay prevented by browser, waiting for user interaction.");
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
            if (currentSection === 16 || currentSection === 17 || currentSection === 18) {
                einsteinImage.style.display = 'none';
                examplesButton.style.marginLeft = '100%';    
            } else {
                einsteinImage.style.display = 'block';
                examplesButton.style.marginLeft = '0%'; 
            }

            if (currentSection === 16 || currentSection === 18) {
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

            if (currentSection === 15) {
                modal.style.display = 'block';
                modalBackground.style.display = 'block';
                activityContainer1.style.display = 'block'; 
                examplesButton.style.display = 'none';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'flex';
                goBackButton.style.display = 'flex';
                proceedToQuizButton.style.display = 'flex';
                leftButton.style.display = 'none';
                rightButton.style.display = 'none';
            } else if (currentSection === 16) {
                examplesButton.style.display = 'none';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'flex';
                goBackButton.style.display = 'flex';
                proceedToQuizButton.style.display = 'flex';
                leftButton.style.display = 'none';
                rightButton.style.display = 'none';
            } 

            if (sections[index] === motionFirst) {
            playAudio(); 
        } else {
            stopAudio();
        }
        if (sections[index] === objectives) {
            playAudio13(); 
        } else {
            stopAudio13();
        }
        if (sections[index] === letsTry) {
            playAudio14(); 
        } else {
            stopAudio14();
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
        if (sections[index] === motionQuiz) {
            checkQuizTaken();
            loadQuestion();
        }
        if (sections[index] === motionCompleted) {
            checkSectionComplete();
        } 
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length + 1) {
                stopSectionTimer();
                if (sections[currentSection] === motionExample3) {
                    currentSection = sections.indexOf(motionActivity);
                    showSection(currentSection); 

                    // Show the modal and activity container
                    modal.style.display = 'block';
                    modalBackground.style.display = 'block';
                    activityContainer1.style.display = 'block';
                    examplesButton.style.display = 'none';  
                    einsteinImage.style.display = 'none';  
                    letsTryButton.style.display = 'flex'; 
                    goBackButton.style.display = 'flex';    
                    proceedToQuizButton.style.display = 'flex'; 
                    leftButton.style.display = 'none';     
                    rightButton.style.display = 'none';   
                } else {
                    currentSection++; 
                    showSection(currentSection);
                }
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'motionLesson.php'; 
            } else if (currentSection === 17) {
                letsTry.style.display = 'block'; 
                currentSection = 16;
                showSection(currentSection);
            } else if (currentSection > 0) {
                stopSectionTimer();
                currentSection--;
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 14; 
            letsTry.style.display = 'none'; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 17; 
            letsTry.style.display = 'none'; 
            showSection(currentSection);
        });

        hideAllSections();
        showSection(0); 

        // Quiz Data
        const quizData = <?php echo json_encode($postAssessmentData); ?>;


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

    // Call the function to read the question and choices aloud
    readQuestionAndChoices(currentQuestion);
}

// Function to read the question and choices aloud
function readQuestionAndChoices(currentQuestion) {
    // Create a SpeechSynthesisUtterance instance
    const utterance = new SpeechSynthesisUtterance();

    // Set up the speech parameters (male voice, rate, pitch, etc.)
    utterance.voice = getMaleVoice();
    utterance.pitch = 1; // Set pitch to a default value (you can adjust this)
    utterance.rate = 1;  // Speed of the voice (1 is normal speed)

    // Read the question
    utterance.text = currentQuestion.question;
    window.speechSynthesis.speak(utterance);

    // Wait for the question to finish before reading choices
    utterance.onend = function () {
        // After the question is read, read the choices
        const choicesText = currentQuestion.choices.join(', '); // Join choices as a comma-separated string
        const choicesUtterance = new SpeechSynthesisUtterance(choicesText);
        choicesUtterance.voice = utterance.voice; // Use the same voice as the question
        window.speechSynthesis.speak(choicesUtterance);
    };
}

// Function to get a male voice (this may vary by browser and OS)
function getMaleVoice() {
    const voices = window.speechSynthesis.getVoices();
    // Loop through voices and find a male voice (based on 'male' in the name)
    for (let i = 0; i < voices.length; i++) {
        if (voices[i].name.toLowerCase().includes('male')) {
            return voices[i];
        }
    }
    // If no male voice found, return the first available voice
    return voices[0];
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

                if (selectedAnswer === correctAnswer) {
                    correctAnswersCount++;
                    correctSound.play();
                } else{
                    incorrectSound.play();
                    incorrectSound.addEventListener('ended', () => {
                        buzzer.play();
                    });
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
            const feedbackDisplay = document.querySelector('.Feedback'); // Select the Feedback element
            quizContainer.style.display = 'none'; // Hide the quiz container

            document.getElementById('displayTotalQuestions').textContent = totalQuestions;
            document.getElementById('displayCorrectAnswers').textContent = correctAnswersCount;

            // Feedback based on correct answers
        if (correctAnswersCount === 0) {
            feedbackDisplay.textContent = "You didn't score anything! Try again!";
        } else if (correctAnswersCount > 0 && correctAnswersCount < 5) {
            feedbackDisplay.textContent = "Nice Try!";
        } else if (correctAnswersCount >= 5 && correctAnswersCount < 10) {
            feedbackDisplay.textContent = "Good Job!";
        } else if (correctAnswersCount === 10) {
            feedbackDisplay.textContent = "Perfect!";
        }

            quizResult.style.display = 'block';
            totalQuestionsDisplay.textContent = totalQuestions;
            correctAnswersDisplay.textContent = correctAnswersCount;
            wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
            percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
            // Send the score to the server (optional)
            sendScoreToServer(correctAnswersCount);
        }
// Pre-Assessment Data
const preAssessmentData = <?php echo json_encode($preAssessmentData); ?>;

let preCurrentQuestionIndex = 0;
let preCorrectAnswersCount = 0;
const preTotalQuestions = preAssessmentData.length;
let preSelectedAnswer = null;
const preChoices = document.querySelectorAll('.preAssessment-choice-btn');
const preNextButton = document.getElementById('preAssessmentNextButton');
const preExtraInfoBox = document.getElementById('preAssessmentExtraInfoBox');
const preQuestionNumber = document.getElementById('preAssessmentQuestionNumber');
const preQuestionText = document.getElementById('preAssessmentQuestionText');
const preAssessmentImage = document.getElementById('preAssessmentImage');
const preExtraInfoText = document.getElementById('preAssessmentExtraInfoText');
const preAssessmentResult = document.getElementById('preAssessmentResult');
const preTotalQuestionsDisplay = document.getElementById('preAssessmentTotal');
const preCorrectAnswersDisplay = document.getElementById('preAssessmentCorrectAnswers');
const preWrongAnswersDisplay = document.getElementById('preAssessmentWrongAnswers');
const prePercentageDisplay = document.getElementById('preAssessmentPercent');

// Function to load a Pre-Assessment question
function loadPreAssessmentQuestion() {
    const currentQuestion = preAssessmentData[preCurrentQuestionIndex];

    preQuestionNumber.textContent = `Question ${preCurrentQuestionIndex + 1}`;
    preQuestionText.textContent = currentQuestion.question;
    preAssessmentImage.src = currentQuestion.quiz_image;

    preChoices.forEach((button, index) => {
        button.textContent = currentQuestion.choices[index];
        button.classList.remove('correct', 'wrong');
        button.style.display = 'inline-block';
        button.style.color = 'black';
    });

    preExtraInfoBox.style.display = 'none';
    preNextButton.disabled = true;
    preSelectedAnswer = null;
}

preChoices.forEach(button => {
    button.addEventListener('click', function () {
        if (preSelectedAnswer) return;

        preSelectedAnswer = button.textContent;
        const correctAnswer = preAssessmentData[preCurrentQuestionIndex].correct_answer;

        preChoices.forEach(btn => {
            if (btn.textContent !== correctAnswer && btn.textContent !== preSelectedAnswer) {
                btn.style.display = 'none';
            } else {
                btn.classList.add(btn.textContent === correctAnswer ? 'correct' : 'wrong');
                btn.style.color = 'white';
            }
        });

        preExtraInfoText.textContent = preAssessmentData[preCurrentQuestionIndex].additional_info;
        preExtraInfoBox.style.display = 'block';
        preNextButton.disabled = false;

        if (preSelectedAnswer === correctAnswer) {
            preCorrectAnswersCount++;
            correctSound.play();
        } else {
            incorrectSound.play();
            incorrectSound.addEventListener('ended', () => {
                buzzer.play();
            });
        }
    });
});

// Function to handle next Pre-Assessment question
preNextButton.addEventListener('click', function () {
    if (!preSelectedAnswer) {
        alert('Please select an answer!');
        return;
    }

    preCurrentQuestionIndex++;

    if (preCurrentQuestionIndex >= preAssessmentData.length) {
        showPreAssessmentResults();
    } else {
        loadPreAssessmentQuestion();
    }
});

function showPreAssessmentResults() {
    const preAssessmentContainer = document.getElementById('preAssessmentContainer');
    preAssessmentContainer.style.display = 'none'; // Hide the Pre-Assessment container

    const displayPreTotalQuestions = document.getElementById('preAssessmentDisplayTotalQuestions');
    const displayPreCorrectAnswers = document.getElementById('preAssessmentDisplayCorrectAnswers');
    const preAssessmentResult = document.getElementById('preAssessmentResult');
    const preFeedbackDisplay = document.querySelector('.Feedback'); // Select the Feedback element

    console.log(displayPreTotalQuestions, displayPreCorrectAnswers, preAssessmentResult);
    if (displayPreTotalQuestions && displayPreCorrectAnswers && preAssessmentResult && preFeedbackDisplay) {
        displayPreTotalQuestions.textContent = preTotalQuestions;
        displayPreCorrectAnswers.textContent = preCorrectAnswersCount;
        preAssessmentResult.style.display = 'block';

        // Feedback based on correct answers
        if (preCorrectAnswersCount === 0) {
            preFeedbackDisplay.textContent = "You didn't score anything! Try again!";
        } else if (preCorrectAnswersCount > 0 && preCorrectAnswersCount < 5) {
            preFeedbackDisplay.textContent = "Nice Try!";
        } else if (preCorrectAnswersCount >= 5 && preCorrectAnswersCount < 10) {
            preFeedbackDisplay.textContent = "Good Job!";
        } else if (preCorrectAnswersCount === 10) {
            preFeedbackDisplay.textContent = "Perfect!";
        }

        preTotalQuestionsDisplay.textContent = preTotalQuestions;
        preCorrectAnswersDisplay.textContent = preCorrectAnswersCount;
        preAssessmentWrongAnswers.textContent = preTotalQuestions - preCorrectAnswersCount;
        prePercentageDisplay.textContent = ((preCorrectAnswersCount / preTotalQuestions) * 100).toFixed(2) + '%';
    } else {
        console.error("One or more elements not found in the DOM.");
    }
}

// Load the first Pre-Assessment question
loadPreAssessmentQuestion();
        // Function to send score to server
        function sendScoreToServer(score) {
            const studentId = "<?php echo $id; ?>"; // Get the student ID from the PHP session
            const quizId = 6; 
            const lesson = "Motion"; 
            const type = "post";

            fetch('../save_quiz_score.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ student_id: studentId, quiz_id: quizId, lesson: lesson, type: type, score: score }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'error') {
                    alert(data.message); // Show alert if there's an error
                } else {
                    console.log('Score saved successfully:', data.message);
                }
            })
            .catch(error => {
                console.error('Error saving score:', error);
                alert('There was a problem saving your score. Please try again later.');
            });
        }
       
    });
</script>