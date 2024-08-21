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
        margin-bottom: -50%;
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
                        <!-- Ecosystem Splash -->
                        <div class="ecosystem-content" id="ecosystemSplash">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Splash Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        Also known as the spray zone or upper littoral zone is a region in the intertidal zone that is submerged in the water. 
                                        It is only under water during high tide, but this rarely happens.
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/splashZone.png" alt="splash">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Ecosystem High Tide -->
                        <div class="ecosystem-content" id="ecosystemHigh">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            High Tide Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        The high tide zone, also known as the upper mid-littoral zone is region that submerged in the water only during high tide. 
                                        Seaweeds, barnacles and crabs are some of the organism found here.
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/highTide.png" alt="highTide">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Ecosystem Middle Tide -->
                        <div class="ecosystem-content" id="ecosystemMiddle">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Middle Tide Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        Also known as lower mid-littoral zone is a region that is generally submerged in the water, except during the turning of the tides. 
                                        There are barnacles, sea anemones, crabs sea star, sponges and other organisms.
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/middleTide.png" alt="middleTide">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Ecosystem Low Tide -->
                        <div class="ecosystem-content" id="ecosystemLow">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Low Tide Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        Also known as lower littoral zone is always submerged under water. It is only exposed during extremely low tide. 
                                        This region is brimming with sea creatures such as sea stars, sea anemones, sponges, sea urchin, small fish and sea cucumber
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/lowTide.png" alt="lowTide">
                                        </figure>
                                    </div>
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
            1: document.getElementById('ecosystemSplash'),
            2: document.getElementById('ecosystemHigh'),
            3: document.getElementById('ecosystemMiddle'),
            4: document.getElementById('ecosystemLow')
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
        if (showM === 'ecosystemLow') {
            currentContent = 4;
            updateContent();
        }

        leftButton.addEventListener('click', function () {
            if (currentContent === 1) {
                window.location.href = 'ecosystemIntertidal.php?show=ecosystemIntertidalZone'; 
            } else {
                currentContent--;
                updateContent();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentContent === 4) {
                window.location.href = 'intertidalLetsTry.php'; 
            } else {
                currentContent++;
                updateContent();
            }
        });
    });
</script>