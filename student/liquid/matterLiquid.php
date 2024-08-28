<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
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
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-2 mb-2">LIQUID</h1>
                        
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
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6">LIQUID</h1>
                        
                        <!-- Text -->
                        <div class="column ">
                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-weight-semibold has-text-white">
                            A liquid is a nearly incompressible fluid that conforms to the shape of its container but retains a nearly constant volume independent of pressure.
                            It is one of the four fundamental states of matter, and is the only state with a definite volume but no fixed shape.

                            </p>
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
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6">Learn More About LIQUID</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Text Column -->
                            <div class="column is-half pl-6">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                In a liquid state of matter, particles are less tightly packed as compared to liquids.
                                Liquids take the shape of the container in which they are kept.
                                Liquids are difficult to compress as particles have less space between them to move.
                                Liquids have fixed volume but no fixed shape.
                                </p>
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
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6">CHARACTERS OF LIQUID</h1>

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
                                    <li class="mb-5">Liquid has a fixed volume but no fixed shape.</li>
                                    <li class="mb-5">Liquids can be compressed. Large pressure is required to compress them.</li>
                                    <li class="mb-5">Liquids have lesser densities than solids.</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Liquid Characteristics 2 -->
                <div class="liquid-content" id="liquidChar2">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6">CHARACTERS OF SOLID</h1>

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
                                    <li class="mb-5">The intermolecular forces of attraction are weaker than solids.</li>
                                    <li class="mb-5">They have considerable space between the particles.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Liquid Happen -->
                <div class="liquid-content" id="liquidHappen">
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">What Happens To Liquid <br> Particles When Heated?</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Text Column -->
                            <div class="column is-half pl-6">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                As the liquid is heated the the kinetic energy of the molecules increase and they liquid starts to expand.
                                When the temperature reaches the boiling point of the liquid it starts boiling the phase changes from liquid to gas.
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
        const liquidExamples = document.getElementById('liquidExamples');
        const liquidDef = document.getElementById('liquidDef');
        const liquidLearn = document.getElementById('liquidLearn');
        const liquidChar1 = document.getElementById('liquidChar1');
        const liquidChar2 = document.getElementById('liquidChar2');
        const liquidHappen = document.getElementById('liquidHappen');

        let currentSection = 0;
        const sections = [liquidExamples, liquidDef, liquidLearn, liquidChar1, liquidChar2, liquidHappen];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('liquid-content-active');
                section.classList.add('liquid-content');
            });
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                currentSection++;
                hideAllSections();
                sections[currentSection].classList.remove('liquid-content');
                sections[currentSection].classList.add('liquid-content-active');
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = '../matterDef.php?show=matterTopic';
            } else if (currentSection > 0) {
                currentSection--;
                hideAllSections();
                sections[currentSection].classList.remove('liquid-content');
                sections[currentSection].classList.add('liquid-content-active');
            }
        });
    });
</script>