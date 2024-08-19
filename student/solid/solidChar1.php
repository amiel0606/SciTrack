<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 70%;
        height: auto;
    }
    .bullets {
        list-style-type: disc;
        padding-left: 1.5rem;
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
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6">CHARACTERS OF SOLID</h1>

                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image example-image">
                                    <img src="../../image/sChar1.png" alt="sChar1">
                                </figure>
                            </div>

                            <!-- Text Column -->
                            <div class="column is-half mt-4">
                                <ul class="title is-size-4-desktop is-size-5-tablet is-size-5-mobile has-text-white has-text-weight-semibold bullets">
                                    <li class="mb-5">Solids are known to have fixed shapes.</li>
                                    <li class="mb-5">Solids are known to have a fixed volume.</li>
                                    <li class="mb-5">Solids are known to have high density.</li>
                                </ul>
                            </div>
                            
                        </div>
                        
                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" >
                            <a href="solidLearn.php">
                                <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet">
                                    <i class="fas fa-arrow-left button-icon"></i>
                                </button>
                            </a>
                            <a href="solidChar2.php">
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