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
            <div class="column is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6">LIQUID</h1>
                        
                        <!-- Text -->
                        <div class="column ">
                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-weight-semibold has-text-white">
                            A liquid is a nearly incompressible fluid that conforms to the shape of its container but retains a nearly constant volume independent of pressure.
                            It is one of the four fundamental states of matter, and is the only state with a definite volume but no fixed shape.

                            </p>
                        </div>

                        <div class="columns is-multiline is-centered">
                            <!-- Example Image 1 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/liquid.png" alt="Liquid1">
                                </figure>
                            </div>
                            <!-- Example Image 2 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/liquid2.png" alt="Liquid2">
                                </figure>
                            </div>
                            <!-- Example Image 3 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/liquid3.png" alt="Liquid3">
                                </figure>
                            </div>
                        </div>

                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" >
                            <a href="matterLiquid.php">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
                                    <i class="fas fa-arrow-left button-icon"></i>
                                </button>
                            </a>
                            <a href="liquidLearn.php">
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