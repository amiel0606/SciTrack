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
    #sChar{
        margin-top: -1rem;
        z-index: 10;
    }
    #sChar img {
        width: 100%;
        max-width: 250px;
        margin-left: 3rem;
    }
    #mg2{
        margin-left: 3rem;
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
    #matterVideo video {
    z-index: 10; 
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
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">GAS</h1>

                            <div class="image-container">
                                <!-- Solid Image -->
                                <div class="image-item">
                                    <p class="main-font title is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">SOLID</p>
                                    <figure class="image">
                                        <img src="../../image/msolid8.png" alt="Solid">
                                    </figure>
                                </div>

                                <!-- Gas Image -->
                                <div class="image-item mb-6">
                                    <figure class="image">
                                        <img src="../../image/mgas3.png" alt="Gas" class="rotate-image">
                                    </figure>
                                </div>

                                <!-- Liquid Image -->
                                <div class="image-item">
                                    <p class="main-font title is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">GAS</p>
                                    <figure class="image">
                                        <img src="../../image/mliquid8.png" alt="Liquid">
                                    </figure>
                                </div>
                            </div>

                            <p class="main-font column is-three-fifths title is-size-5-tablet is-size-4-desktop is-size-3-widescreen
                            has-text-centered has-text-white mb-6" id="states">A gas is a substance that is in a gaseous, or vaporous, state of matter.</p>
                        </div>
                    </div>

                    <!-- Matter Gas -->
                    <div class="matter-content" id="matterGas">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-5 secondary-font">GAS</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image solid-image">
                                        <img src="../../image/mgas.png" alt="Gas">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-5">
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white">
                                        • Has particles that are far apart, fast-moving and not organised in any particular way.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Characteristics -->
                    <div class="matter-content" id="matterChar">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">CHARACTERISTICS OF GAS</h1>
                            <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mt-3">Gas are known to have:</p>

                            <div class="image-container" id="sChar">
                                <!-- Gas Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mgChar1.png" alt="Gas">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Gases are fluid, and flow easily.</p>
                                </div>

                                <!-- Gas Image -->
                                <div class="image-item">
                                    <figure class="image" id="mg2">
                                        <img src="../../image/mgChar2.png" alt="Gas">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Gases have neither definite shape nor definite volume.</p>
                                </div>

                                <!-- Gas Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mgChar3.png" alt="Gas">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Gases have low density, unless compressed.</p>
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
                                <video id="gasVideo" width="800" height="520" controls>
                                    <source src="../../videos/Gas.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Gas2 -->
                    <div class="matter-content" id="matterGas2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-5 secondary-font">GAS</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="solid-text">
                                    <p class="subtitle main-font is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white">
                                        • Heating a gas increases the kinetic energy of the particles, causing the gas to expand. 
                                        In order to keep the pressure constant, the volume of the container must be increased when a gas is heated.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image solid-image2">
                                        <img src="../../image/mgas4.png" alt="Gas">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples -->
                    <div class="matter-content" id="matterExamples">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">
                                EXAMPLES OF GAS
                            </h1>

                            <div class="image-container" id="sExample">
                                <!-- First Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mgas5.png" alt="Gas">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Helium in Balloon</p>
                                </div>

                                <!-- Second Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mgas6.png" alt="Gas">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Steam</p>
                                </div>

                                <!-- Third Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mgas7.png" alt="Gas">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Oxygen Tank</p>
                                </div>

                                <!-- Fourth Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/mgas8.png" alt="Gas">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Smoke</p>
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
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <div class="iframe-container">
                                <iframe src="https://scitrack.h5p.com/content/1292375351285473868/embed" aria-label="Liquid Quiz" width="900" height="900" frameborder="0" 
                                    allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *">
                                </iframe>
                                <script src="https://scitrack.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>
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
<audio id="matterAudio" src="../../sounds/gas1.mp3"></audio>
<audio id="matterAudio2" src="../../sounds/gas2.mp3"></audio>
<audio id="matterAudio3" src="../../sounds/gas3.mp3"></audio>
<audio id="matterAudio4" src="../../sounds/gas4.mp3"></audio>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const matterStates = document.getElementById('matterStates');
        const matterGas = document.getElementById('matterGas');
        const matterChar = document.getElementById('matterChar');
        const matterVideo = document.getElementById('matterVideo');
        const matterGas2 = document.getElementById('matterGas2');
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
        const gasVideo = document.getElementById('gasVideo');
        let currentSection = 0;
        const sections = [matterStates, matterGas, matterChar, matterVideo, matterGas2, matterExamples, matterLetsTry, matterQuiz, matterCompleted];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('matter-content-active');
                section.classList.add('matter-content');
            });
        }

        function stopVideo() {
        gasVideo.pause(); 
        gasVideo.currentTime = 0; 
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
    if (sections[index] === matterGas) {
        playAudio2(); 
    } else {
        stopAudio2();
    }
    if (sections[index] === matterChar) {
        playAudio3(); 
    } else {
        stopAudio3();
    }

    if (sections[index] === matterGas2) {
        playAudio4(); 
    } else {
        stopAudio4();
    }
    if (sections[index] === matterVideo) {
            gasVideo.play();
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
        showSection(0); 

    });
</script>
