<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .measuring-content {
        display: none;
    }

    .measuring-content.active {
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

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <!-- Measuring Odometer -->
                        <div class="measuring-content" id="measuringOdometer">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Odometer and Speedometer
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        Vehicles have a build-in odometer, an electric device that measures distance. 
                                        It works hand in hand with a speedometer which measures how fast a vehicle travels.
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/measuring4.png" alt="measuring4">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Measuring Wheel -->
                        <div class="measuring-content" id="measuringWheel">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Surveyor’s wheel
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        It is an instrument that is used to measure short distances on the road or on land. 
                                        One turn of the wheel is calibrated to a certain distance.
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/measuring5.png" alt="measuring5">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Measuring Caliper -->
                        <div class="measuring-content" id="measuringCaliper">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Caliper
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        The caliper is a device with two tips that are placed on both ends of the object being measured. 
                                        Once object is secured in between the tips, the object can be removed and the length can be determined.
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/measuring6.png" alt="measuring6">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Measuring Micrometer -->
                        <div class="measuring-content" id="measuringMicrometer">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-left has-text-weight-semibold has-text-white pb-2">
                                            Micrometer
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                        A micrometer works in the same way. It looks like a c-clamp. 
                                        It is used to take very fine measurements such as the thickness of paper or a leaf.
                                        </p>
                                    </div>
                                    
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image">
                                            <img src="../../../image/measuring7.png" alt="measuring7">
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

                            <!-- Motion Image -->
                            <img src="../../../image/measuring8.png" alt="Motion Figure" id="einstein-image">
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
            1: document.getElementById('measuringOdometer'),
            2: document.getElementById('measuringWheel'),
            3: document.getElementById('measuringCaliper'),
            4: document.getElementById('measuringMicrometer')
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
        if (showM === 'measuringMicrometer') {
            currentContent = 4;
            updateContent();
        }

        leftButton.addEventListener('click', function () {
            if (currentContent === 1) {
                window.location.href = 'measuringDef.php?show=measuringTape'; 
            } else {
                currentContent--;
                updateContent();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentContent === 4) {
                window.location.href = 'measuringLetsTry.php'; 
            } else {
                currentContent++;
                updateContent();
            }
        });
    });
</script>