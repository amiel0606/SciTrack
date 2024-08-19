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

                    <!-- Quiz 1 -->
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-4" id="solidQuiz1">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mt-6 mb-6">QUIZ</h1>

                        <div class="columns is-centered">
                            <p class="title is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-white mt-2 mb-6">
                                1. Which of the following is not an example of a solid?
                            </p>
                        </div>

                        <!-- Buttons Answer -->
                        <div class="columns is-centered is-multiline">
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">A. Milk</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">B. Chair</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">C. Table</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">D. Brick</p>
                                </button>
                            </div>

                            <!-- Left and Right Buttons-->
                            <div class="column is-full is-flex is-justify-content-flex-end mt-6 mb-6">
                                <a href="solidLetsTry.php">
                                    <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
                                        <i class="fas fa-arrow-left button-icon"></i>
                                    </button>
                                </a>
                                <a href="solidQuiz2.php" class="ml-2">
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