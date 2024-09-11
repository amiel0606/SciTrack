<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .ecosystem-content {
        display: none;
    }

    .ecosystem-content.active {
        display: block;
    }
    #button{
        margin-bottom: 1%;
        margin-right: 2%;
    }
    #einstein-image{
        width: 25%;
        max-width: 25%;
        margin-right: -7%;
        margin-left: -8%;
        margin-bottom: 0%;
    }
    @font-face {
        font-family: 'Avenue';
        src: url('../../../font/Avenue.otf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../../../font/Haniley.otf') format('opentype');
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
                        <img src="../../../image/board.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <!-- Ecosystem Inter -->
                        <div class="ecosystem-content" id="ecosystemInter">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem in the Intertidal Zone</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        Many organisms become visible when you go to the seashore during low tide. 
                                        You will see more rocks and sea creature. 
                                        Intertidal zones of rocky shorelines host starfishes, seaweed, algae and crabs.
                                        </p>
                                        <div class="audio-icon">
                                            <button id="playAudio">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="tideAudio" src="../../../sounds/intertidal1.mp3"></audio>
                                        </div>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/ecoInter.png" alt="ecoInter">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Ecosystem Tide -->
                        <div class="ecosystem-content" id="ecosystemTide">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem in the Intertidal Zone</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Tide
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        A tide refers to the movement of water as a result of the gravitational pull of the sun and the moon.
                                        </p>
                                        <div class="audio-icon">
                                            <button id="playAudio2">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="tideAudio2" src="../../../sounds/Tide.mp3"></audio>
                                        </div>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/tide.png" alt="tide">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Ecosystem Intertidal Zone -->
                        <div class="ecosystem-content" id="ecosystemIntertidalZone">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem in the Intertidal Zone</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Intertidal Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                            Intertidal Zone refers to the area of the sea that is exposed to the air during low tide and is submerged in the water during high tide. 
                                        </p>
                                        <div class="audio-icon">
                                            <button id="playAudio3">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="tideAudio3" src="../../../sounds/intertidalzone.mp3"></audio>
                                        </div>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/intertidalZone.png" alt="intertidalZone">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and Right Buttons-->
                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-5" id="examplesButton">
                            <div class="column is-full is-flex is-justify-content-flex-end" id="button">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mr-4" id="leftButton">
                                    <i class="fas fa-arrow-left button-icon"></i>
                                </button>
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="rightButton">
                                    <i class="fas fa-arrow-right button-icon"></i>
                                </button>
                            </div>

                            <!-- Eco Image -->
                            <img src="../../../image/ecoCharacter2.png" alt="Eco Figure" id="einstein-image">
                        </div>
                        
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
        const ecosystemInter = document.getElementById('ecosystemInter');
        const ecosystemTide = document.getElementById('ecosystemTide');
        const ecosystemIntertidalZone = document.getElementById('ecosystemIntertidalZone');
        const einsteinImage = document.getElementById('einstein-image');

        const tideAudio = document.getElementById('tideAudio');
        const tideAudio2 = document.getElementById('tideAudio2');
        const tideAudio3 = document.getElementById('tideAudio3');

        let currentSection = 0;
        const sections = [ecosystemInter, ecosystemTide, ecosystemIntertidalZone];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('active');
            });
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.add('active');
            playAudio(); 
            playAudio2();
            playAudio3();
        }

        function stopAudio() {
            tideAudio.pause();
            tideAudio.currentTime = 0; // Optionally reset audio to the beginning
        }

        function stopAudio2() {
            tideAudio2.pause();
            tideAudio2.currentTime = 0; // Optionally reset audio to the beginning
        }

        function stopAudio3() {
            tideAudio3.pause();
            tideAudio3.currentTime = 0; // Optionally reset audio to the beginning
        }

        function playAudio() {
            if (currentSection === 0) {
                tideAudio.play();
            } else {
                stopAudio();
            }
        }

        function playAudio2() {
            if (currentSection === 1) {
                tideAudio2.play();
            } else {
                stopAudio2();
            }
        }

        function playAudio3() {
            if (currentSection === 2) {
                tideAudio3.play();
            } else {
                stopAudio3();
            }
        }

        function updateContent() {
            showSection(currentSection);
        }

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const showM = getQueryParam('show');
        if (showM === 'ecosystemIntertidalZone') {
            currentSection = 2;
            updateContent();
        } else {
            updateContent();
        }

        leftButton.addEventListener('click', function () {
            stopAudio();
            stopAudio2();
            stopAudio3();
            if (currentSection === 0) {
                window.location.href = './../ecosystemDef.php?show=ecosystemTopic'; 
            } else {
                currentSection--;
                updateContent();
            }
        });

        rightButton.addEventListener('click', function () {
            stopAudio();
            stopAudio2();
            stopAudio3();
            if (currentSection === sections.length - 1) {
                window.location.href = 'intertidalPopQuiz.php'; 
            } else {
                currentSection++;
                updateContent();
            }
        });

        document.getElementById('playAudio').addEventListener('click', () => tideAudio.play());
        document.getElementById('playAudio2').addEventListener('click', () => tideAudio2.play());
        document.getElementById('playAudio3').addEventListener('click', () => tideAudio3.play());
    });
</script>
