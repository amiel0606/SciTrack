<?php
    include_once('./includes/board.php');
?>

<style>
    .surface-content {
        display: none;
    }
    .surface-content-active {
        display: block;
    }
    #einstein-image{
        width: 100%;
        max-width: 31%;
        margin-right: -25.7%;
        margin-left: -10%;
        margin-bottom: -6.8%;
    }
    .es-image{
        width: 50%;
        max-width: 80%;
        margin-top: -5%; 
    }
    .einstein {
        width: 100%;
        height: auto;
        transform: scaleX(-1);
    }
    .c-image img{
        width: 130%;
        max-width: 130%;
        height: auto;
        margin-left: -15%;
        transform: scaleX(-1);
    }
    .letstry img{
        width: 130%;
        max-width: 130%;
        height: auto;
        margin-left: 5%;
    }
    #letsTryButton {
        right: -10rem;
        z-index: 10;
    }
    .image-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-top: 2rem;
    }
    .image-container .image-item {
        text-align: center;
        margin: 0 1rem;
    }
    .image-container img {
        width: 100%;
        max-width: 350px;
    }
    .eco-image {
        width: 130%;
        max-width: 130%;
        margin-left: 5rem;
        margin-top: 2%;
    }
    #eco-text {
        margin-left: 1rem;
        margin-top: 4%;
    }
    .placeholder {
        width: 100%;
        max-width: 90%;
        height: 100%;
        max-height: 70%;
        background-color: #D9D9D9;
    } 
    .medal-image img{
        max-width: 40%;
        height: auto;
    }
    .back-button {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
    }
    .back-button .icon i {
        color: #000;
    }
    .back-button:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }
    .button-text {
        font-size: 0.75em;
    }
    .navbar{
        background-color: #4A90E2 !important;
    }
    .navbar-item:hover{
        background-color: #266bbb;
        color: white;
    }

    
    #header{
        font-size: 4rem;
        margin-top: 3%;
    }
    #header1{
        font-size: 4rem;
        margin-top: -7%;
        margin-bottom: 10%;
    }
    #header2{
        font-size: 4rem;
    }
    #header4{
        font-size: 4rem;
        margin-top: -2%;
    }
    #header5{
        font-size: 4rem;
        margin-bottom: 2.5rem;
        margin-top: -12%;
    }
    #header6{
        font-size: 3rem;
        margin-bottom: 2.5rem;
    }
    #headerEx{
        margin-top: 3%;
        font-size: 4rem;
    }
    #headerSur{
        font-size: 4rem;
        margin-left: -10%;
        margin-bottom: 2.5rem;
        margin-top: -12%;
    }
    #headerPhy{
        font-size: 4rem;
        margin-left: -30%;
        margin-bottom: 2.5rem;
        margin-top: -12%;
    }
    #headerChe{
        font-size: 4rem;
        margin-left: -40%;
        margin-bottom: 2.5rem;
        margin-top: -12%;
    }
    #sur-text {
        margin-left: 3rem;
        margin-top: 4%;
    }
    .description1{
        font-size: 2.4rem;
    }
    .description2{
        font-size: 2.4rem;
        margin-left: 5%;
    }
    #sChar{
        margin-top: 2%;
        margin-left: 10%;
    }
    #sChar img{
        width: 120%;
        min-width: 100%;
        max-width: 450px;
    }
    .sur-image {
        width: 130%;
        max-width: 130%;
        margin-left: 5rem;
        margin-top: -25%;
    }
    .sur-image2 {
        width: 130%;
        max-width: 130%;
        margin-left: 5rem;
        margin-top: -5%;
    }
    #bio1{
        margin-left: -20%;
    }
    #bio2{
        margin-left: 5%;
    }
    #bio3{
        margin-left: 5%;
    }
    #bio1 p, #bio2 p{
        margin-left: 15%;
    }
    #bio1 p, #bio2 p, #bio3 p{
        margin-top: 5%;
    }
    #eco-text p, #sur-text p{
        line-height: 1.5;
    }
    .tight-spacing {
        margin-right: -0.2em;
    }
    .tight-spacing2 {
        margin-right: -1em;
    }
    .ty-spacing {
        margin-left: -3.5em;
    }
    .ty-spacing2 {
        margin-left: -4.5em;
    }
    #compButton{
        margin-left: 15%;
    }
    
    /* for quiz layout */
    .choice-btn {
        background-color: #d3d3d3;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    /* Left-to-right fill effect */
    .choice-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        background-color: transparent;
        z-index: -1;
        transition: width 0.6s ease, background-color 0.6s ease;
    }

    /* Correct answer - green fill */
    .choice-btn.correct::before {
        background-color: #48c774;
        width: 100%;
    }

    /* Wrong answer - red fill */
    .choice-btn.wrong::before {
        background-color: #f14668; 
        width: 100%;
    }

    .choice-btn {
        z-index: 1;
    }

    .extra-info-box {
        width: 90%; 
        max-width: 520px; 
        padding: 10px;
        margin: 1rem auto; 
        z-index: 9999; 
        background-color: white;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        display: none;
    }
    #quizImage{
        max-width: 100%; 
        height: auto;
        margin-top: 4rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .placeholderImage {
        background-color: #d3d3d3; 
        width: 90%; 
        height: auto;
        max-height: 350px;
        border-radius: 5px;
        margin-top: 4rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #quizResult{
        display: none; 
        width: 100%; 
        max-width: 90%; 
        padding: 30px; 
        z-index: 2; 
        margin-top: 30px;
    }

    @font-face {
        font-family: 'verdana';
        src: url('../../font/verdana.ttf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../../font/Haniley.otf') format('opentype');
    }
    .main-font {
        font-family: 'verdana';
    }
    .secondary-font{
        font-family: 'Haniley';
    }
    .ecosys{
        margin-top: -10%;
    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../../image/board.png" alt="Board Image" style="width: 140%; height: 105%; max-width: 1800px;; margin-left: -17%">
                    </figure>
                    
                    <!-- Surface Objective -->
                    <div class="x-content" id="objectives">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header1">LEARNING OBJECTIVES</h1>

                            <!-- Content Layout -->
                            <div class="is-centered">
                                <p class="subtitle description2 has-text-white main-font mb-6"> At the end of the lesson you will able to:</p>
                                <!-- Text Column -->
                                <div class="column is-full mt-4">
                                    <div class="subtitle description2 has-text-white">
                                        <p class="mb-5 main-font">Define what are the effects of soil erosion in community</p>
                                        <p class="mb-5 main-font">Define what are the effects of soil erosion in living things and environment</p>
                                        <p class="mb-5 main-font">State ways of preventing soil erosion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Effects -->
                    <div class="surface-content" id="surfaceEffects">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">Effects of Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        Many living things rely on soil for food and shelter. Soil is vital to agriculture and industry.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/surface10.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Erosion -->
                    <div class="surface-content" id="surfaceErosion">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Soil Erosion
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        It refers to the wearing away or removal of the topmost part of the soil by natural forces of water and wind
                                    </p>    
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/surface11.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Detach -->
                    <div class="surface-content" id="surfaceDetach">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="headerPhy">
                                        Soil Detachment
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing">
                                        It occurs due to the effect of water, wind, or biological agents. 
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/surface12.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Desert -->
                    <div class="surface-content" id="surfaceDesert">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="headerPhy">
                                        Desertification
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing">
                                        If the nutrient-rich topsoil is removed from an agricultural land, the land will eventually be infertile and dry.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/surface13.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Video -->
                    <div class="surface-content" id="surfaceVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">Weathering and soil Formation</h1>

                            <!-- Video for -->
                            <div class="box">
                                <video id="solidVideo" width="750" height="520" controls>
                                    <source src="../../videos/.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: ..... Youtube
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Water -->
                    <div class="surface-content" id="surfaceWater">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="sur-text">
                                    <p class="title main-font has-text-white" id="headerChe">
                                        Water contamination
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing2">
                                        Soil erosion can lead to water contamination, especially clogged water ways and pollution of aquatic habitats.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image sur-image">
                                        <img src="../../image/surface14.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Siltation -->
                    <div class="surface-content" id="surfaceSiltation">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="sur-text">
                                    <p class="title main-font has-text-white" id="headerPhy">
                                        Siltation
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing">
                                        The particulate matter from other areas may settle in the water. 
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image sur-image2">
                                        <img src="../../image/surface15.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Air -->
                    <div class="surface-content" id="surfaceAir">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="sur-text">
                                    <p class="title main-font has-text-white" id="headerChe">
                                        Air pollution
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing2">
                                        Contaminants present in the soil can be held loose and lifted by the wind, resulting to air pollution.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/surface16.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Prevent -->
                    <div class="surface-content" id="surfacePrevent">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="header">Preventing Soil Erosion</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing">
                                        One of the common ways to prevent soil erosion is reforestation and increase vegetation. Plant roots hold the soil in place.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/surface17.gif" alt="Surface" style="margin-top: 15%;">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LetsTry -->
                    <div class="surface-content" id="letsTry">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <!-- Content Layout -->
                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half pl-6">
                                    <figure class="image c-image">
                                        <img src="../../image/einstein.png" alt="Einstein">
                                    </figure>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-half pr-6 mr-6">
                                    <figure class="image letstry">
                                        <img src="../../image/letstry.png" alt="letstry">
                                    </figure>
                                </div>
                            </div>
                            
                            <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="letsTryButton">
                                <button class="button main-font is-danger is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile has-text-white">
                                    Go Back
                                </button>
                                <button class="button main-font is-success is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile mx-2 has-text-white">
                                    Proceed to quiz
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Quiz -->
                    <div class="surface-content" id="surfaceQuiz">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6" style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="header4">
                                QUIZ
                            </h1>
                            <!-- Quiz Container -->
                            <div class="box has-text-centered" id="quizContainer" style="width: 100%; max-width: 90%; max-height: 80%; padding: 30px; z-index: 2;">
                                <div class="columns">
                                    <!-- Left Column for Image -->
                                    <div class="column is-one-third has-text-centered placeholderImage">
                                        <img src="../../image/book.png" alt="Quiz Image" id="quizImage">
                                    </div>

                                    <!-- Right Column for Question and Choices -->
                                    <div class="column is-two-thirds">
                                        <!-- Question Number -->
                                        <h2 class="title secondary-font is-2" id="questionNumber">Question 1</h2>

                                        <!-- Question -->
                                        <p class="subtitle main-font is-4" id="questionText"></p>

                                        <!-- Choices as Buttons with Responsive Sizes -->
                                        <div class="buttons is-flex is-flex-direction-column ml-3">
                                            <button class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                        </div>

                                        <div class="box extra-info-box" id="extraInfoBox" style="display:none;">
                                            <h3 class="subtitle secondary-font is-3" id="extraInfoTitle">Additional Information</h3>
                                            <p id="extraInfoText" class="main-font"></p>
                                        </div>

                                        <!-- Next Button -->
                                        <button class="button is-success main-font is-size-6-widescreen is-size-7-tablet" id="nextButton" disabled>Next Question</button>
                                    </div>
                                </div>
                            </div>

                             <!-- Quiz Result -->
                            <div class="box has-text-centered p-6" id="quizResult">
                                <h2 class="subtitle secondary-font is-2">Quiz Result</h2>
                                <table class="table main-font is-bordered is-striped is-fullwidth" style="margin-top: 2rem;">
                                    <tbody>
                                        <tr>
                                            <td><strong>Total Questions</strong></td>
                                            <td id="totalQuestions">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Correct</strong></td>
                                            <td id="correctAnswers">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wrong</strong></td>
                                            <td id="wrongAnswers">0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Percentage</strong></td>
                                            <td id="percentage">0%</</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Your Total Score</strong></td>
                                            <td id="totalScore">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Completed -->
                    <div class="surface-content" id="surfaceCompleted">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <div class="column is-full is-flex is-justify-content-flex-end mb-6" id="compButton">
                                <div class="columns is-half ml-6 p-2" id="mainbtn">
                                    <a href="../studentWelcome.php?show=Lessons">
                                        <button class="button back-button is-success is-size-6-desktop is-size-6-tablet" style="z-index: 5;">
                                        <p class="has-text-white">Back To Main Menu</p>
                                        </button>
                                    </a>
                                </div>
                            </div>

                            <div class="columns is-centered">
                                <!-- Image Column -->
                                <div class="column is-half ">
                                    <figure class="image einstein">
                                        <img src="../../image/einstein.png" alt="Einstein">
                                    </figure>
                                </div>

                                <div class="column is-half is-one-fifths is-flex is-flex-direction-column align-bottom mt-5">
                                    <div class="has-text-centered">
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header6">
                                            YOU DID GREAT!
                                        </p>
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header6">
                                            Here is a medal for completing the lesson 1
                                        </p>
                                    </div>
                                    <figure class="image is-flex is-justify-content-center medal-image mt-5 mb-4">
                                        <img src="../../image/medal1.png" alt="medal1">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="examplesButton">
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mb-2" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon mr-2"></i> <span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2 mb-2" id="rightButton" style="z-index: 2;">
                            <span class="button-text">Next</span> <i class="fas fa-arrow-right button-icon ml-2"></i>
                        </button>

                        <!-- Einstein Image -->
                        <img src="../../image/einstein.png" alt="Einstein Figure" id="einstein-image">
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const objectives = document.getElementById('objectives');
        const surfaceEffects = document.getElementById('surfaceEffects');
        const surfaceErosion = document.getElementById('surfaceErosion');
        const surfaceDetach = document.getElementById('surfaceDetach');
        const surfaceDesert = document.getElementById('surfaceDesert');
        const surfaceVideo = document.getElementById('surfaceVideo');
        const surfaceWater = document.getElementById('surfaceWater');
        const surfaceSiltation = document.getElementById('surfaceSiltation');
        const surfaceAir = document.getElementById('surfaceAir');
        const surfacePrevent = document.getElementById('surfacePrevent');
        const letsTry = document.getElementById('letsTry');
        const surfaceQuiz = document.getElementById('surfaceQuiz');
        const surfaceCompleted = document.getElementById('surfaceCompleted');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        let currentSection = 0;
        const sections = [objectives, surfaceEffects, surfaceErosion, surfaceDetach, surfaceDesert, surfaceVideo, surfaceWater, surfaceSiltation, surfaceAir, surfacePrevent, letsTry, surfaceQuiz, surfaceCompleted];

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('surface-content-active');
                section.classList.add('surface-content');
            });
        }

        function updateEinsteinImageAndButtons() {
            if (currentSection === 10 || currentSection === 11 || currentSection === 12) {
                einsteinImage.style.display = 'none';
                examplesButton.style.marginLeft = '100%';    
            } else {
                einsteinImage.style.display = 'block';
                examplesButton.style.marginLeft = '0%'; 
            }

            if (currentSection === 10 || currentSection === 12) {
                leftButton.style.display = 'none';
                rightButton.style.display = 'none'; 
            } else {
                leftButton.style.display = 'block';
                rightButton.style.display = 'block'; 
            }
        }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('surface-content');
            sections[index].classList.add('surface-content-active');
            updateEinsteinImageAndButtons();
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'surfaceLesson.php'; 
            } else if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 9; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 11; 
            showSection(currentSection);
        });

        hideAllSections();
        showSection(0); 
    });

    //for quiz
    // Quiz Data
    const quizData = [
        {
            question: "What is an estuary?",
            choices: ["A forest", "Where a river meets the sea", "A desert", "A mountain range"],
            quizImage: "../quizImage/esQuizImage1.png",
            correctAnswer: "Where a river meets the sea",
            additionalInfo: "An estuary is a unique place where fresh water from rivers mixes with salty sea water, creating a brackish environment perfect for many organisms."
        },
        {
            question: "What type of water is found in estuaries?",
            choices: ["Freshwater", "Saltwater", "Brackish", "Pure"],
            quizImage: "../quizImage/esQuizImage2.png",
            correctAnswer: "Brackish",
            additionalInfo: "Estuaries have brackish water, which is a mix of fresh and saltwater. It's like the 'Goldilocks' water—just right for certain wildlife!"
        },
        {
            question: "Which of these animals often relies on estuaries for nesting and breeding?",
            choices: ["Elephants", "Sharks", "Birds", "Monkeys"],
            quizImage: "../quizImage/esQuizImage3.png",
            correctAnswer: "Birds",
            additionalInfo: "Birds love estuaries for nesting and breeding because they provide lots of food and safe places to raise their young. It's like nature's daycare!"
        },
        {
            question: "What causes the murky water in estuaries?",
            choices: ["Trash", "Rain", "Sediment", "Fish parties"],
            quizImage: "../quizImage/esQuizImage4.png",
            correctAnswer: "Sediment",
            additionalInfo: "Sediments like sand and clay make the water look murky, but don’t worry! It’s perfect for small critters who love hiding in the 'underwater fog.'"
        },
        {
            question: "Which of these is an example of sediment in an estuary?",
            choices: ["Pebbles", "Diamonds", "Gold", "Ice"],
            quizImage: "../quizImage/esQuizImage5.png",
            correctAnswer: "Pebbles",
            additionalInfo: "Pebbles, along with sand and clay, are common sediments found in estuaries. They’re like nature’s tiny building blocks!"
        }
    ];

    let currentQuestionIndex = 0;
    let correctAnswersCount = 0;
    let totalQuestions = quizData.length;
    let selectedAnswer = null;

    const choices = document.querySelectorAll('.choice-btn');
    const nextButton = document.getElementById('nextButton');
    const extraInfoBox = document.getElementById('extraInfoBox');
    const questionNumber = document.getElementById('questionNumber');
    const questionText = document.getElementById('questionText');
    const quizImage = document.getElementById('quizImage');
    const extraInfoText = document.getElementById('extraInfoText');
    const quizResult = document.getElementById('quizResult');
    const totalQuestionsDisplay = document.getElementById('totalQuestions');
    const correctAnswersDisplay = document.getElementById('correctAnswers');
    const wrongAnswersDisplay = document.getElementById('wrongAnswers');
    const percentageDisplay = document.getElementById('percentage');
    const totalScoreDisplay = document.getElementById('totalScore');

    // Function to load a question
    function loadQuestion() {
        const currentQuestion = quizData[currentQuestionIndex];

        questionNumber.textContent = `Question ${currentQuestionIndex + 1}`;
        questionText.textContent = currentQuestion.question;
        quizImage.src = currentQuestion.quizImage;

        choices.forEach((button, index) => {
            button.textContent = currentQuestion.choices[index];
            button.classList.remove('correct', 'wrong');
            button.style.display = 'inline-block';
            button.style.color = 'black'; 
        });

        extraInfoBox.style.display = 'none';
        nextButton.disabled = true;
        selectedAnswer = null;
    }

    // Adding click event listeners to choices
    choices.forEach(button => {
        button.addEventListener('click', function() {
            if (selectedAnswer) return; // Prevent selecting again

            selectedAnswer = button.textContent; // Set the selected answer
            const correctAnswer = quizData[currentQuestionIndex].correctAnswer;

            // Check each choice
            choices.forEach(btn => {
                // Hide incorrect answers if they are not selected
                if (btn.textContent !== correctAnswer && btn.textContent !== selectedAnswer) {
                    btn.style.display = 'none'; // Hides the button
                } else {
                    // Add correct or wrong class based on the selected answer
                    btn.classList.add(btn.textContent === correctAnswer ? 'correct' : 'wrong');
                    btn.style.color = 'white';
                }
            });

            // Display additional information about the question
            extraInfoText.textContent = quizData[currentQuestionIndex].additionalInfo;
            extraInfoBox.style.display = 'block';
            nextButton.disabled = false; // Enable the next button

            // Check if the answer is correct
            if (selectedAnswer === correctAnswer) {
                correctAnswersCount++; // Increment the correct answers count
            }
        });
    });

    // Function to handle next question
    nextButton.addEventListener('click', function () {
        if (!selectedAnswer) {
            alert('Please select an answer!');
            return;
        }

        // Increment the current question index
        currentQuestionIndex++;

        // Check if the current question index is the last one
        if (currentQuestionIndex >= quizData.length) {
            // Call the showResults function to display the results
            showResults();
        } else {
            // Load the next question
            loadQuestion();
        }
    });

    // Function to display results
    function showResults() {
        const quizContainer = document.getElementById('quizContainer'); // Ensure this ID matches your HTML
        quizContainer.style.display = 'none'; // Hide the quiz container

        // Show the quiz result container
        quizResult.style.display = 'block';
        totalQuestionsDisplay.textContent = totalQuestions;
        correctAnswersDisplay.textContent = correctAnswersCount;
        wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
        percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
        totalScoreDisplay.textContent = correctAnswersCount + ' / ' + totalQuestions; // Assuming each correct answer is worth 1 point
    }

    // Load the first question
    loadQuestion();
</script>