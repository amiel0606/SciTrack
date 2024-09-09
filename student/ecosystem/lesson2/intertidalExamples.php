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
    #letsTryButton {
        z-index: 10;
    }
    .m-character img{
        width: 100%;
        height: auto;
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
                        <!-- Ecosystem Splash -->
                        <div class="x-content" id="ecosystemSplash">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Splash Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        The spray zone, also known as the upper littoral zone is a region in the intertidal zone that is submerged in the water. 
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
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            High Tide Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        The high tide zone, also known as the upper mid-littoral zone, is a region that is submerged in the water only during high tide. 
                                        Seaweeds, barnacles and crabs are some of the organisms found here.
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
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Middle Tide Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        The lower mid-littoral zone is a region that is generally submerged in the water, except during the turning of the tides. 
                                        There are barnacles, sea anemones, crabs, starfishes, sponges and other organisms.
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
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Low Tide Zone
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        Also known as the lower littoral zone, the low tide zone is always submerged under water. It is exposed only during extremely low tide. 
                                        This region is brimming with sea creatures such as starfishes, sea anemones, sponges, sea urchin, small fish and sea cucumber
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

                        <!-- Ecosystem LetsTry -->
                        <div class="ecosystem-content" id="ecosystemLetsTry">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image m-character">
                                            <img src="../../../image/ecoCharacter2.png" alt="ecoCharacter2">
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
                                <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="letsTryButton">
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
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const ecosystemSplash = document.getElementById('ecosystemSplash');
        const ecosystemHigh = document.getElementById('ecosystemHigh');
        const ecosystemMiddle = document.getElementById('ecosystemMiddle');
        const ecosystemLow = document.getElementById('ecosystemLow');
        const ecosystemLetsTry = document.getElementById('ecosystemLetsTry');
        const proceedToQuizButton = document.querySelector('.button.is-success');
        const goBackButton = document.querySelector('.button.is-danger');

        let currentSection = 0;
        const sections = [ecosystemSplash, ecosystemHigh, ecosystemMiddle, ecosystemLow ,ecosystemLetsTry];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('ecosystem-content-active');
                section.classList.add('ecosystem-content');
            });
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('ecosystem-content');
            sections[index].classList.add('ecosystem-content-active');
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);

                if (sections[currentSection] === ecosystemLetsTry) {
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
                window.location.href = 'ecosystemIntertidal.php?show=ecosystemIntertidalZone';
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);

                examplesButton.style.display = 'flex';
                einsteinImage.style.display = 'block';
            }
        });

        goBackButton.addEventListener('click', function () {
            hideAllSections();
            ecosystemSplash.classList.remove('ecosystem-content');
            ecosystemSplash.classList.add('ecosystem-content-active');
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            goBackButton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            window.location.href = 'intertidalQuiz.php';
        });
    });


</script>