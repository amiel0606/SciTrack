<?php
    include_once('./includes/board.php');
?>

<style>
    .motion-content {
        display: none;
    }
    .motion-content-active {
        display: block;
    }
    #einstein-image{
        width: 100%;
        max-width: 31%;
        margin-right: -25.7%;
        margin-left: -10%;
        margin-bottom: -6.8%;
    }
    .es-image{
        width: 50%;
        max-width: 80%;
        margin-top: -5%; 
    }
    .einstein {
        width: 100%;
        height: auto;
        transform: scaleX(-1);
    }
    .c-image img{
        width: 130%;
        max-width: 130%;
        height: auto;
        margin-left: -15%;
        transform: scaleX(-1);
    }
    .letstry img{
        width: 130%;
        max-width: 130%;
        height: auto;
        margin-left: 5%;
    }
    .image-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-top: 2rem;
    }
    .image-container .image-item {
        text-align: center;
        margin: 0 1rem;
    }
    .image-container img {
        width: 100%;
        max-width: 350px;
    }
    .eco-image {
        width: 130%;
        max-width: 130%;
        margin-left: 5rem;
        margin-top: 2%;
    }
    #eco-text {
        margin-left: 1rem;
        margin-top: 4%;
    }
    .placeholder {
        width: 100%;
        max-width: 90%;
        height: 100%;
        max-height: 70%;
        background-color: #D9D9D9;
    } 
    .medal-image img{
        max-width: 40%;
        height: auto;
    }
    .back-button {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
    }
    .back-button .icon i {
        color: #000;
    }
    .back-button:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }
    .button-text {
        font-size: 0.75em;
    }
    .navbar{
        background-color: #4A90E2 !important;
    }
    .navbar-item:hover{
        background-color: #266bbb;
        color: white;
    }

    
    #header{
        font-size: 4rem;
        margin-top: 3%;
    }
    #header1{
        font-size: 4rem;
        margin-top: -7%;
        margin-bottom: 10%;
    }
    #header2{
        font-size: 4rem;
    }
    #header3{
        font-size: 4rem;
        margin-top: -2%;
    }
    #header4{
        font-size: 4rem;
        margin-top: -2%;
    }
    #header5{
        font-size: 4rem;
        margin-bottom: 2.5rem;
        margin-top: -12%;
    }
    #header6{
        font-size: 3rem;
        margin-bottom: 2.5rem;
    }
    #headerEx{
        margin-top: 3%;
        font-size: 4rem;
    }
    .description1{
        font-size: 2.4rem;
    }
    .description2{
        font-size: 2.4rem;
        margin-left: 5%;
    }
    #sChar{
        margin-left: 5%;
    }
    #sChar img{
        width: 120%;
        min-width: 100%;
        max-width: 450px;
    }
    #eChar {
        min-width: 100%;
        margin-left: -5%;
    }
    #eChar img {
        width: 130%;
        min-width: 100%;
        max-width: 500px;
    }
    #bio1{
        margin-left: -10%;
    }
    #bio2{
        margin-left: 5%;
    }
    #bio3{
        margin-left: 5%;
    }
    #bio1 p, #bio2 p, #bio3 p{
        margin-left: 15%;
    }
    #eco-text p{
        line-height: 1.5;
    }
    .tight-spacing {
        margin-right: -0.2em;
    }
    .p-spacing {
        margin-right: -1.5em;
    }
    #char1 p{
        margin-left: 25%;
    }
    #char2 p{
        margin-left: 25%;
    }
    #char3 p{
        margin-left: 25%;
    }
    .motion-image{
        width: 80%;
        max-width: 80%;
        margin-top: -5%; 
    }
    .motion-image2{
        width: 50%;
        max-width: 80%;
        margin-top: -5%; 
    }
    #form-text{
        margin-top: 0%;
    }
    #formula1{
        margin-top: 5%;
    }
    #formula2{
        margin-bottom: 15%;
        margin-left: -5%;
    }
    #formula3{
        margin-bottom: 15%;
        margin-left: 5%;
    }
    #formula4{
        margin-bottom: 15%;
    }
    #question{
        margin-top: -5%;
    }
    #ex-text {
        margin-left: 1rem;
        margin-top: -12%;
    }
    #ex-text1 {
        margin-left: 1rem;
        margin-top: 2%;
    }
    #ex-text p, #ex-text1 p{
        line-height: 1.5;
    }
    #exImage{
        margin-top: -25%;
    }
    
    /* for quiz layout */
    .choice-btn {
        background-color: #d3d3d3;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    /* Left-to-right fill effect */
    .choice-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        background-color: transparent;
        z-index: -1;
        transition: width 0.6s ease, background-color 0.6s ease;
    }

    /* Correct answer - green fill */
    .choice-btn.correct::before {
        background-color: #48c774;
        width: 100%;
    }

    /* Wrong answer - red fill */
    .choice-btn.wrong::before {
        background-color: #f14668; 
        width: 100%;
    }

    .choice-btn {
        z-index: 1;
    }

    .extra-info-box {
        width: 90%; 
        max-width: 520px; 
        padding: 10px;
        margin: 1rem auto; 
        z-index: 9999; 
        background-color: white;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        display: none;
    }
    #quizImage{
        max-width: 100%; 
        height: auto;
        margin-top: 4rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .placeholderImage {
        background-color: #d3d3d3; 
        width: 90%; 
        height: auto;
        max-height: 350px;
        border-radius: 5px;
        margin-top: 4rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #quizResult{
        display: none; 
        width: 100%; 
        max-width: 90%; 
        padding: 30px; 
        z-index: 2; 
        margin-top: 30px;
    }

    @font-face {
        font-family: 'verdana';
        src: url('../../font/verdana.ttf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../../font/Haniley.otf') format('opentype');
    }
    .main-font {
        font-family: 'verdana';
    }
    .secondary-font{
        font-family: 'Haniley';
    }
    .ecosys{
        margin-top: -10%;
    }
