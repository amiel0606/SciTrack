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
                        <!-- Measuring Odometer -->
                        <div class="x-content" id="measuringOdometer">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Odometer and Speedometer
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
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
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Surveyor’s wheel
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
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
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Caliper
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen
                                         has-text-left has-text-weight-semibold has-text-white main-font">
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
                                <h1 class="subtitle is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">Measuring Distance and time</h1>

                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Text Column -->
                                    <div class="column is-half pl-6">
                                        <p class="title is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-1-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white pb-2 main-font">
                                            Micrometer
                                        </p>
                                        <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                        has-text-left has-text-weight-semibold has-text-white main-font">
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

                        <!-- Measuring LetsTry -->
                        <div class="measuring-content" id="measuringLetsTry">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6" id= "letsTryButton">
                                <!-- Content Layout -->
                                <div class="columns is-centered">
                                    <!-- Image Column -->
                                    <div class="column is-half pl-6">
                                        <figure class="image example-image m-character">
                                            <img src="../../../image/measuring8.png" alt="measuring8">
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
                                <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" >
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
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const measuringOdometer = document.getElementById('measuringOdometer');
        const measuringWheel = document.getElementById('measuringWheel');
        const measuringCaliper = document.getElementById('measuringCaliper');
        const measuringMicrometer = document.getElementById('measuringMicrometer');
        const measuringLetsTry = document.getElementById('measuringLetsTry');
        const proceedToQuizButton = document.querySelector('.button.is-success');
        const goBackButton = document.querySelector('.button.is-danger');

        let currentSection = 0;
        const sections = [measuringOdometer, measuringWheel, measuringCaliper, measuringMicrometer ,measuringLetsTry];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('measuring-content-active');
                section.classList.add('measuring-content');
            });
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('measuring-content');
            sections[index].classList.add('measuring-content-active');
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);

                if (sections[currentSection] === measuringLetsTry) {
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
            if (currentSection === 0) {
                window.location.href = 'measuringDef.php?show=measuringTape';
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);

                examplesButton.style.display = 'flex';
                einsteinImage.style.display = 'block';
            }
        });

        goBackButton.addEventListener('click', function () {
            hideAllSections();
            measuringMicrometer.classList.remove('measuring-content');
            measuringMicrometer.classList.add('measuring-content-active');
            leftButton.style.display = 'flex';
            rightButton.style.display = 'flex';
            einsteinImage.style.display = 'flex';
            goBackButton.style.display = 'none';
            proceedToQuizButton.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            window.location.href = 'measuringQuiz.php';
        });
    });


</script>