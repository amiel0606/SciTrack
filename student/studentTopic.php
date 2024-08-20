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
        filter: brightness(1.2);
    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="column is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../image/board.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-2">CHOOSE TOPIC</h1>
                        
                        <div class="columns is-centered">
                            <!-- One-third -->
                            <div class="column is-one-third has-text-centered">
                                <div class="title is-size-3 has-text-white topic-container">
                                    <a href="./solid/matterSolid.php">
                                        <figure class="image">
                                            <img src="../image/solid.png" alt="Solid">
                                        </figure>
                                    </a>
                                    <p>SOLID</p>
                                </div>
                            </div>

                            <!-- Two-thirds -->
                            <div class="column is-two-thirds">
                                <div class="columns">
                                    <!-- Two-third, left -->
                                    <div class="column is-half has-text-centered">
                                        <div class="title is-size-3 has-text-white topic-container">
                                            <a href="./liquid/matterLiquid.php">
                                                <figure class="image">
                                                    <img src="../image/liquid.png" alt="Liquid">
                                                </figure>
                                            </a>
                                            <p>LIQUID</p>
                                        </div>
                                    </div>

                                    <!-- Two-third, right -->
                                    <div class="column is-half has-text-centered">
                                        <div class="title is-size-3 has-text-white topic-container">
                                            <a href="./gas/matterGas.php">
                                                <figure class="image">
                                                    <img src="../image/gas.png" alt="Gas">
                                                </figure>
                                            </a>
                                            <p>GAS</p>
                                        </div>
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
