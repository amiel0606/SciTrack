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


</style>
<div class="container">
    <p class="has-text-primary is-size-1 title ml-4">Lessons</p>
    <div class="locked">
    <a href="#">
        <div class="box my-3">
            <div class="columns">
                        <div class="column is-one-fifth has-background-danger-light">
                            <figure class="image is-square">
                                <img src="../image/matterL.png" alt="Math Image">
                            </figure>
                        </div>
                        <div class="column">
                            <p class="has-text-primary is-size-4">
                                First Quarter Lesson 1, Lesson 2, and Lesson 3. <br/>
                                <span class="is-size-1 has-text-weight-semibold">MATTER</span> <br/> <br/> <br/>
                                <i class="fa-solid fa-list-ul icon fa-2xs"></i> <span class="has-text-primary is-size-5">Quiz: 10 <span class="ml-4">Section given: <span class="has-text-weight-semibold">PAPAYA</span></span></span>
                            </p>
                        </div>
                </div>
                <div class="lock-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e8eaed">
                        <path d="M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm260.17-140q31.83 0 54.33-22.03T557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z"/>
                    </svg>
                </div>
            </div>
        </div>
    </a>

    <div class="locked">
    <a href="#">
        <div class="box my-3">
            <div class="columns">
                <div class="column is-one-fifth has-background-grey">
                    <figure class="image is-square">
                        <img src="../image/eco.png" alt="Math Image">
                    </figure>
                </div>
                <div class="column">
                    <p class="has-text-primary is-size-4">
                        First Quarter Lesson 1, Lesson 2, and Lesson 3. <br/>
                        <span class="is-size-1 has-text-weight-semibold">ECOSYSTEM</span> <br/> <br/> <br/>
                        <i class="fa-solid fa-list-ul icon fa-2xs"></i> <span class="has-text-primary is-size-5">Quiz: 10 <span class="ml-4">Section given: <span class="has-text-weight-semibold">PAPAYA</span></span></span>
                    </p>
                </div>
            </div>
            <div class="lock-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e8eaed">
                        <path d="M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm260.17-140q31.83 0 54.33-22.03T557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z"/>
                    </svg>
                </div>
        </div>
        </div>
    </a>
    <a href="./lessonProgress.php">
        <div class="box my-3">
            <div class="columns">
                <div class="column is-one-fifth has-background-success">
                    <figure class="image is-square">
                        <img src="../image/motions.png" alt="Math Image">
                    </figure>
                </div>
                <div class="column">
                    <p class="has-text-primary is-size-4">
                        First Quarter Lesson 1, Lesson 2, and Lesson 3. <br/>
                        <span class="is-size-1 has-text-weight-semibold">MOTION: <span class="has-text-danger">NOT YET GIVEN</span></span> <br/> <br/> <br/>
                        <i class="fa-solid fa-list-ul icon fa-2xs"></i> <span class="has-text-primary is-size-5">Quiz: 10 <span class="ml-4">Section given: <span class="has-text-weight-semibold">PAPAYA</span></span></span>
                    </p>
                </div>
            </div>
        </div>
    </a>
    <a href="#">
        <div class="box my-3">
            <div class="columns">
                <div class="column is-one-fifth has-background-warning">
                    <figure class="image is-square">
                        <img src="../image/earth.png" alt="Math Image">
                    </figure>
                </div>
                <div class="column">
                    <p class="has-text-primary is-size-4">
                        First Quarter Lesson 1, Lesson 2, and Lesson 3. <br/>
                        <span class="is-size-1 has-text-weight-semibold">EARTH'S SURFACE: <span class="has-text-danger">NOT YET GIVEN</span></span> <br/> <br/> <br/>
                        <i class="fa-solid fa-list-ul icon fa-2xs"></i> <span class="has-text-primary is-size-5">Quiz: 10 <span class="ml-4">Section given: <span class="has-text-weight-semibold">PAPAYA</span></span></span>
                    </p>
                </div>
            </div>
        </div>
    </a>
</div>