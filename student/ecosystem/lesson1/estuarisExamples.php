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
                        <!-- Ecosystem Brackish -->
                        <div class="ecosystem-content" id="ecosystemBrackish">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Brackish
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
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
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Sediment
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
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
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Murky Water
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
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
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">The Ecosystem Estuaries</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Estuary
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
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
            1: document.getElementById('ecosystemBrackish'),
            2: document.getElementById('ecosystemSediment'),
            3: document.getElementById('ecosystemMurky'),
            4: document.getElementById('ecosystemEstuary')
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
        if (showM === 'ecosystemEstuary') {
            currentContent = 4;
            updateContent();
        }

        leftButton.addEventListener('click', function () {
            if (currentContent === 1) {
                window.location.href = 'ecosystemEstuaris.php'; 
            } else {
                currentContent--;
                updateContent();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentContent === 4) {
                window.location.href = 'estuarisLetsTry.php'; 
            } else {
                currentContent++;
                updateContent();
            }
        });
    });
</script>