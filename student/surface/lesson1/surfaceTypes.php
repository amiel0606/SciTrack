<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .surface-content {
        display: none;
    }
    .surface-content-active {
        display: block;
    }
    #button{
        margin-bottom: -0.5%;
        margin-right: 2%;
    }
    #einstein-image{
        width: 25%;
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
                        <img src="../../../image/board.png" alt="Board Image">
                    </figure>

                
                    <!-- Surface Types -->
                    <div class="x-content" id="surfaceTypes">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-5-mobile is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered mb-2">
                                Three types of weathering: physical weathering, chemical weathering and biological weathering
                            </h1>
                            
                            <!-- Three Types centered -->
                            <div class="columns is-flex is-vcentered is-centered is-gapless is-justify-content-center ml-6 p-6">
                                <!-- First Image and Description -->
                                <div class="column is-one-third has-text-centered">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface4.png" alt="Surface Type 1">
                                    </figure>
                                    <p class="subtitle is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mr-6 pr-6 mt-2">
                                        Physical Weathering
                                    </p>
                                </div>
                                <!-- Second Image and Description -->
                                <div class="column is-one-third has-text-centered">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface6.png" alt="Surface Type 2">
                                    </figure>
                                    <p class="subtitle is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mr-6 pr-6 mt-2">
                                        Chemical Weathering
                                    </p>
                                </div>
                                <!-- Third Image and Description -->
                                <div class="column is-one-third has-text-centered">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface7.png" alt="Surface Type 3">
                                    </figure>
                                    <p class="subtitle is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mr-6 pr-6 mt-2">
                                        Biological Weathering
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Physical -->
                    <div class="surface-content" id="surfacePhysical">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Weathering and Soil Formation</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Physical Weathering
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        It is also known as mechanical weathering, It may be a natural or man-made process. 
                                        There are many agents that cause physical weathering
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface8.png" alt="surface8">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Chemical -->
                    <div class="surface-content" id="surfaceChemical">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Weathering and Soil Formation</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Chemical Weathering
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        It occurs when substances in the air or water mix with substances found in rocks and minerals, 
                                        causing them to break down and crumble easily to wear off
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface9.png" alt="surface9">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Biological -->
                    <div class="surface-content" id="surfaceBiological">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6">Biological Weathering</h1>

                            <!-- Text -->
                            <div class="content is-halfmb-4">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-centered has-text-weight-semibold has-text-white">
                                    It occurs when living organisms break down rocks. Plant roots and soil organisms cause biological weathering 
                                </p>
                            </div>

                            <div class="columns is-vcentered is-centered">
                                <!-- First Image -->
                                <div class="column is-half-tablet is-one-third-desktop">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface10.png" alt="Surface Type 1">
                                    </figure>
                                </div>
                                <!-- Second Image -->
                                <div class="column is-half-tablet is-one-third-desktop">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface7.png" alt="Surface Type 2">
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

                        <!-- Surface Image -->
                        <img src="../../../image/surface1.png" alt="Surface Figure" id="einstein-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = ['surfaceTypes', 'surfacePhysical', 'surfaceChemical', 'surfaceBiological'];
        let currentIndex = 0;

        const contentSections = sections.map(id => document.getElementById(id));
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');

        function showSection(index) {
            contentSections.forEach((section, i) => {
                if (i === index) {
                    section.classList.add('motion-content-active');
                    section.style.display = 'block';
                } else {
                    section.classList.remove('motion-content-active');
                    section.style.display = 'none';
                }
            });
        }

        rightButton.addEventListener('click', () => {
            if (currentIndex < sections.length - 1) {
                currentIndex++;
                showSection(currentIndex);
            } else if (currentIndex === sections.length - 1) {
                window.location.href = 'surfaceLetsTry.php';
            }
        });

        leftButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                showSection(currentIndex);
            } else {
                window.location.href = 'surfaceWeathering.php?show=surfaceErosion';
            }
        });

        // Check URL for 'show' parameter and set currentIndex accordingly
        const urlParams = new URLSearchParams(window.location.search);
        const showSectionId = urlParams.get('show');
        if (showSectionId && sections.includes(showSectionId)) {
            currentIndex = sections.indexOf(showSectionId);
        }
        
        showSection(currentIndex);
    });
</script>


