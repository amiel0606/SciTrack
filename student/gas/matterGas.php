<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 100%;
        height: auto;
    }
    .c-image img {
        width: 100%;
        height: auto;
    }
    .example-image {
        padding: 0.5rem;
    }
    .gas-content {
        display: none;
    }
    .gas-content-active {
        display: block;
    }
    .learn-image img, .char-image img, .happen-image img {
        width: 70%;
        height: auto;
    }
    .bullets {
        list-style-type: disc;
        padding-left: 1.5rem;
    }
    #einstein-image{
        width: 100%;
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
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                    </figure>

                    <!-- Gas Examples -->
                    <div class="x-content" id="gasExamples">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-2 mb-2 secondary-font">GAS</h1>
                            
                            <div class="columns is-multiline is-centered">
                                <!-- Example Image 1 -->
                                <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                    <figure class="image">
                                        <img src="../../image/gas2.png" alt="Gas2">
                                    </figure>
                                </div>
                                <!-- Example Image 2 -->
                                <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                    <figure class="image">
                                        <img src="../../image/gas3.png" alt="Gas3">
                                    </figure>
                                </div>
                                <!-- Example Image 3 -->
                                <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                    <figure class="image">
                                        <img src="../../image/gas4.png" alt="Gas4">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gas Definition -->
                    <div class="gas-content" id="gasDef">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6 secondary-font">GAS</h1>
                            
                            <!-- Text -->
                            <div class="column ">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen 
                                has-text-centered has-text-weight-semibold has-text-white main-font">
                                A gas is a substance that is in a gaseous, or vaporous, state of matter. 
                                The term gas is also used in reference to the state itself when applied to matter that has the properties of a gaseous substance. 
                                Gas is one of the three natural states of matter, along with solids and liquids. A gas has no fixed shape or volume.
                                </p>
                            </div>

                            <div class="columns is-multiline is-centered">
                                <!-- Example Image 1 -->
                                <div class="column is-one-fifth example-image">
                                    <figure class="image">
                                        <img src="../../image/gas2.png" alt="Gas2">
                                    </figure>
                                </div>
                                <!-- Example Image 2 -->
                                <div class="column is-one-fifth example-image">
                                    <figure class="image">
                                        <img src="../../image/gas3.png" alt="Gas3">
                                    </figure>
                                </div>
                                <!-- Example Image 3 -->
                                <div class="column is-one-fifth example-image">
                                    <figure class="image">
                                        <img src="../../image/gas.png" alt="Gas1">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Learn More About Gas -->
                    <div class="gas-content" id="gasLearn">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">Learn More About GAS</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    Gas is the state of matter in which the particles are far apart, fast-moving and not organised in any particular way.
                                    Gases are substances that exist in the gaseous state, which is one of the three fundamental states of matter.
                                    Gases are highly compressible and feature very large intermolecular distances.
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image learn-image">
                                        <img src="../../image/gLearn.png" alt="gLearn">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gas Characteristics 1 -->
                    <div class="gas-content" id="gasChar1">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">CHARACTERS OF GAS</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image char-image">
                                        <img src="../../image/gChar1.png" alt="gChar1">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-half mt-4">
                                    <ul class="title is-size-4-desktop is-size-5-tablet is-size-5-mobile has-text-white has-text-weight-semibold bullets">
                                        <li class="mb-5 main-font">Gases have neither definite shapenor definite volume. They expand to the size of their container.</li>
                                        <li class="mb-5 main-font">Gases are fluid, and flow easily.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gas Characteristics 2 -->
                    <div class="gas-content" id="gasChar2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">CHARACTERS OF GAS</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image char-image">
                                        <img src="../../image/gChar2.png" alt="gChar2">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-half mt-4">
                                    <ul class="title is-size-4-desktop is-size-5-tablet has-text-white has-text-weight-semibold bullets">
                                        <li class="mb-5 main-font">Gases have low density, unless compressed. Being made of tiny particles in a large, open space, gases are very compressible.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gas Happen -->
                    <div class="gas-content" id="gasHappen">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">What Happens To Gas <br> Particles When Heated?</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    Heating a gas increases the kinetic energy of the particles, causing the gas to expand. 
                                    In order to keep the pressure constant, the volume of the container must be increased when a gas is heated.
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image happen-image">
                                        <img src="../../image/gHappen.png" alt="gHappen">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gas LetsTry -->
                    <div class="gas-content" id="gasLetsTry">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image c-image">
                                        <img src="../../image/gCharacter.png" alt="Einstein">
                                    </figure>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-half pr-6 mr-6">
                                    <figure class="image letstry">
                                        <img src="../../image/letstry.png" alt="letstry">
                                    </figure>
                                </div>
                            </div>
                            
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

                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-5" id="examplesButton">
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon"></i>
                        </button>
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mx-2" id="rightButton" style="z-index: 2;">
                            <i class="fas fa-arrow-right button-icon"></i>
                        </button>

                        <!-- Einstein Image -->
                        <img src="../../image/gCharacter.png" alt="Matter Figure" id="einstein-image">
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
        const gasExamples = document.getElementById('gasExamples');
        const gasDef = document.getElementById('gasDef');
        const gasLearn = document.getElementById('gasLearn');
        const gasChar1 = document.getElementById('gasChar1');
        const gasChar2 = document.getElementById('gasChar2');
        const gasHappen = document.getElementById('gasHappen');
        const gasLetsTry = document.getElementById('gasLetsTry');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');

        let currentSection = 0;
        const sections = [gasExamples, gasDef, gasLearn, gasChar1, gasChar2, gasHappen, gasLetsTry];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('gas-content-active');
                section.classList.add('gas-content');
            });
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('gas-content');
            sections[index].classList.add('gas-content-active');
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);

                if (sections[currentSection] === gasLetsTry) {
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
                window.location.href = '../matterDef.php?show=matterTopic';
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);

                if (sections[currentSection] === gasExamples) {
                    examplesButton.style.display = 'flex';
                    einsteinImage.style.display = 'block';
                }
            }
        });

        goBackButton.addEventListener('click', function () {
            hideAllSections();
            gasHappen.classList.remove('gas-content');
            gasHappen.classList.add('gas-content-active');
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            goBackbutton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            window.location.href = 'gasQuiz.php';
        });
    });

</script>
