<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .surface-content {
        display: none;
    }
    .surface-content-active {
        display: block;
    }
    #button{
        margin-bottom: -0.5%;
        margin-right: 2%;
    }
    #einstein-image{
        width: 25%;
        max-width: 25%;
        margin-right: -7%;
        margin-left: -8%;
        margin-bottom: -2%;
    }
    #letsTryButton {
        z-index: 10;
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
                    
                    <!-- Water Contamination -->
                    <div class="x-content" id="waterContamination">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Water contamination
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                        Soil erosion can lead to water contamination, 
                                        especially clogged water ways and pollution of aquatic habitats.
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio" src="../../../sounds/waterContam.mp3" autoplay></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface15.png" alt="surface15">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Siltation -->
                    <div class="surface-content" id="siltation">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Siltation
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                        The particulate matter from other areas may settle in the water. 
                                        The sediments could cause not only inconvenience, but could also carry microorganisms that bring disease.
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio2">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio2" src="../../../sounds/siltation.mp3" ></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface16.png" alt="surface16">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Air Pollution -->
                    <div class="surface-content" id="airPollution">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Air Pollution
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                        Contaminants present in the soil can be held loose and lifted by the wind, resulting to air pollution.
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio3">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio3" src="../../../sounds/airPollu.mp3" ></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface17.png" alt="surface17">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Preventing Soil Erosion -->
                    <div class="surface-content" id="prevent">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6 secondary-font">Preventing Soil Erosion</h1>

                            <!-- Text -->
                            <div class="content is-halfmb-4">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                has-text-centered has-text-weight-semibold has-text-white main-font">
                                    One of the common ways to prevent soil erosion is reforestation and increase vegetation. 
                                    Plant roots hold the soil in place.
                                </p>
                            </div>

                            <div class="columns is-vcentered is-centered">
                                <!-- First Image -->
                                <div class="column is-half-tablet is-one-third-desktop">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface18.png" alt="Surface Type 1">
                                    </figure>
                                </div>
                                <!-- Second Image -->
                                <div class="column is-half-tablet is-one-third-desktop">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface19.png" alt="Surface Type 2">
                                    </figure>
                                </div>
                            </div>
                            <div class="audio-icon">
                                            <button id="playAudio4">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio4" src="../../../sounds/erosionPrev.mp3" ></audio>
                                        </div>
                        </div>
                    </div>
                    
                    <!-- LetsTry -->
                    <div class="surface-content" id="letsTry">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6" id="letsTryButton">
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image m-character">
                                        <img src="../../../image/surface20.png" alt="surfaceCharacter">
                                    </figure>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-half pr-6 mr-6">
                                    <figure class="image letstry">
                                        <img src="../../../image/letstry.png" alt="letstry">
                                    </figure>
                                </div>
                            </div>
                            
                        
                            <!-- Go Back and Proceed Button -->
                            <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" >
                                <button class="button is-danger is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile has-text-white">
                                    Go Back
                                </button>
                                <button class="button is-success is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile mx-2 has-text-white">
                                    Proceed to quiz
                                </button>
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

                        <!-- Surface Image -->
                        <img src="../../../image/surface20.png" alt="Surface Figure" id="einstein-image">
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
        const examplesButton = document.getElementById('examplesButton');
        const waterContamination = document.getElementById('waterContamination');
        const siltation = document.getElementById('siltation');
        const airPollution = document.getElementById('airPollution');
        const prevent = document.getElementById('prevent');
        const letsTry = document.getElementById('letsTry');
        const proceedToQuizButton = document.querySelector('.button.is-success');
        const goBackButton = document.querySelector('.button.is-danger');
        const audio = document.getElementById('surfaceAudio');
        const audio2 = document.getElementById('surfaceAudio2');
        const audio3 = document.getElementById('surfaceAudio3');
        const audio4 = document.getElementById('surfaceAudio4');

        let currentSection = 0;
        const sections = [waterContamination, siltation, airPollution, prevent, letsTry];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('surface-content-active');
                section.classList.add('surface-content');
            });
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('surface-content');
            sections[index].classList.add('surface-content-active');
            playCorrespondingAudio(index);
        }

        function playCorrespondingAudio(index) {
            stopAllAudios();
            if (index === 0) {
                playAudio();
            } else if (index === 1) {
                playAudio2();
            } else if (index === 2) {
                playAudio3();
            } else if (index === 3) {
                playAudio4();
            }
        }

        function stopAllAudios() {
            stopAudio();
            stopAudio2();
            stopAudio3();
            stopAudio4();
        }

        function playAudio() {
            audio.play();
        }

        function playAudio2() {
            audio2.play();
        }

        function playAudio3() {
            audio3.play();
        }

        function playAudio4() {
            audio4.play();
        }

        function stopAudio() {
            audio.pause();
            audio.currentTime = 0;
        }

        function stopAudio2() {
            audio2.pause();
            audio2.currentTime = 0;
        }

        function stopAudio3() {
            audio3.pause();
            audio3.currentTime = 0;
        }

        function stopAudio4() {
            audio4.pause();
            audio4.currentTime = 0;
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);

                if (sections[currentSection] === letsTry) {
                    leftButton.style.display = 'none';
                    rightButton.style.display = 'none';
                    einsteinImage.style.display = 'none';
                    goBackButton.style.display = 'flex';
                    proceedToQuizButton.style.display = 'flex';
                } else {
                    examplesButton.style.display = 'flex';
                    einsteinImage.style.display = 'block';
                }
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'surfaceSoil.php?show=desertification';
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);
                examplesButton.style.display = 'flex';
                einsteinImage.style.display = 'block';
            }
        });

        goBackButton.addEventListener('click', function () {
            hideAllSections();
            prevent.classList.remove('surface-content');
            prevent.classList.add('surface-content-active');
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            goBackButton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            window.location.href = 'soilQuiz.php';
        });
    });
</script>