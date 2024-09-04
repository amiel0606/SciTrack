<?php
    include_once('./includes/board.php');
?>

<style>
    .matter-content {
        display: none;
    }
    .matter-content-active {
        display: block;
    }
    .topic-container {
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        text-align: center;
    }
    .topic-container:hover {
        transform: scale(1.05);
    }
    .topic-container:hover figure img {
        filter: brightness(1.2);
    }
    #matterTopic{
        position: absolute; 
        top: 3%; 
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1; 
        width: 90%; 
        text-align: center;
    }
    #einstein-image{
        width: 100%;
        max-width: 25%;
        margin-right: -7%;
        margin-left: -8%;
        margin-bottom: -2%;
    }
    .navbar{
        background-color: #4A90E2 !important;
    }
    .navbar-item:hover{
        background-color: #266bbb;
        color: white;
    }
    @font-face {
        font-family: 'Avenue';
        src: url('../font/Avenue.otf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../font/Haniley.otf') format('opentype');
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
            <div class="column is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../image/board.png" alt="Board Image">
                    </figure>

                    <!-- Matter Definition -->
                    <div class="matter-content" id="matterDef">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="subtitle is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6 secondary-font">WHAT IS MATTER?</h1>
                            
                            <!-- Text -->
                            <div class="column is-four-fifths mt-6">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                has-text-centered has-text-weight-semibold has-text-white main-font">
                                Matter is anything that has mass and occupies space is called matter. 
                                A matter is made up of tiny particles called atoms. There are three states of matter. 
                                Solid, liquid, and gas.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Topic -->
                    <div class="matter-content" id="matterTopic">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center p-6">
                            <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-6 mb-2 secondary-font">CHOOSE TOPIC</h1>
                            
                            <div class="columns is-centered">
                                <!-- One-third -->
                                <div class="column is-one-third has-text-centered">
                                    <div class="title is-size-3 has-text-white topic-container main-font">
                                        <a href="./solid/matterSolid.php">
                                            <figure class="image">
                                                <img src="../image/solid.png" alt="Solid">
                                            </figure>
                                        </a>
                                        <p>SOLID</p>
                                    </div>
                                </div>

                                <!-- Two-thirds -->
                                <div class="column is-two-thirds">
                                    <div class="columns">
                                        <!-- Two-third, left -->
                                        <div class="column is-half has-text-centered">
                                            <div class="title is-size-3 has-text-white topic-container main-font">
                                                <a href="./liquid/matterLiquid.php">
                                                    <figure class="image">
                                                        <img src="../image/liquid.png" alt="Liquid">
                                                    </figure>
                                                </a>
                                                <p>LIQUID</p>
                                            </div>
                                        </div>

                                        <!-- Two-third, right -->
                                        <div class="column is-half has-text-centered">
                                            <div class="title is-size-3 has-text-white topic-container main-font">
                                                <a href="./gas/matterGas.php">
                                                    <figure class="image">
                                                        <img src="../image/gas.png" alt="Gas">
                                                    </figure>
                                                </a>
                                                <p>GAS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="examplesButton">
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon"></i>
                        </button>
                        <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mx-2" id="rightButton" style="z-index: 2;">
                            <i class="fas fa-arrow-right button-icon"></i>
                        </button>

                        <!-- Einstein Image -->
                        <img src=".././image/einstein.png" alt="Einstein Figure" id="einstein-image">
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
        const matterDef = document.getElementById('matterDef');
        const matterTopic = document.getElementById('matterTopic');
        const urlParams = new URLSearchParams(window.location.search);

        function showMatterDef() {
            matterDef.classList.add('matter-content-active');
            matterDef.classList.remove('matter-content');
            matterTopic.classList.add('matter-content');
            matterTopic.classList.remove('matter-content-active');
            rightButton.style.display = 'block';
            leftButton.style.display = 'block';
        }

        function showMatterTopic() {
            matterTopic.classList.add('matter-content-active');
            matterTopic.classList.remove('matter-content');
            matterDef.classList.add('matter-content');
            matterDef.classList.remove('matter-content-active');
            rightButton.style.display = 'none';
            leftButton.style.display = 'block'; 
        }

        rightButton.addEventListener('click', showMatterTopic);

        leftButton.addEventListener('click', function () {
            if (matterTopic.classList.contains('matter-content-active')) {
                showMatterDef();
            } else {
                window.location.href = 'studentWelcome.php?show=Lessons'; 
            }
        });

        
        if (urlParams.get('show') === 'matterTopic') {
            showMatterTopic();
        } else {
            showMatterDef();
        }
    });
</script>

