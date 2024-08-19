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
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6">GAS</h1>
                        
                        <!-- Text -->
                        <div class="column ">
                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-weight-semibold has-text-white">
                            A gas is a substance that is in a gaseous, or vaporous, state of matter. 
                            The term gas is also used in reference to the state itself when applied to matter that has the properties of a gaseous substance. 
                            Gas is one of four natural states of matter, along with liquid, solid and plasma. A gas has no fixed shape or volume.
                            </p>
                        </div>

                        <div class="columns is-multiline is-centered">
                            <!-- Example Image 1 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/gas2.png" alt="Gas2">
                                </figure>
                            </div>
                            <!-- Example Image 2 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/gas3.png" alt="Gas3">
                                </figure>
                            </div>
                            <!-- Example Image 3 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/gas.png" alt="Gas1">
                                </figure>
                            </div>
                        </div>

                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" >
                            <a href="matterGas.php">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
                                    <i class="fas fa-arrow-left button-icon"></i>
                                </button>
                            </a>
                            <a href="gasLearn.php">
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