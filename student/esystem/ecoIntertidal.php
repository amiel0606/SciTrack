<?php
    include_once('./includes/board.php');
?>

<style>
    .eco-content {
        display: none;
    }
    .eco-content-active {
        display: block;
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
        width: 100%;
        max-width: 100%;
        margin-right: 9rem;
    }
    #eco-text {
        margin-left: 9rem;
    }
    .placeholder {
        width: 100%;
        max-width: 90%;
        height: 100%;
        max-height: 70%;
        background-color: #D9D9D9;
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
    .navbar{
        background-color: #4A90E2 !important;
    }
    .navbar-item:hover{
        background-color: #266bbb;
        color: white;
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
            <div class="column is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                    </figure>
                    
                    <!-- Eco Objective -->
                    <div class="x-content" id="objectives">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mb-6 secondary-font">LEARNING OBJECTIVES</h1>

                            <!-- Content Layout -->
                            <div class="is-centered">
                                <p class="subtitle is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-white main-font mb-6"> At the end of the lesson you will able to:</p>
                                <!-- Text Column -->
                                <div class="column is-full mt-4">
                                    <div class="subtitle is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-white">
                                        <p class="mb-5 main-font">• Define what are the ecosystem in Intertidal Zone</p>
                                        <p class="mb-5 main-font">• Identify different wildlife that lives in Intertidal zone</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 1 -->
                    <div class="eco-content" id="eco1">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-5 secondary-font">The Ecosystem Estuaries</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="subtitle main-font is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white">
                                        • Many organisms became visible when you go to the seashore during low tide.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/esystem9.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 2 -->
                    <div class="eco-content" id="eco2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mb-6">
                                        Tide
                                    </p>
                                    <p class="subtitle main-font is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white">
                                        • Tide refers to the movement of water as a result of the gravitational pull of the sun and the moon.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/esystem10.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 3 -->
                    <div class="eco-content" id="eco3">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mt-6 secondary-font">The Intertidal Zones</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-centered is-mobile is-multiline mb-4">
                                <!-- Image Column -->
                                <div class="column is-full has-text-centered">
                                    <figure class="image eco-image mb-6">
                                        <img src="../../image/esystem11.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Video -->
                    <div class="eco-content" id="ecoVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">The Ecosystem Estuaries</h1>

                            <!-- Placeholder for Video -->
                            <div class="box placeholder mt-5">
                                <p class="has-text-centered has-text-white is-size-2 secondary-font ">ANIMATED VIDEO</p>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 4 -->
                    <div class="eco-content" id="eco4">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mb-6">
                                        Splash Zone
                                    </p>
                                    <p class="subtitle main-font is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white">
                                        • Also known as the spray zone or upper littoral zone is a region in the intertidal zone that is submerged in the water.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/esystem12.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Splash -->
                    <div class="eco-content" id="ecoSplash">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-6">
                            <h1 class="title is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font mt-4">
                                Organisms that can be found in Splash Zone
                            </h1>

                            <div class="image-container" id="sChar">
                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esSplash1.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Periwinkle Snails</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esSplash2.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Lichens</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 5 -->
                    <div class="eco-content" id="eco5">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mb-6">
                                        High Tide Zone
                                    </p>
                                    <p class="subtitle main-font is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white">
                                        • Also known as the upper mid-littoral zone is region that submerged in the water only during high tide.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/esystem13.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco High -->
                    <div class="eco-content" id="ecoHigh">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-6">
                            <h1 class="title column is-four-fifths has-text-centered is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font">
                                Organisms that can be found in High Tide Zone
                            </h1>
                            
                            <div class="image-container" id="sChar">
                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esHigh1.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Sea weeds</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esHigh2.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Hermit crab</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esHigh3.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Barnacles</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 6 -->
                    <div class="eco-content" id="eco6">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mb-6">
                                        Middle Tide Zone
                                    </p>
                                    <p class="subtitle main-font is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white">
                                        • Also known as lower mid-littoral zone is a region that is generally submerged in the water
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/esystem14.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Middle -->
                    <div class="eco-content" id="ecoMiddle">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-4 p-6">
                            <h1 class="title column is-four-fifths has-text-centered is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font mt-6">
                                Organisms that can be found in Middle Tide Zone
                            </h1>

                            <div class="image-container" id="sExample"  style="z-index: 10;">
                                <!-- First Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esMiddle1.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Sea Urchins</p>
                                </div>

                                <!-- Second Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esMiddle2.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Sea Cucumbers</p>
                                </div>

                                <!-- Third Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esMiddle3.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Fish</p>
                                </div>

                                <!-- Fourth Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esMiddle4.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Shrimp</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 7 -->
                    <div class="eco-content" id="eco7">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white mb-6">
                                        Low Tide Zone
                                    </p>
                                    <p class="subtitle main-font is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white">
                                        • Also known as lower littoral zone is always submerged under water
                                        <br>
                                        <br>
                                        • It is only exposed during extremely low tide.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/esystem15.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Low -->
                    <div class="eco-content" id="ecoLow">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-4 p-6">
                            <h1 class="title column is-four-fifths has-text-centered is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white secondary-font mt-6">
                                Organisms that can be found in Low Tide Zone
                            </h1>

                            <div class="image-container" id="sExample"  style="z-index: 10;">
                                <!-- First Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esLow1.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Sea Star</p>
                                </div>

                                <!-- Second Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esLow2.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Sea Sponge</p>
                                </div>

                                <!-- Third Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esLow3.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Nudibranch</p>
                                </div>

                                <!-- Fourth Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/esLow4.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Algae</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Quiz -->
                    <div class="eco-content" id="ecoQuiz">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <div class="iframe-container">
                                <iframe src="https://scitrack.h5p.com/content/1292375351285473868/embed" aria-label="Liquid Quiz" width="900" height="900" frameborder="0" 
                                    allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *">
                                </iframe>
                                <script src="https://scitrack.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Estuaries Completed -->
                    <div class="eco-content" id="ecoCompleted">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <div class="column is-full is-flex is-justify-content-flex-end mb-6">
                                <div class="columns is-half ml-6 p-2">
                                    <a href="ecosystemLesson.php">
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
        const eco1 = document.getElementById('eco1');
        const eco2 = document.getElementById('eco2');
        const eco3 = document.getElementById('eco3');
        const ecoVideo = document.getElementById('ecoVideo');
        const eco4 = document.getElementById('eco4');
        const ecoSplash = document.getElementById('ecoSplash');
        const eco5 = document.getElementById('eco5');
        const ecoHigh = document.getElementById('ecoHigh');
        const eco6 = document.getElementById('eco6');
        const ecoMiddle = document.getElementById('ecoMiddle');
        const eco7 = document.getElementById('eco7');
        const ecoLow = document.getElementById('ecoLow');
        const ecoQuiz = document.getElementById('ecoQuiz');
        const ecoCompleted = document.getElementById('ecoCompleted');
        let currentSection = 0;
        const sections = [objectives, eco1, eco2, eco3, ecoVideo, eco4, ecoSplash, eco5, ecoHigh, eco6, ecoMiddle, eco7, ecoLow, ecoQuiz, ecoCompleted];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('eco-content-active');
                section.classList.add('eco-content');
            });
        }

        function updateEinsteinImageAndButtons() {
            if (currentSection === 13 || currentSection === 14) {
                einsteinImage.style.display = 'none';  
            } else {
                einsteinImage.style.display = 'block';
            }

            if (currentSection === 14) {
                leftButton.style.display = 'none';
                rightButton.style.display = 'none'; 
            } else {
                leftButton.style.display = 'block';
                rightButton.style.display = 'block'; 
            }
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('eco-content');
            sections[index].classList.add('eco-content-active');
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
                window.location.href = 'ecosystemLesson.php'; 
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);
            }
        });

        hideAllSections();
        showSection(0); 
    });
</script>