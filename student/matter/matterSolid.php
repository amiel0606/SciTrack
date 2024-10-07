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
    @keyframes rotate {
        0% { transform: translate(0, 0); }
        25% { transform: translate(30px, -10px); }
        50% { transform: translate(60px, 10px); }
        75% { transform: translate(-30px, 10px); }
        100% { transform: translate(0, 0); }
    }

    .rotate-image {
        animation: rotate 4s linear infinite;
        transform-style: preserve-3d;
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
    #sChar img {
        width: 100%;
        max-width: 300px;
    }
    #sExample img {
        width: 100%;
        max-width: 1000px;
        margin-top: 2rem;
    }
    .solid-image {
        width: 100%;
        max-width: 70%;
        margin-left: 9rem;
    }
    .solid-image2 {
        width: 100%;
        max-width: 80%;
        margin-right: 9rem;
    }
    #solid-text {
        margin-left: 9rem;
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
        padding: 20px;
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

    

    @font-face {
        font-family: 'Avenue';
        src: url('../../font/Avenue.otf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../../font/Haniley.otf') format('opentype');
    }
    .main-font {
        font-family: 'Avenue';
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
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">SOLID</h1>

                            <div class="image-container">
                                <!-- Liquid Image -->
                                <div class="image-item">
                                    <p class="main-font title is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">LIQUID</p>
                                    <figure class="image">
                                        <img src="../../image/mliquid.png" alt="Liquid">
                                    </figure>
                                </div>

                                <!-- Solid Image -->
                                <div class="image-item mb-6">
                                    <figure class="image">
                                        <img src="../../image/msolidgif.gif" alt="Solid" class="rotate-image">
                                    </figure>
                                </div>

                                <!-- Gas Image -->
                                <div class="image-item">
                                    <p class="main-font title is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">GAS</p>
                                    <figure class="image">
                                        <img src="../../image/mgas.png" alt="Gas">
                                    </figure>
                                </div>
                            </div>

                            <p class="main-font column is-three-fifths title is-size-5-tablet is-size-4-desktop is-size-3-widescreen
                            has-text-centered has-text-white mb-6" id="states">Solid is one of the three fundamental states of matter along with liquid, gas.</p>
                        </div>                       
                    </div>

                    <!-- Matter Solid -->
                    <div class="matter-content" id="matterSolid">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-5 secondary-font">SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image solid-image">
                                        <img src="../../image/msolidgif.gif" alt="Solid">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-5">
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white">
                                        • Has particles that are packed closely together and usually arranged in regular pattern
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Characteristics -->
                    <div class="matter-content" id="matterChar">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">CHARACTERISTICS OF SOLID</h1>
                            <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mt-3">Solid are known to have:</p>

                            <div class="image-container" id="sChar">
                                <!-- Solid Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/ssChar1.gif" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Fixed shape</p>
                                </div>

                                <!-- Solid Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/ssChar2.gif" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Fixed volume</p>
                                </div>

                                <!-- Solid Image -->
                                <div class="image-item">
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
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">SOLID</h1>

                            <!-- Video for Solid.mp4 -->
                            <div class="box">
                                <video id="solidVideo" width="750" height="420" controls>
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
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-5 secondary-font">SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="solid-text">
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white">
                                        • Has Definite shape and volume
                                    </p>
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white">
                                        • When a solid is heated, its molecules gain energy and vibrate fast.
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
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">
                                EXAMPLES OF SOLID
                            </h1>

                            <div class="image-container" id="sExample">
                                <!-- First Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/msolid3.png" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Books</p>
                                </div>

                                <!-- Second Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/msolid4.png" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Eraser</p>
                                </div>

                                <!-- Third Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/msolid5.png" alt="Solid">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Shirt</p>
                                </div>

                                <!-- Fourth Image -->
                                <div class="image-item">
                                    <figure class="image">
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
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">
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
                                        <p class="subtitle main-font is-4" id="questionText">What is the capital of France?</p>

                                        <!-- Choices as Buttons with Responsive Sizes -->
                                        <div class="buttons is-flex is-flex-direction-column">
                                            <button class="button is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet" data-answer="A">A) Paris</button>
                                            <button class="button is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet" data-answer="B">B) Madrid</button>
                                            <button class="button is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet" data-answer="C">C) Berlin</button>
                                            <button class="button is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet" data-answer="D">D) Rome</button>
                                        </div>

                                        <div class="box extra-info-box" id="extraInfoBox" style="display:none;">
                                            <h3 class="title is-4" id="extraInfoTitle">Additional Information</h3>
                                            <p id="extraInfoText"></p>
                                        </div>

                                        <!-- Next Button -->
                                        <button class="button is-success main-font is-size-6-widescreen is-size-7-tablet" id="nextButton" disabled>Next Question</button>
                                    </div>
                                </div>
                            </div>

                             <!-- Quiz Result -->
                            <div class="box has-text-centered p-6" id="quizResult" style="display:none; width: 100%; max-width: 90%; padding: 30px; z-index: 2; margin-top: 30px;">
                                <h2 class="title secondary-font is-2">Quiz Results</h2>
                                <table class="table is-bordered is-striped is-fullwidth" style="margin-top: 2rem;">
                                    <tbody>
                                        <tr>
                                            <td><strong>Total Questions:</strong></td>
                                            <td id="totalQuestions">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Correct:</strong></td>
                                            <td id="correctAnswers">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wrong:</strong></td>
                                            <td id="wrongAnswers">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Percentage:</strong></td>
                                            <td id="percentage">0%</</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Your Total Score:</strong></td>
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
                                        <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-weight-semibold">
                                            YOU DID GREAT!
                                        </p>
                                        <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-weight-semibold">
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
        let currentSection = 0;
        const sections = [matterStates, matterSolid, matterChar, matterVideo, matterSolid2, matterExamples, matterLetsTry, matterQuiz, matterCompleted];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('matter-content-active');
                section.classList.add('matter-content');
            });
        }

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


    if (index >= 0 && index <= 5) { 
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
            if (currentSection === 5) {
                currentSection = 6;
                showSection(currentSection);
            } else if (currentSection < sections.length - 1) {
                currentSection++; 
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 5; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 7; 
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
        showSection(7); 

    });

    //for quiz
    // Quiz Data
    const quizData = [
        {
            question: "What is the state of matter that has a definite shape and volume?",
            choices: ["Liquid", "Gas", "Solid", "Plasma"],
            quizImage: "../quizImage/solidQuizImage1.png",
            correctAnswer: "Solid",
            additionalInfo: "Solids maintain a fixed shape and volume because their particles are closely packed together and cannot move freely."
        },
        {
            question: "Which of the following solids can be easily molded into different shapes?",
            choices: ["Glass", "Clay", "Steel", "Ice"],
            quizImage: "../quizImage/solidQuizImage2.png",
            correctAnswer: "Clay",
            additionalInfo: "Clay is a malleable material that can be easily shaped when wet. Once it dries or is fired in a kiln, it becomes hard and retains the molded shape, making it ideal for pottery and sculpture."
        },
        {
            question: "What happens to the particles in a solid?",
            choices: ["They move freely.", "They are tightly packed together.", "They are far apart.", "They vibrate rapidly."],
            quizImage: "../quizImage/solidQuizImage3.png",
            correctAnswer: "They are tightly packed together.",
            additionalInfo: "In solids, particles are closely packed and can only vibrate in place, giving solids their rigid structure."
        },
        {
            question: "Which solid is typically used for construction due to its strength?",
            choices: ["Sugar", "Sand", "Concrete", "Paper"],
            quizImage: "../quizImage/solidQuizImage4.png",
            correctAnswer: "Concrete",
            additionalInfo: "Concrete is a strong, durable material used widely in construction because of its ability to withstand heavy loads."
        },
        {
            question: "Which solid is known for being very hard?",
            choices: ["Rubber", "Wood", "Diamond", "Cotton"],
            quizImage: "../quizImage/solidQuizImage5.png",
            correctAnswer: "Diamond",
            additionalInfo: "Diamond is the hardest known natural material, making it valuable for cutting and drilling applications."
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

