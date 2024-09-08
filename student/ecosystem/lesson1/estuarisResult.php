<?php
    include_once('./includes/board.php');
?>

<style>
    .result-image{
        width: 100%;
        height: auto;
    }
    .result-image {
        padding: 0.5rem;
    }
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
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../../image/board2.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                        <div class="column is-full is-flex is-justify-content-flex-end">
                            <div class="columns is-half ml-6 p-2">
                                <a href="estuarisQuizCompleted.php">
                                    <button class="button close-button is-rounded is-light is-size-7-desktop" aria-label="Close">
                                        <span class="icon">
                                            <i class="fas fa-times"></i>
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="columns is-centered ">
                            <div class="column is-one-fifths">
                                <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-centered has-text-weight-semibold">
                                    GOOD JOB!
                                </p>
                                <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-centered has-text-weight-semibold">
                                    You Got
                                </p>
                                <p class="title is-size-2-widescreen is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-white has-text-centered has-text-weight-semibold">
                                    8/10
                                </p>
                            </div>
                        </div>

                        <div class="columns is-multiline is-centered">
                            <div class="column is-one-fifth">
                                <figure class="image result-image">
                                    <img src="../../../image/result.png" alt="result">
                                </figure>
                            </div>
                        </div>
                        
                        <div class="column is-full is-flex is-justify-content-flex-end mb-6">
                            <div class="columns is-half ml-6 p-2">
                                <a href="estuarisReview.php">
                                    <button class="button is-success is-size-5-desktop is-size-6-tablet">
                                        <p class="has-text-white">Review Quiz</p>
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


