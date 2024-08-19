<?php
    include_once('./includes/board.php');
?>

<style>
    .button.is-text {
        transition: color 0.3s ease;
        background-color: rgba(255, 255, 255, 0.1);
        text-decoration: none;
    }

    .button.is-text:hover,
    .button.is-text.selected {
        background-color: #5eac92;
        color: white;
    }
    .modal {
        display: none;
        align-items: center;
        justify-content: center;
    }

    .modal.is-active {
        display: flex;
    }

    .modal-content {
        padding: 20px;
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

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-4">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mt-6 mb-6">POP UP QUIZ!</h1>

                        <!-- Question -->
                        <div class="columns is-centered">
                            <p class="title is-size-6-mobile is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-centered has-text-white mt-2 mb-6">
                                Which state of matter fills the entire space of its container?
                            </p>
                        </div>

                        <!-- Buttons Answer -->
                        <div class="columns is-centered is-multiline">
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">A. Solid</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">B. Liquid</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">C. Gas</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">D. None of the above</p>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Correct Answer Modal -->
<div id="correctModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <figure class="image">
            <img src="../../image/correct.gif" alt="Correct Answer">
        </figure>
    </div>
</div>

<!-- Incorrect Answer Modal -->
<div id="incorrectModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <figure class="image">
            <img src="../../image/incorrect.gif" alt="Incorrect Answer">
        </figure>
    </div>
</div>

<script src="./js/script.js"></script>