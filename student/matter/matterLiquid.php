<?php
    include_once('./includes/board.php');
?>

<style>
    .matter-content {
        display: none;
    }
    .matter-content-active {
        display: block;
    }
    #einstein-image {
        width: 100%;
        max-width: 25%;
        margin-right: -9%;
        margin-left: -8%;
        margin-bottom: -4%;
    }
    .c-image img, .einstein {
        width: 100%;
        height: auto;
        transform: scaleX(-1);
    }
    #leftButton, #rightButton {
        margin-bottom: -1%;
    }
    #letsTryButton {
        z-index: 10;
    }
    .button-text {
        font-size: 0.75em;
    }

    #matterVideo video {
        z-index: 10; 
        position: relative; 
    }
    .matter-container {
        width: 100%;
        max-width: 80%; 
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        text-align: center;
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
    #sChar img {
        width: 100%;
        max-width: 250px;
    }
    #sExample img {
        width: 100%;
        max-width: 1000px;
        margin-top: 2rem;
    }
    #char1{
        margin-left: 3rem;
    }
    .solid-image {
        width: 100%;
        max-width: 70%;
        margin-left: 9rem;
    }
    .solid-image2 {
        width: 100%;
        max-width: 80%;
        margin-left: 4rem;
        margin-top: -4rem;
    }
    #solid-text {
        margin-left: 9rem;
    }
    .stateImage{
        width: 100%;
        max-width: 400px;
        margin-top: -6%;
    }
    #states {
        margin-bottom: -4%;
    }
    .placeholder {
        width: 100%;
        max-width: 90%;
        height: 100%;
        max-height: 70%;
        background-color: #D9D9D9;
    } 
    #letsTryButton {
        z-index: 10;
    }
    .iframe-container {
        position: relative;
        z-index: 2; 
        width: 80%; 
        margin: 0 auto;
    }

    .iframe-container iframe {
        width: 100%;
        margin-top: 250px; 
        border: none;
        z-index: 2;
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
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                    </figure>

                    <!-- Matter States -->
                    <div class="x-content" id="matterStates">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mb-6 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-5 secondary-font">LIQUID</h1>

                            <!-- Liquid Image -->
                            <div class="stateImage">
                                <figure class="image">
                                    <img src="../../image/mliquidgif.gif" alt="Liquid">
                                </figure>
                            </div>

                            <p class="main-font column is-three-fifths title is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-centered has-text-white mb-6" id="states">
                                <span style="color: yellow;">Liquid</span> is one of the three principle states of matter.
                            </p>
                        </div>
                    </div>

                    <!-- Matter Liquid -->
                    <div class="matter-content" id="matterLiquid">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-5 secondary-font">LIQUID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image solid-image">
                                        <img src="../../image/mliquidgif3.gif" alt="Liquid">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-5">
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white">
                                        • Has particles that are less tightly packed as compared to solids.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Characteristics -->
                    <div class="matter-content" id="matterChar">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">CHARACTERISTICS OF LIQUID</h1>
                            <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mt-3">Liquid are known to have:</p>

                            <div class="image-container" id="sChar">
                                <!-- Liquid Image -->
                                <div class="image-item">
                                    <figure class="image" id="char1">
                                        <img src="../../image/lChar1.gif" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle column is-four-fifths is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Fixed volume but no fixed shape.</p>
                                </div>

                                <!-- Solid Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/lChar2.gif" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle column is-four-fifths is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Lesser dense than solids.</p>
                                </div>

                                <!-- Gas Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/lChar3.gif" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle column is-four-fifths is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Liquids can be compressed. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Video -->
                    <div class="matter-content" id="matterVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">LIQUID</h1>

                            <!-- Video for Solid.mp4 -->
                            <div class="box">
                                <video id="liquidVideo" width="750" height="420" controls>
                                    <source src="../../videos/Liquid.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: It's AumSum Time Youtube
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Liquid2 -->
                    <div class="matter-content" id="matterLiquid2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-5 secondary-font">LIQUID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="solid-text">
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white">
                                        • When a liquid is heated, the particles move rapidly.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image solid-image2">
                                        <img src="../../image/mliquidgif2.gif" alt="Liquid">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples -->
                    <div class="matter-content" id="matterExamples">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">
                                EXAMPLES OF LIQUID
                            </h1>

                            <div class="sExample">
                                <!-- First Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mliquid4.png" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Shampoo</p>
                                </div>

                                <!-- Second Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mliquid5.png" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Orange Juice</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples 2 -->
                    <div class="matter-content" id="matterExamples2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">
                                EXAMPLES OF LIQUID
                            </h1>

                            <div class="sExample">
                                <!-- Third Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mliquid6.png" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Hand Sanitizer</p>
                                </div>

                                <!-- Fourth Image -->
                                <div class="image-item">
                                    <figure class="image mt-6">
                                        <img src="../../image/mliquid7.png" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered" style="margin-top: 10px;">Soy Sauce</p>
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
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">
                                QUIZ
                            </h1>
                            <!-- Quiz Container -->
                            <div class="box has-text-centered" id="quizContainer" style="width: 100%; max-width: 90%; max-height: 80%; padding: 30px; z-index: 2;">
                                <div class="columns">
                                    <!-- Left Column for Image -->
                                    <div class="column is-one-third has-text-centered placeholderImage">
                                        <img src="../../image/def.png" alt="Quiz Image" id="quizImage">
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

                    <!-- Matter Liquid Completed -->
                    <div class="matter-content" id="matterCompleted">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <div class="column is-full is-flex is-justify-content-flex-end mb-6">
                                <div class="columns is-half ml-6 p-2">
                                    <a href="matterLesson.php?show=matterTopic">
                                        <button class="button back-button is-success is-size-6-desktop is-size-6-tablet" style="z-index: 5;">
                                        <p class="has-text-white">Back To Main Menu</p>
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
                                        <p class="title main-font is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-weight-semibold">
                                            YOU DID GREAT!
                                        </p>
                                        <p class="title main-font is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-weight-semibold">
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
<audio id="matterAudio" src="../../sounds/liquid1.mp3"></audio>
<audio id="matterAudio2" src="../../sounds/liquid2.mp3"></audio>
<audio id="matterAudio3" src="../../sounds/liquid3.mp3"></audio>
<audio id="matterAudio4" src="../../sounds/liquid4.mp3"></audio>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const matterStates = document.getElementById('matterStates');
        const matterLiquid = document.getElementById('matterLiquid');
        const matterChar = document.getElementById('matterChar');
        const matterVideo = document.getElementById('matterVideo');
        const matterLiquid2 = document.getElementById('matterLiquid2');
        const matterExamples = document.getElementById('matterExamples');
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
        const liquidVideo = document.getElementById('liquidVideo');
        let currentSection = 0;
        const sections = [matterStates, matterLiquid, matterChar, matterVideo, matterLiquid2, matterExamples, matterExamples2, matterLetsTry, matterQuiz, matterCompleted];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('matter-content-active');
                section.classList.add('matter-content');
            });
        }

        function stopVideo() {
        liquidVideo.pause(); 
        liquidVideo.currentTime = 0; 
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
    if (sections[index] === matterLiquid) {
        playAudio2(); 
    } else {
        stopAudio2();
    }
    if (sections[index] === matterChar) {
        playAudio3(); 
    } else {
        stopAudio3();
    }

    if (sections[index] === matterLiquid2) {
        playAudio4(); 
    } else {
        stopAudio4();
    }
    if (sections[index] === matterVideo) {
            liquidVideo.play();
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
            } else if (sections[index] === matterCompleted) {
                examplesButton.style.display = 'none';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'none';
                goBackButton.style.display = 'none';
                proceedToQuizButton.style.display = 'none';
                leftButton.style.display = 'none';
                rightButton.style.display = 'none';
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
    
    //for quiz
    // Quiz Data
        const quizData = [

        {
            question: "Which state of matter has a fixed volume but no fixed shape?",
            choices: ["Liquid", "Solid", "Gas", "Plasma"],
            quizImage: "../quizImage/liquidQuizImage1.png",
            correctAnswer: "Liquid",
            additionalInfo: "Liquids have a fixed volume but can change shape to fit their container."
        },
        {
            question: "What is a characteristic of liquids?",
            choices: ["They have a definite shape.", "They have a fixed volume but no fixed shape.", "They cannot be compressed.", "They are less dense than gases."],
            quizImage: "../quizImage/liquidQuizImage2.png",
            correctAnswer: "They have a fixed volume but no fixed shape.",
            additionalInfo: "Liquids maintain a fixed volume, but they take the shape of their container."
        },
        {
            question: "Which of the following is a liquid?",
            choices: ["Ice", "Water", "Rock", "Air"],
            quizImage: "../quizImage/liquidQuizImage3.png",
            correctAnswer: "Water",
            additionalInfo: "Water is a common example of a liquid."

        },
        {
            question: "What happens to the particles in a liquid when it is heated?",
            choices: ["They move rapidly.", "They become solid.", "They stop moving.", "They are tightly packed."],
            quizImage: "../quizImage/liquidQuizImage4.png",
            correctAnswer: "They move rapidly.",
            additionalInfo: "Heating a liquid increases the energy of its particles, causing them to move more rapidly."
        },
        {
            question: "Which of the following is NOT a liquid?",
            choices: ["Milk", "Honey", "Salt", "Juice"],
            quizImage: "../quizImage/liquidQuizImage5.png",
            correctAnswer: "Salt",
            additionalInfo: "Salt is a solid, while the others are liquids."
        },
        {
            question: "What can liquids do that solids cannot?",
            choices: ["Change shape", "Stay in one place", "Take up space", "Have a fixed shape"],
            quizImage: "../quizImage/liquidQuizImage6.png",
            correctAnswer: "Change shape",
            additionalInfo: "Liquids can change shape to fit their container."
        },
        {
            question: "Which of these liquids can be poured?",
            choices: ["Sand", "Oil", "Rock", "Metal"],
            quizImage: "../quizImage/liquidQuizImage7.png",
            correctAnswer: "Oil",
            additionalInfo: "Oil is a liquid and can be poured easily."
        },
        {
            question: "Which of these is NOT a liquid?",
            choices: ["Water", "Milk", "Ice", "Juice"],
            quizImage: "../quizImage/liquidQuizImage8.png",
            correctAnswer: "Ice",
            additionalInfo: "Ice is the solid form of water, while water, milk, and juice are liquids."
        }
        ,
        {
            question: "Which of these is an example of a liquid?",
            choices: ["Sand", "Lotion", "Ice", "Air"],
            quizImage: "../quizImage/liquidQuizImage9.png",
            correctAnswer: "Lotion",
            additionalInfo: "Lotion is a liquid and can take the shape of its container."
        },
        {
        question: "Which of these liquids do we drink every day?",
        choices: ["Syrup", "Water", "Mud", "Oil"],
        quizImage: "../quizImage/liquidQuizImage10.png",
        correctAnswer: "Water",
        additionalInfo: "Water is very important liquid, and we drink it every day."
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

