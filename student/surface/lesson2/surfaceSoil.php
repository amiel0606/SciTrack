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

                
                    
                    <!-- soil -->
                    <div class="x-content" id="soil">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                        Soil is an essential resource to everyone. Many living things rely on soil for food and shelter. 
                                        Soil is vital to agriculture and industry. Soil is an essential part of the land in which homes are built
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio" src="../../../sounds/soilEffects.mp3" autoplay></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface11.png" alt="surface11">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Soil Erosion -->
                    <div class="surface-content" id="soilErosion">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Soil Erosion
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                        It is naturally occurring process that affects all land forms. 
                                        It refers to the wearing away or removal of the topmost part of the soil by natural forces like water and wind
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio2">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio2" src="../../../sounds/soilErosion.mp3" ></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface12.png" alt="surface12">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Soil Detachment -->
                    <div class="surface-content" id="soilDetachment">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Soil Detachment
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                        It occurs due to the effect of water, wind, or biological agents. 
                                        These natural agents move and transport soil to other places where they accumulate over time.
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio3">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio3" src="../../../sounds/soilDetach.mp3" ></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface13.png" alt="surface13">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desertification -->
                    <div class="surface-content" id="desertification">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                        Desertification
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    If the nutrient-rich topsoil is removed from an agricultural land, 
                                    the land eventually becomes infertile and dry.
                                    </p>
                                    <div class="audio-icon">
                                            <button id="playAudio4">
                                                <img src="../../../image/speaker.png" alt="Speaker Icon" width="50">
                                            </button>
                                            <audio id="surfaceAudio4" src="../../../sounds/desert.mp3" ></audio>
                                        </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface14.png" alt="surface14">
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

                        <!-- Surface Image -->
                        <img src="../../../image/surface20.png" alt="Surface Figure" id="einstein-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = ['soil', 'soilErosion', 'soilDetachment', 'desertification'];
        let currentIndex = 0;

        const contentSections = sections.map(id => document.getElementById(id));
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const audio = document.getElementById('surfaceAudio');
        const audio2 = document.getElementById('surfaceAudio2');
        const audio3 = document.getElementById('surfaceAudio3');
        const audio4 = document.getElementById('surfaceAudio4');

        function showSection(index) {
            contentSections.forEach((section, i) => {
                if (i === index) {
                    section.classList.add('motion-content-active');
                    section.style.display = 'block';
                } else {
                    section.classList.remove('motion-content-active');
                    section.style.display = 'none';
                }
            });
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

        rightButton.addEventListener('click', () => {
            if (currentIndex < sections.length - 1) {
                currentIndex++;
                showSection(currentIndex);
            } else if (currentIndex === sections.length - 1) {
                window.location.href = 'lesson2PopQuiz.php';
            }
        });

        leftButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                showSection(currentIndex);
            } else {
                window.location.href = './.././surfaceDef.php?show=surfaceTopic';
            }
        });

        // Check URL for 'show' parameter and set currentIndex accordingly
        const urlParams = new URLSearchParams(window.location.search);
        const showSectionId = urlParams.get('show');
        if (showSectionId && sections.includes(showSectionId)) {
            currentIndex = sections.indexOf(showSectionId);
        }

        showSection(currentIndex);
    });
</script>


