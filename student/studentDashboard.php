<?php
    include_once('./includes/board.php');
?>

<style>
    .studentdb {
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
    }
    .studentdb:hover {
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
                        <div class="columns is-centered">
                            <div class="columns is-multiline is-centered">
                                <div class="column is-half has-text-centered title is-size-3 studentdb">
                                    <a href="studentLesson.php">
                                        <figure class="image">
                                            <img src="../image/lesson.png" alt="Lesson Image" class="lesson-image">
                                        </figure>
                                        <p class="has-text-white">LESSON</p>
                                    </a>
                                </div>
                                <div class="column is-half has-text-centered title is-size-3 studentdb">
                                    <a href="">
                                        <figure class="image">
                                            <img src="../image/assessment.png" alt="Assessment Image" class="lesson-image">
                                        </figure>
                                        <p class="has-text-white">ASSESSMENT</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="column is-full is-flex is-justify-content-flex-end mb-6">
                            <a href="studentWelcome.php">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
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