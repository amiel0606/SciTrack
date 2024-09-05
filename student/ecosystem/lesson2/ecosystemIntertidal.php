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
                                        Many organisms became visible when you go to the seashore during low tide. 
                                        You will see more rocks and sea creature. 
                                        Intertidal zones of rocky shorelines host sea star fish, seaweed, algae and crabs.
                                        </p>
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
                                        Tide refers to the movement of water as a result of the gravitational pull of the sun and the moon.
                                        </p>
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
                                            Interdal Zone refers to the area of the sea that is exposed to the air during low tide and is submerge in the water during high tide. 
                                        </p>
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
        const content = {
            1: document.getElementById('ecosystemInter'),
            2: document.getElementById('ecosystemTide'),
            3: document.getElementById('ecosystemIntertidalZone'),
        };

        let currentContent = 1;

        function updateContent() {
            for (let key in content) {
                content[key].classList.toggle('active', key == currentContent);
            }
        }

        updateContent();
        
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const showM = getQueryParam('show');
        if (showM === 'ecosystemIntertidalZone') {
            currentContent = 3;
            updateContent();
        }

        leftButton.addEventListener('click', function () {
            if (currentContent === 1) {
                window.location.href = './../ecosystemDef.php?show=ecosystemTopic'; 
            } else {
                currentContent--;
                updateContent();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentContent === 3) {
                window.location.href = 'intertidalPopQuiz.php'; 
            } else {
                currentContent++;
                updateContent();
            }
        });
    });
</script>