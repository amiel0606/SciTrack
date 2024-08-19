<?php
    include_once('./includes/board.php');
?>

<style>
    .close-button {
        border: 1px solid #000; 
        background-color: transparent;
        color: #fff;
    }
    .close-button .icon i {
        color: #000;
    }
    .close-button:hover {
        background-color: rgba(255, 255, 255, 0.6);
    }
    .icon{
        border-radius: 50%;
        padding: 1rem;
    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board2.png" alt="Board Image">
                    </figure>
                    
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <div class="column is-full is-flex is-justify-content-flex-end mt-6">
                            <div class="columns is-half ml-6 p-2  mt-6">
                                <a href="liquidQuizCompleted.php">
                                    <button class="button close-button is-rounded is-light is-size-7-desktop is-size-7-tablet mt-6" aria-label="Close">
                                        <span class="icon">
                                            <i class="fas fa-times"></i>
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="columns is-centered mb-4">
                            <div class="column is-one-fifths">
                                <p class="title is-size-1-widescreen is-size-2-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-centered has-text-weight-semibold">
                                    Wrong Answers
                                </p>
                            </div>
                        </div>
                        
                        <!-- Question with Icon -->
                        <div class="columns is-centered">
                            <div class="column is-two-thirds">
                                <div class="is-flex is-align-items-center">
                                    <span class="icon icon has-background-danger has-text-white mr-2" >
                                        <i class="fas fa-times"></i>
                                    </span>
                                    <p class="title is-size-3-widescreen is-size-4-desktop is-size-5-tablet is-size-6-mobile has-text-white has-text-left has-text-weight-semibold">
                                        1. Which of the following is not an example of a solid?
                                    </p>
                                </div>
                                <p class="subtitle is-size-4-desktop is-size-6-tablet is-size-7-mobile has-text-white p-6">
                                    D. Brick
                                </p>
                            </div>
                        </div>

                        <div class="columns is-centered mb-6">
                            <div class="column is-two-thirds">
                                <div class="is-flex is-align-items-center">
                                    <span class="icon icon has-background-danger has-text-white mr-2" >
                                        <i class="fas fa-times"></i>
                                    </span>
                                    <p class="title is-size-3-widescreen is-size-4-desktop is-size-5-tablet is-size-6-mobile has-text-white has-text-left has-text-weight-semibold">
                                        1. Which of the following is not an example of a solid?
                                    </p>
                                </div>
                                <p class="subtitle is-size-4-desktop is-size-6-tablet is-size-7-mobile has-text-white mb-6 p-6">
                                    D. Brick
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

