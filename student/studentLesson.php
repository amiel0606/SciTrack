<?php
    include_once('./includes/board.php');
?>

<style>
    .einstein-image {
        width: 100%;
        max-width: 40%;
    }
    .figure-image{
        width: 100%;
        max-width: 80%;
    }
    .figure-image:hover{
        transform: scale(1.05);
    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../image/board.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 mt-6 p-6">
                        <div class="columns is-multiline is-centered mt-6 ">
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <a href="matterDef.php">
                                    <button>
                                        <figure class="image figure-image">
                                            <img src="../image/matter.png" alt="Matter">
                                            <p class="title is-size-5 has-text-white has-text-centered">MATTER</p>
                                        </figure>
                                    </button>
                                </a>
                            </div>
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <a href="">
                                    <button>
                                        <figure class="image figure-image">
                                            <img src="../image/ecosystem.png" alt="Matter">
                                            <p class="title is-size-5 has-text-white has-text-centered">ECOSYSTEM</p>
                                        </figure>
                                    </button>
                                </a>
                            </div>
                        </div>
                        
                        <div class="columns is-multiline is-centered mb-1">
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <a href="./motion/motionDef.php">
                                    <button>
                                        <figure class="image figure-image">
                                            <img src="../image/motion.png" alt="Matter">
                                            <p class="title is-size-5 has-text-white has-text-centered">MOTION</p>
                                        </figure>
                                    </button>
                                </a>
                            </div>
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <a href="">
                                    <button>
                                        <figure class="image figure-image">
                                            <img src="../image/surface.png" alt="Matter">
                                            <p class="title is-size-5 has-text-white has-text-centered">EARTH'S SURFACE</p>
                                        </figure>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="column is-full is-flex is-justify-content-flex-end mt-7 mb-6">
                            <a href="studentDashboard.php">
                                <button class="button is-success is-rounded is-size-4-widescreen is-size-5-desktop is-size-5-tablet">
                                    <i class="fas fa-arrow-left button-icon"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>