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
        margin-bottom: -50%;
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
                                <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6">WHAT IS ECOSYSTEM?</h1>
                                
                                <!-- Text -->
                                <div class="column is-four-fifths mt-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-centered has-text-weight-semibold has-text-white">
                                    An ecosystem is all the biotic and abiotic components that interact within an area at once.

                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Ecosystem Biotic -->
                        <div class="ecosystem-content" id="ecosystemBiotic">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-2">BIOTIC</h1>
                                
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
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-centered has-text-weight-semibold has-text-white">
                                        Biotic factors are living things within an ecosystem; such as plants, animals, and bacteria
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Ecosystem Abiotic -->
                        <div class="ecosystem-content" id="ecosystemAbiotic">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-2">ABIOTIC</h1>
                                
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
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-centered has-text-weight-semibold has-text-white">
                                        Abiotic factors are non-living things such as air, water, light, soil, nutrient and many more
                                    </p>
                                </div>
                            </div>
                        </div>


                        <!-- Left and Right Buttons-->
                        <div class="column is-full is-flex is-justify-content-flex-end" id="button">
                            <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mr-4" id="leftButton">
                                <i class="fas fa-arrow-left button-icon"></i>
                            </button>
                            <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="rightButton">
                                <i class="fas fa-arrow-right button-icon"></i>
                            </button>
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
            3: document.getElementById('ecosystemAbiotic')
        };

        let currentQuiz = 1;

        function updateContent() {
            for (let key in content) {
                content[key].classList.toggle('active', key == currentQuiz);
            }
        }

        updateContent();

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const showM = getQueryParam('show');
        if (showM === 'ecosystemAbiotic') {
            currentQuiz = 3;
            updateContent();
        }

        leftButton.addEventListener('click', function () {
            if (currentQuiz === 1) {
                window.location.href = './../studentLesson.php'; 
            } else {
                currentQuiz--;
                updateContent();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentQuiz === 3) {
                window.location.href = 'ecosystemTopic.php'; 
            } else {
                currentQuiz++;
                updateContent();
            }
        });
    });
</script>