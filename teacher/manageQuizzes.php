<?php
include_once './includes/sidebar.php';
?>
<style>
    .column {
        border-radius: 10px;
    }

    :root {
        --bulma-warning-h: 48deg;
        --bulma-warning-l: 77%;
    }

    .locked {
        background-color: #818589;
        opacity: .5;
        position: relative;
        border-radius: 15px;
    }

    .lock-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        border-radius: 5px;
    }

    .lock-overlay svg {
        width: 64px;
        height: 64px;
        fill: #fff;
    }

    .no-way {
        display: none;
    }

    .box {
        background-color: #faf9f5;
    }

    .hehe {
        width: 400px;
        margin-left: 950px;
        align-items: center;
        margin-top: 300px;
    }

    ::-webkit-datetime-edit {
        padding: 1em;
    }

    ::-webkit-datetime-edit-fields-wrapper {
        background: white;
    }

    ::-webkit-datetime-edit-text {
        color: gray;
        padding: 0 0.3em;
    }

    ::-webkit-datetime-edit-month-field {
        color: gray;
    }

    ::-webkit-datetime-edit-day-field {
        color: gray;
    }

    ::-webkit-datetime-edit-year-field {
        color: gray;
    }

    ::-webkit-inner-spin-button {
        display: none;
    }

    ::-webkit-calendar-picker-indicator {
        background: url('../image/calendar-regular.svg') no-repeat center;
        background-size: 16px 16px;
        cursor: pointer;
    }

    .lesson-card {
        border-radius: 10px;
        padding: 1rem;
    }

    .lesson-card.locked {
        background-color: #818589;
        opacity: 0.5;
        position: relative;
    }

    .lesson-card img {
        border-radius: 10px;
    }

    .lesson-content {
        background-color: #f4f4f4;
        padding: 1rem;
        border-radius: 10px;
    }

    .lesson-content .icon {
        float: right;
    }

    .is-scrollable {
        max-height: 80vh;
        overflow-y: auto;
    }

    .lesson-content {
        min-height: 200px;
        /* Adjust the height as needed */
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        /* Center text horizontally */
    }

    .lesson-card {
        min-height: 200px;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .lesson-card img {
        max-width: 100%;
        height: 200px;
        max-height: 100%;
        object-fit: contain;
    }

    .icon {
        margin-top: 15px;
        /* Add spacing for the play icon */
    }
</style>

<body>
    <div class="container mt-5">
        <p class="title has-text-centered">Manage Questions</p>
        <!-- Matter Row -->
        <div class="columns box has-shadow is-multiline is-flex is-align-items-center">
            <div class="column is-one-quarter">
                <div class="lesson-card has-background-danger-light has-shadow">
                    <figure class="image">
                        <img src="../image/matterL.png" alt="Matter">
                    </figure>
                </div>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="solid" data-target="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">First Quarter Lesson 1</p>
                    <h3 class="title is-4">SOLID</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="liquid" data-target="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">First Quarter Lesson 2</p>
                    <h3 class="title is-4">LIQUID</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="gas" data-target="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">First Quarter Lesson 3</p>
                    <h3 class="title is-4">GAS</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
        </div>

        <!-- Ecosystem Row -->
        <div class="columns box has-shadow is-multiline is-flex is-align-items-center">
            <div class="column is-one-quarter">
                <div class="lesson-card has-background-grey has-shadow">
                    <figure class="image">
                        <img src="../image/eco.png" alt="Ecosystem">
                    </figure>
                </div>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="estuaries" data-target="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">Second Quarter Ecosystem Lesson 1</p>
                    <h3 class="title is-4">ESTUARIES</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="intertidal" data-target="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">Second Quarter Ecosystem Lesson 2</p>
                    <h3 class="title is-4">INTERTIDAL ZONE</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
        </div>

        <!-- Motion Row -->
        <div class="columns box has-shadow is-multiline is-flex is-align-items-center">
            <div class="column is-one-quarter">
                <div class="lesson-card has-background-success has-shadow">
                    <figure class="image">
                        <img src="../image/motion.png" alt="Motion">
                    </figure>
                </div>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="motion" data-target="typeOfTest" data-traget="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">Third Quarter Lesson 1</p>
                    <h3 class="title is-4">WHAT IS MOTION</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="measure" data-target="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">Third Quarter Lesson 2</p>
                    <h3 class="title is-4">MEASURING DISTANCE AND TIME</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
        </div>

        <!-- Earth's Surface Row -->
        <div class="columns box has-shadow is-multiline is-flex is-align-items-center">
            <div class="column is-one-quarter">
                <div class="lesson-card has-background-warning has-shadow">
                    <figure class="image">
                        <img src="../image/earth.png" alt="Earth's Surface">
                    </figure>
                </div>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="surfaceerosion" data-target="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">Fourth Quarter Lesson 1</p>
                    <h3 class="title is-4">SURFACE EROSION</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" data-lesson="surfaceweathering" data-target="typeOfTest"
                    class="js-modal-trigger lesson-content box has-shadow">
                    <p class="subtitle">Fourth Quarter Lesson 2</p>
                    <h3 class="title is-4">SURFACE WEATHERING</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
        </div>
        <div id="typeOfTest" class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <p class="title has-text-centered">ADD QUIZ</p>
                    <input type="hidden" class="input" name="lesson" id="lessonInput">
                    <div class="field">
                        <div class="control">
                            <button data-test="pre" class="btn button is-large is-fullwidth">PRE-TEST</button>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button data-test="post" class="btn button is-large is-fullwidth">POST-TEST</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        function openModal($el) {
            $el.classList.add('is-active');
        }

        function closeModal($el) {
            $el.classList.remove('is-active');
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.removeAttribute('data-lesson');
            });
        }

        function closeAllModals() {
            (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                closeModal($modal);
            });
        }

        (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
            const modal = $trigger.dataset.target;
            const lesson = $trigger.dataset.lesson;
            const $target = document.getElementById(modal);
            $trigger.addEventListener('click', () => {
                const buttons = document.querySelectorAll('.btn');
                buttons.forEach(button => {
                    button.setAttribute('data-lesson', lesson);
                });
                openModal($target);
            });
        });

        (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
            const $target = $close.closest('.modal');

            $close.addEventListener('click', () => {
                closeModal($target);
            });
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === "Escape") {
                closeAllModals();
            }
        });
    });
    $(document).ready(function () {
        $('.btn').click(function () {
            var lesson = $(this).data('lesson');
            var test = $(this).data('test');
            window.location.href = `./quizQuestions.php?lesson=${lesson}&type=${test}`;
        });
    });
</script>