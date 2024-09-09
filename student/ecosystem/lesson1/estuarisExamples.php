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
    .m-character img{
        width: 100%;
        height: auto;
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

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <!-- Ecosystem Brackish -->
                        <div class="x-content" id="ecosystemBrackish">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Brackish
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                            An estuary is found in an area where the river meets the sea. 
                                            The water in an estuary is characterized to be between saltwater and fresh water.
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/brackish.png" alt="brackish">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Ecosystem Sediment -->
                        <div class="ecosystem-content" id="ecosystemSediment">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Sediment
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        Nutrient are transported and trapped in the sediment as water flows. 
                                        Sediment are the particles such as sand and soil which settle on the side and bottom  of water bodies
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/sediment.png" alt="sediment">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Ecosystem Murky -->
                        <div class="ecosystem-content" id="ecosystemMurky">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Murky Water
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        The murky water in an estuary is due to the presence of sediments. 
                                        This provides a good camouflage for the small organism living in the area it protects them from potential predators 
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/murky.png" alt="murky">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Ecosystem Estuary -->
                        <div class="ecosystem-content" id="ecosystemEstuary">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Estuary
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
                                        An estuary, characterized by having brackish water, is home to many organisms. 
                                        Its components interact with one another to support life in this ecosystem
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/estuary.png" alt="estuary">
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
                                            <img src="../../../image/ecoCharacter.png" alt="ecoCharacter">
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
                            <img src="../../../image/ecoCharacter.png" alt="Eco Figure" id="einstein-image">
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
        const ecosystemBrackish = document.getElementById('ecosystemBrackish');
        const ecosystemSediment = document.getElementById('ecosystemSediment');
        const ecosystemMurky = document.getElementById('ecosystemMurky');
        const ecosystemEstuary = document.getElementById('ecosystemEstuary');
        const ecosystemLetsTry = document.getElementById('ecosystemLetsTry');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');

        let currentSection = 0;
        const sections = [ecosystemBrackish, ecosystemSediment, ecosystemMurky, ecosystemEstuary ,ecosystemLetsTry];

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
                    goBackbutton.style.display = 'flex';
                    proceedToQuizButton.style.display = 'flex';
                } else {
                    examplesButton.style.display = 'flex';
                    einsteinImage.style.display = 'block';
                }
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'ecosystemEstuaris.php';
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);

                if (sections[currentSection] === ecosystemExamples) {
                    examplesButton.style.display = 'flex';
                    einsteinImage.style.display = 'block';
                }
            }
        });

        goBackButton.addEventListener('click', function () {
            hideAllSections();
            ecosystemEstuary.classList.remove('ecosystem-content');
            ecosystemEstuary.classList.add('ecosystem-content-active');
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            goBackbutton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            window.location.href = 'estuarisQuiz.php';
        });
    });

</script>