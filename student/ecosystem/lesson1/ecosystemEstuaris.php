<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    #button{
        margin-bottom: 1%;
        margin-right: 2%;
    }
    #einstein-image{
        width: 25%;
        max-width: 25%;
        margin-right: -7%;
        margin-left: -8%;
        margin-bottom: 0%;
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
                        <h1 class="title is-size-3-mobile is-size-2-tablet has-text-white mb-6 secondary-font">The Ecosystem Estuaries</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Text Column -->
                            <div class="column is-half pl-6 mt-6">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen 
                                has-text-left has-text-weight-semibold has-text-white main-font">
                                    An estuary is a viral ecosystem because it provides people with food and job. It is unique plants and animals.
                                </p>
                            </div>
                            
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image example-image">
                                    <img src="../../../image/ecoLesson1.png" alt="ecoLesson1">
                                </figure>
                            </div>
                        </div>
                        
                        <!-- Left and Right Buttons-->
                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-5" id="examplesButton">
                            <div class="column is-full is-flex is-justify-content-flex-end" id="button">
                                <a href="./../ecosystemDef.php?show=ecosystemTopic">
                                    <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mr-4" id="leftButton">
                                        <i class="fas fa-arrow-left button-icon"></i>
                                    </button>
                                </a>
                                <a href="lesson1PopQuiz.php">
                                    <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="rightButton">
                                        <i class="fas fa-arrow-right button-icon"></i>
                                    </button>
                                </a>
                            </div>

                            <!-- Eco Image -->
                            <img src="../../../image/ecoCharacter.png" alt="Eco Figure" id="einstein-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
