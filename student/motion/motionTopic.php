<?php
    include_once('./includes/board.php');
?>

<style>
    .topic-container {
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
    }
    .topic-container:hover {
        transform: scale(1.05);
    }
    .topic-container:hover figure img {
        filter: brightness(1.1);
    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="column is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-2">CHOOSE TOPIC</h1>
                        
                        <div class="columns is-centered">
                            <!-- Lesson 1 and 2 -->
                            <div class="column is-two-thirds">
                                <div class="columns">
                                    <div class="column is-half has-text-centered">
                                        <div class="title is-size-3-dekstop is-size-4-tablet has-text-white has-text-weight-semibold topic-container">
                                            <a href="./lesson1/motionDistance.php">
                                                <figure class="image">
                                                    <img src="../../image/motion1.png" alt="motion1">
                                                </figure>
                                            </a>
                                            <p>Lesson 1: What is Motion?</p>
                                        </div>
                                    </div>

                                    <div class="column is-half has-text-centered">
                                        <div class="title is-size-3-dekstop is-size-4-tablet has-text-white has-text-weight-semibold topic-container">
                                            <a href="./lesson2/measuringDef.php">
                                                <figure class="image">
                                                    <img src="../../image/motion2.png" alt="motion2">
                                                </figure>
                                            </a>
                                            <p>Lesson 2: Measuring Distance and Time</p>
                                        </div>
                                            
                                            <!-- Button in bottom-right corner of Lesson 2 -->
                                            <a href="motionDef.php" class="is-align-self-flex-end ml-6 pl-6">
                                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mt-2">
                                                    <i class="fas fa-arrow-left button-icon"></i>
                                                </button>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
