<?php
    include_once('./includes/board.php');
?>

<style>
    .studentdb {
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        max-width: 70%;
        width: 100%;
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

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6  p-6">
                        <div class="columns is-centered">

                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mb-6">CHOOSE TOPIC</h1>

                            <div class="columns is-multiline is-centered ml-6">
                                
                                <div class="column is-half has-text-centered title is-size-3">
                                    <a href="studentLesson.php">
                                        <figure class="image studentdb ml-6">
                                            <img src="../image/river.png" alt="Lesson Image" class="lesson-image">
                                        </figure>
                                        <p class="has-text-white mr-6 mt-3">Lesson 1: The Ecosystem Estuaries</p>
                                    </a>
                                </div>
                                <div class="column is-half has-text-centered title is-size-3">
                                    <a href="">
                                        <figure class="image studentdb ml-6">
                                            <img src="../image/beach.png" alt="Assessment Image" class="lesson-image">
                                        </figure>
                                        <p class="has-text-white mr-6 mt-3">Lesson 2: The Ecosystem in the Intertidal Zone</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                    <h1 class="title is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-white mt-6 "></h1>
                                          
                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6 mr-" >
                            <a href="ecosystemSecond.php">
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