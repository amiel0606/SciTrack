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
                                <a href="./.././motionTopic.php">
                                    <button class="button back-button is-success is-size-6-desktop is-size-6-tablet">
                                    <p class="has-text-white">Back To Main Menu</p>
                                    </button>
                                </a>
                            </div>

                        </div>

                        <div class="columns is-centered">
                            <!-- Image Column -->
                            <div class="column is-half ">
                                <figure class="image motion1">
                                    <img src="../../../image/motion1.png" alt="motion1">
                                </figure>
                            </div>

                            <div class="column is-half is-one-fifths is-flex is-flex-direction-column align-bottom mt-5">
                                <div class="has-text-centered">
                                    <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-weight-semibold">
                                        YOU DID GREAT!
                                    </p>
                                    <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-weight-semibold">
                                        Here is a medal for completing the lesson 1
                                    </p>
                                </div>
                                <figure class="image is-flex is-justify-content-center medal-image mt-5 mb-4">
                                    <img src="../../../image/medal5.png" alt="medal5">
                                </figure>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


