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

                
                    
                    <!-- Water Contamination -->
                    <div class="x-content" id="waterContamination">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Water contamination
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        Soil erosion can lead to water contamination, 
                                        especially clogged water ways and pollution of aquatic habitats.
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface15.png" alt="surface15">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Siltation -->
                    <div class="surface-content" id="siltation">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Siltation
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        The particulate matter from other areas may settle in the water. 
                                        The sediments could cause not only inconvenience, but could also carry microorganisms that bring disease.
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface16.png" alt="surface16">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Air Pollution -->
                    <div class="surface-content" id="airPollution">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Air Pollution
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        Contaminants present in the soil can be held loose and lifted by the wind, resulting to air pollution.
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface17.png" alt="surface17">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Preventing Soil Erosion -->
                    <div class="surface-content" id="prevent">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6">Preventing Soil Erosion</h1>

                            <!-- Text -->
                            <div class="content is-halfmb-4">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-centered has-text-weight-semibold has-text-white">
                                    One of the common ways to prevent soil erosion is reforestation and increase vegetation. 
                                    Plant roots hold the soil in place.
                                </p>
                            </div>

                            <div class="columns is-vcentered is-centered">
                                <!-- First Image -->
                                <div class="column is-half-tablet is-one-third-desktop">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface18.png" alt="Surface Type 1">
                                    </figure>
                                </div>
                                <!-- Second Image -->
                                <div class="column is-half-tablet is-one-third-desktop">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface19.png" alt="Surface Type 2">
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
                        <img src="../../../image/surface20.png" alt="Surface Figure" id="einstein-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = ['waterContamination', 'siltation', 'airPollution', 'prevent'];
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
                window.location.href = 'soilLetsTry.php';
            }
        });

        leftButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                showSection(currentIndex);
            } else {
                window.location.href = 'surfaceSoil.php?show=desertification';
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


