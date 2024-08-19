<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 100%;
        height: auto;
    }
    .example-image {
        padding: 0.5rem;
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
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-2 mb-2">SOLID</h1>
                        
                        <div class="columns is-multiline is-centered">
                            <!-- Example Image 1 -->
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <figure class="image">
                                    <img src="../../image/solid.png" alt="Solid1">
                                </figure>
                            </div>
                            <!-- Example Image 2 -->
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <figure class="image">
                                    <img src="../../image/solid2.png" alt="Solid2">
                                </figure>
                            </div>
                            <!-- Example Image 3 -->
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <figure class="image">
                                    <img src="../../image/solid3.png" alt="Solid3">
                                </figure>
                            </div>
                        </div>
                        <div class="columns is-multiline is-centered">
                            <!-- Example Image 4 -->
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <figure class="image">
                                    <img src="../../image/solid4.png" alt="Solid4">
                                </figure>
                            </div>
                            <!-- Example Image 5 -->
                            <div class="column is-2-mobile is-one-quarter-tablet example-image">
                                <figure class="image">
                                    <img src="../../image/solid5.png" alt="Solid5">
                                </figure>
                            </div>
                        </div>

                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-5">
                            <a href="./../studentTopic.php">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet ">
                                    <i class="fas fa-arrow-left button-icon"></i>
                                </button>
                            </a>
                            <a href="solidDef.php">
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
