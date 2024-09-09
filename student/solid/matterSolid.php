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
        transform: scaleX(-1);
    }
    .example-image {
        padding: 0.5rem;
    }
    .solid-content {
        display: none;
    }
    .solid-content-active {
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

                    <!-- Solid Examples -->
                    <div class="x-content" id="solidExamples">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-2 mb-2 secondary-font">SOLID</h1>
                            
                            <div class="columns is-multiline is-centered">
                                <!-- Example Image 1 -->
                                <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                    <figure class="image">
                                        <img src="../../image/solid.png" alt="Solid1">
                                    </figure>
                                </div>
                                <!-- Example Image 2 -->
                                <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                    <figure class="image">
                                        <img src="../../image/solid2.png" alt="Solid2">
                                    </figure>
                                </div>
                                <!-- Example Image 3 -->
                                <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                    <figure class="image">
                                        <img src="../../image/solid3.png" alt="Solid3">
                                    </figure>
                                </div>
                            </div>
                            <div class="columns is-multiline is-centered">
                                <!-- Example Image 4 -->
                                <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                    <figure class="image">
                                        <img src="../../image/solid4.png" alt="Solid4">
                                    </figure>
                                </div>
                                <!-- Example Image 5 -->
                                <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                    <figure class="image">
                                        <img src="../../image/solid5.png" alt="Solid5">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Solid Definition -->
                    <div class="solid-content" id="solidDef">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6 secondary-font">SOLID</h1>
                            
                            <!-- Text -->
                            <div class="column ">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen 
                                has-text-centered has-text-weight-semibold has-text-white main-font">
                                Solid is one of the three fundamental states of matter along with liquid, gas. 
                                The molecules in a solid are closely packed together and contain the least amount of kinetic energy. 
                                A solid is characterized by structural rigidity and resistance to a force applied to the surface.
                                </p>
                            </div>

                            <div class="audio-icon">
                                <button id="playAudio">
                                    <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                </button>
                                <audio id="matterAudio" src="../../sounds/solid1.mp3"></audio>
                            </div>

                            <div class="columns is-multiline is-centered">
                                <!-- Example Image 1 -->
                                <div class="column is-one-fifth example-image">
                                    <figure class="image">
                                        <img src="../../image/solid2.png" alt="Solid2">
                                    </figure>
                                </div>
                                <!-- Example Image 2 -->
                                <div class="column is-one-fifth example-image">
                                    <figure class="image">
                                        <img src="../../image/solid3.png" alt="Solid3">
                                    </figure>
                                </div>
                                <!-- Example Image 3 -->
                                <div class="column is-one-fifth example-image">
                                    <figure class="image">
                                        <img src="../../image/solid.png" alt="Solid1">
                                    </figure>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Learn More About Solid -->
                    <div class="solid-content" id="solidLearn">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">Learn More About SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    Solids are generally held together by ionic or strong covalent bonding, and the attractive forces between the atoms, ions, or molecules in solids are very strong. In fact, these forces are so strong that particles in a solid are held in fixed positions and have very little freedom of movement.
                                    </p>

                                    <div class="audio-icon2">
                                        <button id="playAudio2">
                                            <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                        </button>
                                        <audio id="matterAudio2" src="../../sounds/solid2.mp3"></audio>
                                    </div>

                                </div>
                               
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image learn-image">
                                        <img src="../../image/sLearn.png" alt="sLearn">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Solid Characteristics 1 -->
                    <div class="solid-content" id="solidChar1">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">CHARACTERS OF SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image char-image">
                                        <img src="../../image/sChar1.png" alt="sChar1">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-half mt-4">
                                    <ul class="title is-size-4-desktop is-size-5-tablet is-size-5-mobile has-text-white has-text-weight-semibold bullets">
                                        <li class="mb-5 main-font">Solids are known to have fixed shapes.</li>
                                        <li class="mb-5 main-font">Solids are known to have a fixed volume.</li>
                                        <li class="mb-5 main-font">Solids are known to have high density.</li>
                                    </ul>

                                    <div class="audio-icon3">
                                        <button id="playAudio3">
                                            <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                        </button>
                                        <audio id="matterAudio3" src="../../sounds/solid3.mp3"></audio>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Solid Characteristics 2 -->
                    <div class="solid-content" id="solidChar2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6 secondary-font">CHARACTERS OF SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image char-image">
                                        <img src="../../image/sChar2.png" alt="sChar2">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-half mt-4">
                                    <ul class="title is-size-4-desktop is-size-5-tablet has-text-white has-text-weight-semibold bullets">
                                        <li class="mb-5 main-font">Intermolecular forces in solids are stronger.</li>
                                        <li class="mb-5 main-font">The particles in a solid object are packed very closely together.</li>
                                    </ul>
                                    
                                    <div class="audio-icon4">
                                        <button id="playAudio4">
                                            <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                        </button>
                                        <audio id="matterAudio4" src="../../sounds/solid4.mp3"></audio>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Solid Happen -->
                    <div class="solid-content" id="solidHappen">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">What Happens To Solid <br> Particles When Heated?</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                    has-text-left has-text-weight-semibold has-text-white main-font">
                                    When a solid is heated, its molecules gain energy and vibrate faster. 
                                    A stage comes when they overcome the intermolecular force of attraction and 
                                    start moving from each other. This results in the melting of solid.
                                    </p>

                                    <div class="audio-icon5">
                                        <button id="playAudio5">
                                            <img src="../../image/speaker.png" alt="Speaker Icon" width="50">
                                        </button>
                                        <audio id="matterAudio5" src="../../sounds/solid5.mp3"></audio>
                                    </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image happen-image">
                                        <img src="../../image/sHappen.png" alt="sHappen">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Solid LetsTry -->
                    <div class="solid-content" id="solidLetsTry">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image c-image">
                                        <img src="../../image/einstein.png" alt="Einstein">
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
                        <img src="../../image/einstein.png" alt="Einstein Figure" id="einstein-image">
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
        const solidExamples = document.getElementById('solidExamples');
        const solidDef = document.getElementById('solidDef');
        const solidLearn = document.getElementById('solidLearn');
        const solidChar1 = document.getElementById('solidChar1');
        const solidChar2 = document.getElementById('solidChar2');
        const solidHappen = document.getElementById('solidHappen');
        const solidLetsTry = document.getElementById('solidLetsTry');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        const audio = document.getElementById('matterAudio');
        const audio2 = document.getElementById('matterAudio2');
        const audio3 = document.getElementById('matterAudio3');
        const audio4 = document.getElementById('matterAudio4');
        const audio5 = document.getElementById('matterAudio5');

        let currentSection = 0;
        const sections = [solidExamples, solidDef, solidLearn, solidChar1, solidChar2, solidHappen, solidLetsTry];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('solid-content-active');
                section.classList.add('solid-content');
            });
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('solid-content');
            sections[index].classList.add('solid-content-active');
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
            if (sections[currentSection] === solidDef) {
                audio.play(); 
            }
        }

        function playAudio2() {
            if (sections[currentSection] === solidLearn) {
                audio2.play(); 
            }
        }
        function playAudio3() {
            if (sections[currentSection] === solidChar1) {
                audio3.play(); 
            }
        }

        function playAudio4() {
            if (sections[currentSection] === solidChar2) {
                audio4.play(); 
            }
        }

        function playAudio5() {
            if (sections[currentSection] === solidHappen) {
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

                if (sections[currentSection] === solidLetsTry) {
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

                if (sections[currentSection] === solidExamples) {
                    examplesButton.style.display = 'flex';
                    einsteinImage.style.display = 'block';
                }
            }
        });

        goBackButton.addEventListener('click', function () {
            hideAllSections();
            solidHappen.classList.remove('solid-content');
            solidHappen.classList.add('solid-content-active');
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            goBackButton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            window.location.href = 'solidQuiz.php';
        });
    });
</script>