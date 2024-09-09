<?php
    include_once('./includes/board.php');
?>

<style>
    .medal-image img{
        max-width: 40%;
        height: auto;
    }
    .back-button {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
    }
    .back-button .icon i {
        color: #000;
    }
    .back-button:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }
    .motion1 {
        transform: scaleX(-1);
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

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                        <div class="column is-full is-flex is-justify-content-flex-end mb-6">
                            <div class="columns is-half ml-6 p-2">
                                <a href="./.././surfaceDef.php?show=surfaceTopic">
                                    <button class="button back-button is-success is-size-6-desktop is-size-6-tablet">
                                    <p class="has-text-white main-font">Back To Main Menu</p>
                                    </button>
                                </a>
                            </div>

                        </div>

                        <div class="columns is-centered">
                            <!-- Image Column -->
                            <div class="column is-half ">
                                <figure class="image motion1">
                                    <img src="../../../image/surface1.png" alt="surface1">
                                </figure>
                            </div>

                            <div class="column is-half is-one-fifths is-flex is-flex-direction-column align-bottom mt-5">
                                <div class="has-text-centered">
                                    <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile 
                                    has-text-white has-text-weight-semibold main-font">
                                        YOU DID GREAT!
                                    </p>
                                    <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile 
                                    has-text-white has-text-weight-semibold main-font">
                                        Here is a medal for completing the lesson 1
                                    </p>
                                </div>
                                <figure class="image is-flex is-justify-content-center medal-image mt-5 mb-4">
                                    <img src="../../../image/medal6.png" alt="medal6">
                                </figure>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


