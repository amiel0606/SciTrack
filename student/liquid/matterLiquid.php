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
    .liquid-content {
        display: none;
    }
    .liquid-content-active {
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

                <!-- Liquid Examples -->
                <div class="x-content" id="liquidExamples">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-2 mb-2 secondary-font">LIQUID</h1>
                        
                        <div class="columns is-multiline is-centered">
                            <!-- Example Image 1 -->
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <figure class="image">
                                    <img src="../../image/liquid.png" alt="Liquid1">
                                </figure>
                            </div>
                            <!-- Example Image 2 -->
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <figure class="image">
                                    <img src="../../image/liquid2.png" alt="Liquid2">
                                </figure>
                            </div>
                            <!-- Example Image 3 -->
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <figure class="image">
                                    <img src="../../image/liquid3.png" alt="Liquid3">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Liquid Definition -->
                <div class="liquid-content" id="liquidDef">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6 secondary-font">LIQUID</h1>
                        
                        <!-- Text -->
                        <div class="column ">
                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen 
                            has-text-centered has-text-weight-semibold has-text-white main-font">
                            A liquid is a nearly incompressible fluid that conforms to the shape of its container but retains a nearly constant volume independent of pressure.
                            It is one of the four fundamental states of matter, and is the only state with a definite volume but no fixed shape.

                            </p>                           
                        </div>
                        <div class="audio-icon">
                                <button id="playAudio">
                                    <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                </button>
                                <audio id="liquidAudio" src="../../sounds/liquid1.mp3"></audio>
                            </div>

                        <div class="columns is-multiline is-centered">
                            <!-- Example Image 1 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/liquid.png" alt="Liquid1">
                                </figure>
                            </div>
                            <!-- Example Image 2 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/liquid2.png" alt="Liquid2">
                                </figure>
                            </div>
                            <!-- Example Image 3 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/liquid3.png" alt="Liquid3">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Learn More About Liquid -->
                <div class="liquid-content" id="liquidLearn">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">Learn More About LIQUID</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Text Column -->
                            <div class="column is-half pl-6">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                has-text-left has-text-weight-semibold has-text-white main-font">
                                In a liquid state of matter, particles are less tightly packed as compared to liquids.
                                Liquids take the shape of the container in which they are kept.
                                Liquids are difficult to compress as particles have less space between them to move.
                                </p>
                                <div class="audio-icon2">
                                <button id="playAudio2">
                                    <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                </button>
                                <audio id="liquidAudio2" src="../../sounds/liquid2.mp3"></audio>
                            </div>
                            </div>                      
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image learn-image">
                                    <img src="../../image/lqLearn.png" alt="lqLearn">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Liquid Characteristics 1 -->
                <div class="liquid-content" id="liquidChar1">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">CHARACTERS OF LIQUID</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image char-image">
                                    <img src="../../image/lqChar1.png" alt="lqChar1">
                                </figure>
                            </div>

                            <!-- Text Column -->
                            <div class="column is-half mt-4">
                                <ul class="title is-size-4-desktop is-size-5-tablet is-size-5-mobile has-text-white has-text-weight-semibold bullets">
                                    <li class="mb-5 main-font">Liquid has a fixed volume but no fixed shape.</li>
                                    <li class="mb-5 main-font">Liquids can be compressed and a large pressure is required to compress them.</li>
                                    <li class="mb-5 main-font">Liquids are less dense than solids.</li>
                                </ul>
                                <div class="audio-icon3">
                                <button id="playAudio3">
                                    <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                </button>
                                <audio id="liquidAudio3" src="../../sounds/liquid3.mp3"></audio>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Liquid Characteristics 2 -->
                <div class="liquid-content" id="liquidChar2">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">CHARACTERS OF LIQUID</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image char-image">
                                    <img src="../../image/lqChar2.png" alt="lqChar2">
                                </figure>
                            </div>

                            <!-- Text Column -->
                            <div class="column is-half mt-4">
                                <ul class="title is-size-4-desktop is-size-5-tablet has-text-white has-text-weight-semibold bullets">
                                    <li class="mb-5 main-font">The intermolecular forces of attraction are weaker than solids.</li>
                                    <li class="mb-5 main-font">They have considerable space between the particles.</li>
                                </ul>
                                <div class="audio-icon4">
                                <button id="playAudio4">
                                    <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                </button>
                                <audio id="liquidAudio4" src="../../sounds/liquid4.mp3"></audio>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Liquid Happen -->
                <div class="liquid-content" id="liquidHappen">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">What Happens To Liquid <br> Particles When Heated?</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Text Column -->
                            <div class="column is-half pl-6">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                has-text-left has-text-weight-semibold has-text-white main-font">
                                As the liquid is heated the the kinetic energy of the molecules increase and they liquid starts to expand.
                                When the temperature reaches the boiling point of the liquid it starts boiling the phase changes from liquid to gas.
                                <div class="audio-icon5">
                                <button id="playAudio5">
                                    <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                </button>
                                <audio id="liquidAudio5" src="../../sounds/liquid5.mp3"></audio>
                                </div>
                                </p>                               
                            </div>                      
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image happen-image">
                                    <img src="../../image/lqHappen.png" alt="lqHappen">
                                </figure>
                            </div>
                        </div>
                    </div>       
                </div>

                <!-- Liquid LetsTry -->
                <div class="liquid-content" id="liquidLetsTry">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image c-image">
                                    <img src="../../image/lqCharacter.png" alt="Einstein">
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
                    <img src="../../image/lqCharacter.png" alt="Matter Figure" id="einstein-image">
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
        const liquidExamples = document.getElementById('liquidExamples');
        const liquidDef = document.getElementById('liquidDef');
        const liquidLearn = document.getElementById('liquidLearn');
        const liquidChar1 = document.getElementById('liquidChar1');
        const liquidChar2 = document.getElementById('liquidChar2');
        const liquidHappen = document.getElementById('liquidHappen');
        const liquidLetsTry = document.getElementById('liquidLetsTry');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        const audio = document.getElementById('liquidAudio');
        const audio2 = document.getElementById('liquidAudio2');
        const audio3 = document.getElementById('liquidAudio3');
        const audio4 = document.getElementById('liquidAudio4');
        const audio5 = document.getElementById('liquidAudio5');


        let currentSection = 0;
        const sections = [liquidExamples, liquidDef, liquidLearn, liquidChar1, liquidChar2, liquidHappen, liquidLetsTry];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('liquid-content-active');
                section.classList.add('liquid-content');
            });
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('liquid-content');
            sections[index].classList.add('liquid-content-active');
            playAudio(); 
            playAudio2();
            playAudio3();
            playAudio4();
            playAudio5();
        }
        function stopAudio() {
            audio.pause();
            audio.currentTime = 0; // Optionally reset audio to the beginning
        }

        function stopAudio2() {
            audio2.pause();
            audio2.currentTime = 0; // Optionally reset audio to the beginning
        }

        function stopAudio3() {
            audio3.pause();
            audio3.currentTime = 0; // Optionally reset audio to the beginning
        }

        function stopAudio4() {
            audio4.pause();
            audio4.currentTime = 0; // Optionally reset audio to the beginning
        }

        function stopAudio5() {
            audio5.pause();
            audio5.currentTime = 0; // Optionally reset audio to the beginning
        }

        function playAudio() {
            if (sections[currentSection] === liquidDef) {
                audio.play(); 
            }
        }

        function playAudio2() {
            if (sections[currentSection] === liquidLearn) {
                audio2.play(); 
            }
        }
        function playAudio3() {
            if (sections[currentSection] === liquidChar1) {
                audio3.play(); 
            }
        }

        function playAudio4() {
            if (sections[currentSection] === liquidChar2) {
                audio4.play(); 
            }
        }

        function playAudio5() {
            if (sections[currentSection] === liquidHappen) {
                audio5.play(); 
            }
        }

        rightButton.addEventListener('click', function () {
            stopAudio();
            stopAudio2();
            stopAudio3();
            stopAudio4();
            stopAudio5();
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);

                if (sections[currentSection] === liquidLetsTry) {
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
            stopAudio();
            stopAudio2();
            stopAudio3();
            stopAudio4();
            stopAudio5();
            if (currentSection === 0) {
                window.location.href = '../matterDef.php?show=matterTopic';
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);

                if (sections[currentSection] === liquidExamples) {
                    examplesButton.style.display = 'flex';
                    einsteinImage.style.display = 'block';
                }
            }
        });

        goBackButton.addEventListener('click', function () {
            stopAudio();
            stopAudio2();
            stopAudio3();
            stopAudio4();
            stopAudio5();
            hideAllSections();
            liquidHappen.classList.remove('liquid-content');
            liquidHappen.classList.add('liquid-content-active');
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            goBackbutton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            window.location.href = 'liquidQuiz.php';
        });
    });

</script>