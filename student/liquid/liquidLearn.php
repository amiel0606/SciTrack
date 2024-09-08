<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
</style>



<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6">Learn More About LIQUID</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Text Column -->
                            <div class="column is-half pl-6">
                                <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-left has-text-weight-semibold has-text-white">
                                In a liquid state of matter, particles are less tightly packed as compared to solids.
                                Liquids take the shape of the container in which they are kept.
                                Liquids are difficult to compress as particles have less space between them to move.
                                </p>
                            </div>
                            
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image example-image">
                                    <img src="../../image/lqLearn.png" alt="lqLearn">
                                </figure>
                            </div>
                        </div>
                        
                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6">
                            <a href="liquidDef.php">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
                                    <i class="fas fa-arrow-left button-icon"></i>
                                </button>
                            </a>
                            <a href="liquidChar1.php">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mx-2">
                                    <i class="fas fa-arrow-right button-icon"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
