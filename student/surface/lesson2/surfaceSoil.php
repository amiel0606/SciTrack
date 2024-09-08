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

                
                    
                    <!-- soil -->
                    <div class="x-content" id="soil">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        Soil is an essential resource to everyone. Many living things rely on soil for food and shelter. 
                                        Soil is vital to agriculture and industry. Soil is an essential part of the land which homes are built
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface11.png" alt="surface11">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Soil Erosion -->
                    <div class="surface-content" id="soilErosion">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Soil Erosion
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        It is naturally occurring process that affects all land forms. 
                                        It refers to the wearing away or removal of the topmost part of the soil by natural forces of water and wind
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface12.png" alt="surface12">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Soil Detachment -->
                    <div class="surface-content" id="soilDetachment">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Soil Detachment
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        It occurs due to the effect of water, wind, or biological agents. 
                                        These natural agents move and transport soil to other places where they accumulate over time.
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface13.png" alt="surface13">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desertification -->
                    <div class="surface-content" id="desertification">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Text Column -->
                                <div class="column is-half pl-6">
                                    <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                        Desertification
                                    </p>
                                    <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        If the nutrient-rich topsoil is removed from an agricultural land, 
                                        the land will eventually be infertile and dry.
                                    </p>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image example-image">
                                        <img src="../../../image/surface14.png" alt="surface14">
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
        const sections = ['soil', 'soilErosion', 'soilDetachment', 'desertification'];
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
                window.location.href = 'lesson2PopQuiz.php';
            }
        });

        leftButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                showSection(currentIndex);
            } else {
                window.location.href = './.././surfaceDef.php?show=surfaceTopic';
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


