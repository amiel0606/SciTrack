<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .measuring-content {
        display: none;
    }

    .measuring-content.active {
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
                        <!-- Measuring Def -->
                        <div class="measuring-content" id="measuringDef">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6 ml-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/measuring1.png" alt="measuring1">
                                        </figure>
                                    </div>
                                    
                                    <!-- Text Column -->
                                    <div class="column is-half mt-6 pt-5 mr-6">
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        Measuring tools and devices provide us with a basis of how we view our surroundings. 
                                        They have also paved the way for more credible research outputs
                                        </p>
                                        <div class="audio-icon">
                                            <button id="playAudio">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="measureAudio" src="../../../sounds/measureDef.mp3" autoplay></audio>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Measuring Ruler -->
                        <div class="measuring-content" id="measuringRuler">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Ruler
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        Ruler is a basic tool for measuring length and distance. 
                                        It is a flat rod made of plastic, wood, or metal with calibrated lines to measure short objects and distances. 
                                        A modification of the ruler is the meter stick which is calibrated to one meter
                                        </p>
                                        <div class="audio-icon">
                                            <button id="playAudio2">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="measureAudio2" src="../../../sounds/ruler.mp3" ></audio>
                                        </div>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/measuring2.png" alt="measuring2">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Measuring Tape -->
                        <div class="measuring-content" id="measuringTape">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Tape Measure
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        For longer lengths, a retractable tape measure is used. 
                                        They are usually made of thin metal sheet that can straighten up or fold as needed.
                                        </p>
                                        <div class="audio-icon">
                                            <button id="playAudio3">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="measureAudio3" src="../../../sounds/tapeMeasure.mp3" ></audio>
                                        </div>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/measuring3.png" alt="measuring3">
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

                            <!-- Motion Image -->
                            <img src="../../../image/measuring8.png" alt="Motion Figure" id="einstein-image">
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
        const audio = document.getElementById('measureAudio'); 
        const audio2 = document.getElementById('measureAudio2');
        const audio3 = document.getElementById('measureAudio3');
        const content = {
            1: document.getElementById('measuringDef'),
            2: document.getElementById('measuringRuler'),
            3: document.getElementById('measuringTape')
        };

        let currentQuiz = 1;

        function updateContent() {
            for (let key in content) {
                content[key].classList.toggle('active', key == currentQuiz);
            }
            playAudio();
        }

        function playAudio() {
            stopAllAudio();
            switch (currentQuiz) {
                case 1:
                    audio.play(); 
                    break;
                case 2:
                    audio2.play(); 
                    break;
                case 3:
                    audio3.play(); 
                    break;
            }
        }

        function stopAllAudio() {
            [audio, audio2, audio3].forEach(aud => {
                aud.pause();
                aud.currentTime = 0; // Reset audio to the beginning
            });
        }

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const showM = getQueryParam('show');
        if (showM === 'measuringTape') {
            currentQuiz = 3;
            updateContent();
        } else {
            updateContent();
        }

        leftButton.addEventListener('click', function () {
            if (currentQuiz === 1) {
                window.location.href = './.././motionDef.php?show=motionTopic'; 
            } else {
                currentQuiz--;
                updateContent();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentQuiz === 3) {
                window.location.href = 'measuringPopQuiz.php'; 
            } else {
                currentQuiz++;
                updateContent();
            }
        });
    });
</script>