</style>

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
                                        <p class="mb-5 main-font">• Define what is the motion</p>
                                        <p class="mb-5 main-font">• Learn how to solve speed, distance, time, and velocity</p>
                                        <p class="mb-5 main-font">• Describe the motion of an object by measuring its change position over a period of time</p>
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
                                    Measures of how fast an object moves
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
                                    The measure of rate at which an object changes its position
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Video -->
                    <div class="motion-content" id="motionVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">The Motion</h1>

                            <!-- Video for -->
                            <div class="box">
                                <video id="solidVideo" width="750" height="520" controls>
                                    <source src="../../videos/.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: ..... Youtube
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Formula -->
                    <div class="motion-content" id="motionFormula">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            
                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered" id="formula1">
                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white mb-6">
                                    To Compute for distance, multiply speed and velocity. To solve for time, divide distance with speed
                                </p>

                                <div class="columns is-centered is-multiline">
                                    <div class="column is-half has-text-centered" id="form-text">
                                        <p class="title main-font column is-full is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white" id="formula2">
                                            Formula: s (speed) = d (distance) / t (time)
                                        </p>
                                    </div>

                                    
                                    <div class="column is-half has-text-centered" id="form-text">
                                        <p class="title main-font column is-full is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white" id="formula3">
                                            Formula: s (speed) = d (distance) / s (speed)
                                        </p>
                                    </div>
                                </div>

                                <div class="column is-half has-text-centered">
                                    <p class="title main-font column is-one-fourths is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white" id="formula4">
                                        Formula: = d (distance) = s(t)
                                    </p>
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

                    <!-- Motion Example2 -->
                    <div class="motion-content" id="motionExample2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="headerEx">Examples</h1>
                            
                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered" id="formula1">
                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white mb-6" id="question">
                                    How long will take Carlo to reach the end of the room 5.8 meters away if he sprints at a speed of 1.2m/s? 
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
                            <div class="box has-text-centered p-6" id="quizResult">
                                <h2 class="subtitle secondary-font is-2">Quiz Result</h2>
                                <table class="table main-font is-bordered is-striped is-fullwidth" style="margin-top: 2rem;">
                                    <tbody>
                                        <tr>
                                            <td><strong>Total Questions</strong></td>
                                            <td id="totalQuestions">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Correct</strong></td>
                                            <td id="correctAnswers">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wrong</strong></td>
                                            <td id="wrongAnswers">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Percentage</strong></td>
                                            <td id="percentage">0%</</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Your Total Score</strong></td>
                                            <td id="totalScore">0</td>
                                        </tr>
                                    </tbody>
                                </table>
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
        const motionExample2 = document.getElementById('motionExample2');
        const motionExample3 = document.getElementById('motionExample3');
        const motionQuiz = document.getElementById('motionQuiz');
        const motionCompleted = document.getElementById('motionCompleted');
        let currentSection = 0;
        const sections = [objectives, motionFirst, motionDef, motionDistance, motionTime, motionSpeed, motionVelocity, motionVideo, motionFormula, motionExample1, motionExample2, motionExample3, motionQuiz, motionCompleted];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('motion-content-active');
                section.classList.add('motion-content');
            });
        }

        function updateEinsteinImageAndButtons() {
            if (currentSection === 12 || currentSection === 13) {
                einsteinImage.style.display = 'none';
                examplesButton.style.marginLeft = '100%';    
            } else {
                einsteinImage.style.display = 'block';
                examplesButton.style.marginLeft = '0%'; 
            }

            if (currentSection === 13) {
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
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'motionLesson.php'; 
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);
            }
        });

        hideAllSections();
        showSection(0); 
    });

    //for quiz
    // Quiz Data
    const quizData = [
        {
            question: "What is an estuary?",
            choices: ["A forest", "Where a river meets the sea", "A desert", "A mountain range"],
            quizImage: "../quizImage/esQuizImage1.png",
            correctAnswer: "Where a river meets the sea",
            additionalInfo: "An estuary is a unique place where fresh water from rivers mixes with salty sea water, creating a brackish environment perfect for many organisms."
        },
        {
            question: "What type of water is found in estuaries?",
            choices: ["Freshwater", "Saltwater", "Brackish", "Pure"],
            quizImage: "../quizImage/esQuizImage2.png",
            correctAnswer: "Brackish",
            additionalInfo: "Estuaries have brackish water, which is a mix of fresh and saltwater. It's like the 'Goldilocks' water—just right for certain wildlife!"
        },
        {
            question: "Which of these animals often relies on estuaries for nesting and breeding?",
            choices: ["Elephants", "Sharks", "Birds", "Monkeys"],
            quizImage: "../quizImage/esQuizImage3.png",
            correctAnswer: "Birds",
            additionalInfo: "Birds love estuaries for nesting and breeding because they provide lots of food and safe places to raise their young. It's like nature's daycare!"
        },
        {
            question: "What causes the murky water in estuaries?",
            choices: ["Trash", "Rain", "Sediment", "Fish parties"],
            quizImage: "../quizImage/esQuizImage4.png",
            correctAnswer: "Sediment",
            additionalInfo: "Sediments like sand and clay make the water look murky, but don’t worry! It’s perfect for small critters who love hiding in the 'underwater fog.'"
        },
        {
            question: "Which of these is an example of sediment in an estuary?",
            choices: ["Pebbles", "Diamonds", "Gold", "Ice"],
            quizImage: "../quizImage/esQuizImage5.png",
            correctAnswer: "Pebbles",
            additionalInfo: "Pebbles, along with sand and clay, are common sediments found in estuaries. They’re like nature’s tiny building blocks!"
        }
    ];

    let currentQuestionIndex = 0;
    let correctAnswersCount = 0;
    let totalQuestions = quizData.length;
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
        quizImage.src = currentQuestion.quizImage;

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
            const correctAnswer = quizData[currentQuestionIndex].correctAnswer;

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
            extraInfoText.textContent = quizData[currentQuestionIndex].additionalInfo;
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

    // Function to display results
    function showResults() {
        const quizContainer = document.getElementById('quizContainer'); // Ensure this ID matches your HTML
        quizContainer.style.display = 'none'; // Hide the quiz container

        // Show the quiz result container
        quizResult.style.display = 'block';
        totalQuestionsDisplay.textContent = totalQuestions;
        correctAnswersDisplay.textContent = correctAnswersCount;
        wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
        percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
        totalScoreDisplay.textContent = correctAnswersCount + ' / ' + totalQuestions; // Assuming each correct answer is worth 1 point
    }

    // Load the first question
    loadQuestion();
</script>