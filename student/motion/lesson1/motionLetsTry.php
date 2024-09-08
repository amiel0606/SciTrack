<?php
    include_once('./includes/board.php');
?>

<style>
    .example-image img {
        width: 100%;
        height: auto;
    }
    .m-character img{
        transform: scaleX(-1);
        width: 100%;
        height: auto;
    }
</style>



<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../../image/board.png" alt="Board Image">
                    </figure>

                    <!-- LetsTry -->
                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <!-- Content Layout -->
                        <div class="columns is-centered">
                            <!-- Image Column -->
                            <div class="column is-half pl-6">
                                <figure class="image example-image m-character">
                                    <img src="../../../image/motion1.png" alt="motion1">
                                </figure>
                            </div>

                            <!-- Image Column -->
                            <div class="column is-half pr-6 mr-6">
                                <figure class="image letstry">
                                    <img src="../../../image/letstry.png" alt="letstry">
                                </figure>
                            </div>
                        </div>
                        
                    
                        <!-- Go Back and Proceed Button -->
                        <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" >
                            <a href="motionSpeed.php?show=motionExample3">
                                <button class="button is-danger is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile has-text-white">
                                    Go Back
                                </button>
                            </a>
                            <a href="motionQuiz.php">
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
