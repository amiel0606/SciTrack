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
?>


<style>
    .matter-content {
        display: none;
    }
    .matter-content-active {
        display: block;
    }
    #einstein-image{
        width: 100%;
        max-width: 31%;
        margin-right: -25.7%;
        margin-left: -10%;
        margin-bottom: -6.8%;
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
    #leftButton, #rightButton {
        margin-bottom: -1%;
    }
    #letsTryButton {
        right: -10rem;
        z-index: 10;
    }
    .button-text {
        font-size: 0.75em;
    }
    .matter-container {
        width: 100%;
        max-width: 80%; 
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        text-align: center;
    }
    #matterVideo video {
        z-index: 10; 
        position: relative; 
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
    .stateImage{
        width: 100%;
        max-width: 400px;
        margin-top: -4%;
    }
    #states {
        margin-top: -2%;
    }      
    .sExample{
        display: flex;
        justify-content: center; 
        align-items: center;
        margin-top: 2rem;
    }
    .sExample .image-item{
        text-align: center;
        margin: 0;
    }
    .sExample .image-item:first-child{
        margin-right: 5rem;
    }
    .sExample .image-item:last-child{
        margin-left: 5rem;
    }
    .sExample img {
        min-width: 300px;
        min-height: 350px;
        width: 100%;
        max-width: 500px;
        margin-top: 2rem;
    }
    .solid-image {
        width: 100%;
        max-width: 90%;
        margin-left: 4rem;
    }
    .solid-image2 {
        width: 100%;
        max-width: 90%;
        margin-right: 9rem;
        margin-left: 9rem;
    }
    #solid-text {
        margin-left: 1rem;
        margin-top: 3%;
    }
    #solid-text p{
        line-height: 1.5;
    }
    .tight-spacing {
        margin-right: -0.5em; 
    }
    .placeholder {
        width: 100%;
        max-width: 90%;
        height: 100%;
        max-height: 70%;
        background-color: #D9D9D9;
    }

    .image-container {
        position: relative;
    }

    .image-container img {
        width: 100%;
        height: auto;
        z-index: 1;
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
    
    #header{
        font-size: 4rem;
    }
    #header1{
        font-size: 4rem;
        margin-top: -2%;
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
        margin-top: -4%;
    }
    #header5{
        font-size: 3rem;
        margin-bottom: 2.5rem;
    }
    #solidGif{
        margin-right: 7%;
    }
    #sChar{
        margin-left: 15%;
    }
    #char1{
        margin-left: -25%;
    }
    #compButton{
        margin-left: 15%;
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
        max-width: 70%; 
        height: auto;

        display: flex;
        justify-content: center;
        align-items: center;
    }
    .placeholderImage {
        background-color: #d3d3d3; 
        width: 90%; 
        height: auto;
        max-height: 300px;

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
    #quizContainer{
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
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                    <img src="../../image/board.png" alt="Board Image" style="width: 140%; height: 105%; max-width: 1800px; margin-left: -17%">
                    </figure>

                    <!-- Matter States -->
                    <div class="x-content" id="matterStates">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mb-6 p-6">
                            <h1 class="title has-text-white mt-5 secondary-font" id="header">SOLID</h1>

                            <!-- Solid Image -->
                            <div class="stateImage">
                                <figure class="image">
                                    <img src="../../image/msolidgif.gif" alt="Solid">
                                </figure>
                            </div>

                            <p class="main-font column is-four-fifths title is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-centered has-text-white mb-6" id="states">
                                <span style="color: yellow;">Solid</span> is one of the three fundamental states of matter along with liquid, gas.
                            </p>
                        </div>                       
                    </div>

                    <!-- Matter Solid -->
                    <div class="matter-content" id="matterSolid">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header1">SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Image Column -->
                                <div class="column is-5" id="solidGif">
                                    <figure class="image solid-image">
                                        <img src="../../image/msolidgif.gif" alt="Solid">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-5">
                                    <p class="subtitle main-font is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white has-text-justified">
                                        • Has particles that are packed closely together and usually arranged in regular pattern.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Characteristics -->
                    <div class="matter-content" id="matterChar">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title shas-text-white secondary-font" id="header2">CHARACTERISTICS OF SOLID</h1>
                            <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mt-3">Solid are known to have:</p>

                            <div class="image-container" id="sChar">
                                <!-- Solid Image -->
                                <div class="image-item" id="char1">
                                    <figure class="image">
                                        <img src="../../image/ssChar1.gif" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Fixed shape</p>
                                </div>

                                <!-- Solid Image -->
                                <div class="image-item" id="char2">
                                    <figure class="image">
                                        <img src="../../image/ssChar2.gif" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Fixed volume</p>
                                </div>

                                <!-- Solid Image -->
                                <div class="image-item" id="char3">
                                    <figure class="image">
                                        <img src="../../image/ssChar3.gif" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">High density</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Video -->
                    <div class="matter-content" id="matterVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">SOLID</h1>

                            <!-- Video for Solid.mp4 -->
                            <div class="box">
                                <video id="solidVideo" width="750" height="520" controls>
                                    <source src="../../videos/Solid.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: It's AumSum Time Youtube
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Solid2 -->
                    <div class="matter-content" id="matterSolid2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header3">SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="solid-text">
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-justified">
                                        • Has Definite shape and volume
                                    </p>
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-justified tight-spacing">
                                        • When a solid is heated, its molecules gain energy and vibrate fast.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image solid-image2">
                                        <img src="../../image/msolid2.png" alt="Solid">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples -->
                    <div class="matter-content" id="matterExamples">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">
                                EXAMPLES OF SOLID
                            </h1>

                            <div class="sExample">
                                <!-- First Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/msolid3.png" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Books</p>
                                </div>

                                <!-- Second Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/msolid4.png" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Eraser</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples 2 -->
                    <div class="matter-content" id="matterExamples2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">
                                EXAMPLES OF SOLID
                            </h1>

                            <div class="sExample">
                                <!-- Third Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/msolid5.png" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Shirt</p>
                                </div>

                                <!-- Fourth Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/msolid6.png" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Bag</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter LetsTry -->
                    <div class="matter-content" id="matterLetsTry">
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

                    <!-- Matter Quiz -->
                    <div class="matter-content" id="matterQuiz">
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

                    <!-- Matter Solid Completed -->
                    <div class="matter-content" id="matterCompleted">
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
                                    <a href="matterLiquid.php">
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
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header5">
                                            YOU DID GREAT!
                                        </p>
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header5">
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
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon mr-2"></i> <span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2" id="rightButton" style="z-index: 2;">
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
<audio id="matterAudio" src="../../sounds/solid1.mp3"></audio>
<audio id="matterAudio2" src="../../sounds/solid2.mp3"></audio>
<audio id="matterAudio3" src="../../sounds/solid3.mp3"></audio>
<audio id="matterAudio4" src="../../sounds/solid4.mp3"></audio>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const matterStates = document.getElementById('matterStates');
        const matterSolid = document.getElementById('matterSolid');
        const matterChar = document.getElementById('matterChar');
        const matterVideo = document.getElementById('matterVideo');
        const matterSolid2 = document.getElementById('matterSolid2');
        const matterExamples = document.getElementById('matterExamples');
        const matterExamples2 = document.getElementById('matterExamples2');
        const matterLetsTry = document.getElementById('matterLetsTry');
        const matterQuiz = document.getElementById('matterQuiz');
        const matterCompleted = document.getElementById('matterCompleted');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        const audio = document.getElementById('matterAudio');
        const audio2 = document.getElementById('matterAudio2');
        const audio3 = document.getElementById('matterAudio3');
        const audio4 = document.getElementById('matterAudio4');
        const solidVideo = document.getElementById('solidVideo');
        let timeSpent = 150; 
        let timerInterval;
        let currentSection = 0;
        const sections = [matterStates, matterSolid, matterChar, matterVideo, matterSolid2, matterExamples, matterExamples2, matterLetsTry, matterQuiz, matterCompleted];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('matter-content-active');
                section.classList.add('matter-content');
            });
        }

    function startTimer() {
    timerInterval = setInterval(function () {
        timeSpent += 1; 
        console.log("Time spent: " + timeSpent + " seconds"); 
    }, 1000); 
}


    function stopTimer() {
        clearInterval(timerInterval);
    }

    startTimer();

        function stopVideo() {
        solidVideo.pause(); 
        solidVideo.currentTime = 0; 
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

    function showSection(index) {
        hideAllSections();
        sections[index].classList.remove('matter-content');
        sections[index].classList.add('matter-content-active');

        if (sections[index] === matterStates) {
            playAudio(); 
        } else {
            stopAudio();
        }
        if (sections[index] === matterSolid) {
            playAudio2(); 
        } else {
            stopAudio2();
        }
        if (sections[index] === matterChar) {
            playAudio3(); 
        } else {
            stopAudio3();
        }

        if (sections[index] === matterSolid2) {
            playAudio4(); 
        } else {
            stopAudio4();
        }
        if (sections[index] === matterVideo) {
                solidVideo.play();
            } else {
                stopVideo(); 
            }


        if (index >= 0 && index <= 6) { 
            examplesButton.style.display = 'flex';
            einsteinImage.style.display = 'block';
            letsTryButton.style.display = 'none';
            goBackButton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
        } else if (sections[index] === matterLetsTry) {
            examplesButton.style.display = 'none';
            einsteinImage.style.display = 'none';
            letsTryButton.style.display = 'flex';
            goBackButton.style.display = 'flex';
            proceedToQuizButton.style.display = 'flex';
            leftButton.style.display = 'none';
            rightButton.style.display = 'none';
        } else if (sections[index] === matterQuiz) {
            examplesButton.style.display = 'flex';
            einsteinImage.style.display = 'none';
            letsTryButton.style.display = 'none';
            goBackButton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';

            examplesButton.style.marginLeft = '100%';  
        } else if (sections[index] === matterCompleted) {
            examplesButton.style.display = 'none';
            einsteinImage.style.display = 'none';
            letsTryButton.style.display = 'none';
            goBackButton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
            leftButton.style.display = 'none';
            rightButton.style.display = 'none';
        }
        if (index === 8) { 
            if (timeSpent < 180) { 
                proceedToQuizButton.disabled = true; 
                alert("Please spend at least 3 minutes reading the lesson before taking the quiz.");
            } else {
                proceedToQuizButton.disabled = false; 
            }
        }
    }


        rightButton.addEventListener('click', function () {
            if (currentSection === 6) {
                currentSection = 7;
                showSection(currentSection);
            } else if (currentSection < sections.length - 1) {
                currentSection++; 
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 6; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
        if (timeSpent < 180) {
            alert("Please spend at least 3 minutes reading the lesson before taking the quiz.");
            return; 
        }
        currentSection = 8; 
        showSection(currentSection);
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'matterLesson.php?show=matterTopic'; 
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);
            }
        });

        hideAllSections();
        showSection(0); 

    });

    // Quiz Data
    const quizData = [
    {
        question: "What is a characteristic of a solid?",
        choices: ["Has a definite shape and volume", "Takes the shape of its container", "Has no definite volume", "Flows easily"],
        quizImage: "../quizImage/solidQuizImage1.png",
        correctAnswer: "Has a definite shape and volume",
        additionalInfo: "Solids have a fixed shape and volume because their particles are tightly packed together."
    },
    {
        question: "Which of the following is an example of a solid?",
        choices: ["Water", "Air", "Ice", "Steam"],
        quizImage: "../quizImage/solidQuizImage2.png",
        correctAnswer: "Ice",
        additionalInfo: "Ice is the solid form of water, with a fixed shape and volume."
    },
        {
        question: "What happens to the particles in most solids when they are heated?",
        choices: ["They move faster", "They move slower", "They stop moving", "They stay the same"],
        quizImage: "../quizImage/solidQuizImage3.png",
        correctAnswer: "They move faster",
        additionalInfo: "When solids are heated, the particles gain energy and move faster, which can cause the solid to melt if enough heat is applied."
    }
    ,
    {
        question: "Which of these objects is NOT a solid?",
        choices: ["Rock", "Book", "Water", "Chair"],
        quizImage: "../quizImage/solidQuizImage4.png",
        correctAnswer: "Water",
        additionalInfo: "Water is a liquid, not a solid. Solids like rocks and books have a definite shape."
    },
    {
        question: "Why do solids have a fixed shape?",
        choices: ["Because their particles are tightly packed", "Because their particles move freely", "Because they have no volume", "Because they are soft"],
        quizImage: "../quizImage/solidQuizImage5.png",
        correctAnswer: "Because their particles are tightly packed",
        additionalInfo: "The particles in solids are closely packed and do not move freely, which gives solids a fixed shape."
    },
    {
        question: "Which of the following is a solid material used in building houses?",
        choices: ["Wood", "Water", "Air", "Milk"],
        quizImage: "../quizImage/solidQuizImage1.png",
        correctAnswer: "Wood",
        additionalInfo: "Wood is a solid material used in construction because it is strong and durable."
    },
    {
        question: "What happens to a solid when you break it into smaller pieces?",
        choices: ["It becomes a liquid", "It stays a solid", "It becomes a gas", "It disappears"],
        quizImage: "../quizImage/solidQuizImage7.png",
        correctAnswer: "It stays a solid",
        additionalInfo: "When you break a solid into smaller pieces, it still remains a solid. The pieces just get smaller!"
    }
    ,
    {
    question: "What is another example of a solid?",
    choices: ["Apple", "Juice", "Smoke", "Air"],
    quizImage: "../quizImage/solidQuizImage8.png",
    correctAnswer: "Apple",
    additionalInfo: "Apple is a solid, which has a definite shape and volume."
    }
    ,
    {
        question: "What is the state of matter of a pencil?",
        choices: ["Solid", "Liquid", "Gas", "Plasma"],
        quizImage: "../quizImage/solidQuizImage9.png",
        correctAnswer: "Solid",
        additionalInfo: "A pencil is a solid because it has a fixed shape and volume."
    },
    {
        question: "Which of these properties do all solids share?",
        choices: ["They flow easily", "They have a fixed shape", "They can be poured", "They expand to fill a container"],
        quizImage: "../quizImage/solidQuizImage10.png",
        correctAnswer: "They have a fixed shape",
        additionalInfo: "Solids maintain their shape, unlike liquids and gases which take the shape of their container."
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

    function showResults() {
    const quizContainer = document.getElementById('quizContainer'); // Ensure this ID matches your HTML
    quizContainer.style.display = 'none'; // Hide the quiz container

    quizResult.style.display = 'block';
    totalQuestionsDisplay.textContent = totalQuestions;
    correctAnswersDisplay.textContent = correctAnswersCount;
    wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
    percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
    totalScoreDisplay.textContent = correctAnswersCount + ' / ' + totalQuestions;

    // Send the score to the server
    sendScoreToServer(correctAnswersCount);
}

// Function to send score to server
function sendScoreToServer(score) {
    const studentId = "<?php echo $id; ?>"; // Get the student ID from the PHP session
    const quizId = 1; 
    const lesson = "Matter"; 

    fetch('../save_quiz_score.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ student_id: studentId, quiz_id: quizId, lesson: lesson, score: score }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'error') {
            alert(data.message); // Show alert if there's an error
        } else {
            console.log('Score saved successfully:', data.message);
            // You can redirect or provide feedback to the user here
        }
    })
    .catch(error => {
        console.error('Error saving score:', error);
        alert('There was a problem saving your score. Please try again later.');
    });
}

    // Load the first question
    loadQuestion();
    
</script>

