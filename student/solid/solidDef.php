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
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6">SOLID</h1>
                        
                        <!-- Text -->
                        <div class="column ">
                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-weight-semibold has-text-white">
                            Solid is one of the three fundamental states of matter along with liquid, gas. 
                            The molecules in a solid are closely packed together and contain the least amount of kinetic energy. 
                            A solid is characterized by structural rigidity and resistance to a force applied to the surface

                            </p>
                        </div>

                        <div class="columns is-multiline is-centered">
                            <!-- Example Image 1 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/solid2.png" alt="Solid2">
                                </figure>
                            </div>
                            <!-- Example Image 2 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/solid3.png" alt="Solid3">
                                </figure>
                            </div>
                            <!-- Example Image 3 -->
                            <div class="column is-one-fifth example-image">
                                <figure class="image">
                                    <img src="../../image/solid.png" alt="Solid1">
                                </figure>
                            </div>
                        </div>

                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" >
                            <a href="matterSolid.php">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
                                    <i class="fas fa-arrow-left button-icon"></i>
                                </button>
                            </a>
                            <a href="solidLearn.php">
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