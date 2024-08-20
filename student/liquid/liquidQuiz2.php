<?php
    include_once('./includes/board.php');
?>

<style>
    .button.is-text {
        transition: color 0.3s ease;
        text-decoration: none;
    }

    .button.is-text:hover {
        background-color: #32a774;
        color: white;
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

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-4">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mt-6 mb-6">QUIZ</h1>

                        <!-- Question -->
                        <div class="columns is-centered">
                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-white mt-2 mb-6">
                                2. Something that takes up space and has mass is called:
                            </p>
                        </div>

                        <!-- Buttons Answer -->
                        <div class="columns is-centered is-multiline">
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">A. Volume</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">B. Matter</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">C. Mass</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">D. Density</p>
                                </button>
                            </div>

                            <!-- Left and Right Buttons-->
                            <div class="column is-full is-flex is-justify-content-flex-end mt-6 mb-4">
                                <a href="liquidQuiz1.php">
                                    <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
                                        <i class="fas fa-arrow-left button-icon"></i>
                                    </button>
                                </a>
                                <a href="liquidQuiz3.php" class="ml-2">
                                    <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
                                        <i class="fas fa-arrow-right button-icon"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>