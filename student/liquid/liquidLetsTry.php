<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 100%;
        height: auto;
    }
    .letstry{
        width: 110%;
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
                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image example-image">
                                    <img src="../../image/lqCharacter.png" alt="lqCharacter">
                                </figure>
                            </div>

                            <!-- Image Column -->
                            <div class="column is-half pr-6 mr-6">
                                <figure class="image letstry">
                                    <img src="../../image/letstry.png" alt="letstry">
                                </figure>
                            </div>
                        </div>
                        
                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" >
                            <a href="liquidHappen.php">
                                <button class="button is-danger is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile has-text-white">
                                    Go Back
                                </button>
                            </a>
                            <a href="liquidQuiz.php">
                                <button class="button is-success is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile mx-2 has-text-white">
                                    Proceed to quiz
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>