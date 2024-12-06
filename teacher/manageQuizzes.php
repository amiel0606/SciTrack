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
                <a href="#" class="lesson-content box has-shadow">
                    <p class="subtitle">First Quarter Lesson 1</p>
                    <h3 class="title is-4">SOLID</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" class="lesson-content box has-shadow">
                    <p class="subtitle">First Quarter Lesson 2</p>
                    <h3 class="title is-4">LIQUID</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" class="lesson-content box has-shadow">
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
                <a href="#" class="lesson-content box has-shadow">
                    <p class="subtitle">Second Quarter Ecosystem Lesson 1</p>
                    <h3 class="title is-4">ESTUARIES</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" class="lesson-content box has-shadow">
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
                <a href="#" class="lesson-content box has-shadow">
                    <p class="subtitle">Third Quarter Lesson 1</p>
                    <h3 class="title is-4">WHAT IS MOTION</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" class="lesson-content box has-shadow">
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
                <a href="#" class="lesson-content box has-shadow">
                    <p class="subtitle">Fourth Quarter Lesson 1</p>
                    <h3 class="title is-4">MOUNTAINS</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
            <div class="column is-one-quarter">
                <a href="#" class="lesson-content box has-shadow">
                    <p class="subtitle">Fourth Quarter Lesson 2</p>
                    <h3 class="title is-4">PLAINS</h3>
                    <span class="icon">
                        <i class="fas fa-play"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>


</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>