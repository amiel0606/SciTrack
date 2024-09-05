<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 100%;
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
    .topic-container {
        position: relative; 
        z-index: 10;
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
    }
    .topic-container:hover {
        transform: scale(1.05);
    }
    .topic-container:hover figure img {
        filter: brightness(1.1);
    }
    #ecosystemTopic figure {
        position: relative;
        z-index: 15;
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

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">

                        <!-- Ecosystem Definition -->
                        <div class="ecosystem-content" id="ecosystemDef">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6 secondary-font">WHAT IS ECOSYSTEM?</h1>
                                
                                <!-- Text -->
                                <div class="column is-four-fifths mt-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-centered has-text-weight-semibold has-text-white main-font">
                                    An ecosystem is all the biotic and abiotic components that interact within an area at once.

                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Ecosystem Biotic -->
                        <div class="ecosystem-content" id="ecosystemBiotic">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-2 secondary-font">BIOTIC</h1>
                                
                                <!-- Examples Image of Biotic -->
                                <div class="columns is-vcentered is-centered mb-4">
                                    <!-- First Image -->
                                    <div class="column is-one-third">
                                        <figure class="image example-image">
                                            <img src="../.././image/biotic1.png" alt="Biotic">
                                        </figure>
                                    </div>
                                    <!-- Second Image -->
                                    <div class="column is-one-third">
                                        <figure class="image example-image">
                                            <img src="../.././image/biotic2.png" alt="Biotic 2">
                                        </figure>
                                    </div>
                                    <!-- Third Image -->
                                    <div class="column is-one-third">
                                        <figure class="image example-image">
                                            <img src="../.././image/biotic3.png" alt="Biotic 3">
                                        </figure>
                                    </div>
                                </div>
                                
                                
                                <!-- Text -->
                                <div class="column is-four-fifths mt-2">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen
                                    has-text-centered has-text-weight-semibold has-text-white main-font">
                                        Biotic factors are living things within an ecosystem; such as plants, animals, and bacteria
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Ecosystem Abiotic -->
                        <div class="ecosystem-content" id="ecosystemAbiotic">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-2 secondary-font">ABIOTIC</h1>
                                
                                <!-- Examples Image of Abiotic -->
                                <div class="columns is-vcentered is-centered mb-4">
                                    <!-- First Image -->
                                    <div class="column is-one-third">
                                        <figure class="image example-image">
                                            <img src="../.././image/abiotic1.png" alt="Abiotic">
                                        </figure>
                                    </div>
                                    <!-- Second Image -->
                                    <div class="column is-one-third">
                                        <figure class="image example-image">
                                            <img src="../.././image/abiotic2.png" alt="Abiotic 2">
                                        </figure>
                                    </div>
                                    <!-- Third Image -->
                                    <div class="column is-one-third">
                                        <figure class="image example-image">
                                            <img src="../.././image/abiotic3.png" alt="Abiotic 3">
                                        </figure>
                                    </div>
                                </div>
                                
                                
                                <!-- Text -->
                                <div class="column is-four-fifths mt-2">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-centered has-text-weight-semibold has-text-white main-font">
                                        Abiotic factors are non-living things such as air, water, light, soil, nutrient and many more
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Ecosystem Topic -->
                        <div class="ecosystem-content" id="ecosystemTopic">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-4 secondary-font">CHOOSE TOPIC</h1>
                                
                                <div class="columns is-centered">
                                    <!-- Lesson 1 and 2 -->
                                    <div class="column is-two-thirds ml-6 mr-6">
                                        <div class="columns">
                                            <div class="column is-half has-text-centered">
                                                <div class="title is-size-3-dekstop is-size-4-tablet has-text-white 
                                                has-text-weight-semibold topic-container main-font">
                                                    <a href="./lesson1/ecosystemEstuaris.php">
                                                        <figure class="image">
                                                            <img src="../../image/ecoLesson1.png" alt="ecoLesson1">
                                                        </figure>
                                                    </a>
                                                    <p>Lesson 1: The Ecosystem Estuaries</p>
                                                </div>
                                            </div>

                                            <div class="column is-narrow"></div>

                                            <div class="column is-half has-text-centered">
                                                <div class="title is-size-3-dekstop is-size-4-tablet has-text-white 
                                                has-text-weight-semibold topic-container main-font">
                                                    <a href="./lesson2/ecosystemIntertidal.php">
                                                        <figure class="image">
                                                            <img src="../../image/ecoLesson2.png" alt="ecoLesson2">
                                                        </figure>
                                                    </a>
                                                    <p>Lesson 2: The Ecosystem in the Intertidal Zone</p>
                                                </div>
                                            </div>
                                        </div>
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
                            <img src="../../image/ecoCharacter.png" alt="Eco Figure" id="einstein-image">
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
        const content = {
            1: document.getElementById('ecosystemDef'),
            2: document.getElementById('ecosystemBiotic'),
            3: document.getElementById('ecosystemAbiotic'),
            4: document.getElementById('ecosystemTopic')
        };

        let currentContent = 1;

        function updateContent() {
            for (let key in content) {
                content[key].classList.toggle('active', key == currentContent);
            }

            if (currentContent === 4) {
                rightButton.style.display = 'none'; 
            } else {
                rightButton.style.display = '';
            }
        }

        updateContent();

        leftButton.addEventListener('click', function () {
            if (currentContent === 1) {
                window.location.href = './../studentWelcome.php?show=Lessons';
            } else {
                currentContent--;
                updateContent();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentContent < 4) {
                currentContent++;
                updateContent();
            }
        });

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
        const showM = getQueryParam('show');
        if (showM === 'ecosystemTopic') {
            currentContent = 4;
            updateContent();
        }
    });

</script>