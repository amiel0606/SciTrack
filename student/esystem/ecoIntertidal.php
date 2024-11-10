<?php
session_start(); // Start the session
// Include necessary files
include_once('./includes/board.php'); // If needed
include_once('../../admin/includes/dbCon.php'); // Include database connection
// Check if session variables are set
if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["id"])) {
    $name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
    $id = $_SESSION["id"]; // Get the student ID from the session
} else {
    // Handle the case where session variables are not set
    header("Location: index.php"); // Redirect to login or handle error
    exit();
}
$sql = "SELECT question, choices, quiz_image, correct_answer, additional_info FROM quiz_questions_intertidal";
$result = $conn->query($sql);

$quiz_questions_solid = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['choices'] = json_decode($row['choices']); 
        $quiz_questions_solid[] = $row;
    }
} else {
    echo "No quiz questions found.";
}


$conn->close();
?>

<style>
    .eco-content {
        display: none;
    }
    .eco-content-active {
        display: block;
    }
    #einstein-image{
        width: 100%;
        max-width: 31%;
        margin-right: -25.7%;
        margin-left: -10%;
        margin-bottom: -6.8%;
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
        margin-left: 6rem;
        margin-top: 2%;
    }
    .eco-image2{
        width: 150%;
        max-width: 150%;
        margin-left: -25%;
        margin-top: -4%;
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
    .einstein{
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
    .sExample{
        display: flex;
        justify-content: center; 
        align-items: center;
        margin-top: 2rem;
    }
    .sExample .image-item{
        text-align: center;
        margin: 0;
    }
    .sExample .image-item:first-child{
        margin-right: 5rem;
    }
    .sExample .image-item:last-child{
        margin-left: 5rem;
    }
    .sExample img {
        min-width: 250px;
        min-height: 300px;
        width: 100%;
        max-width: 500px;
        margin-top: -2rem;
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

    #letsTryButton {
        right: -10rem;
        z-index: 10;
    }
    
    #header{
        font-size: 4rem;
        margin-top: 0%;
    }
    #header1{
        font-size: 4rem;
        margin-top: -9%;
        margin-bottom: 10%;
    }
    #header2{
        font-size: 4rem;
    }
    #header3{
        font-size: 4rem;
        margin-top: -2%;
    }
    #header4{
        font-size: 3.5rem;
        margin-top: -1%;
    }
    #header5{
        font-size: 4rem;
        margin-bottom: 2.5rem;
        margin-top: -12%;
    }
    #header6{
        font-size: 4rem;
        margin-right: -1em;
        margin-bottom: 2.5rem;
        margin-top: -12%;
    }
    #header7{
        font-size: 3rem;
        margin-bottom: 2.5rem;
    }
    .description1{
        font-size: 2.4rem;
    }
    .description2{
        font-size: 2.6rem;
    }
    #sChar{
        margin-left: 5%;
        margin-top: 5%;
    }
    #sChar img{
        width: 120%;
        min-width: 100%;
        max-width: 450px;
    }
    #eco-text p{
        line-height: 1.5;
    }
    .tight-spacing {
        margin-right: -1em;
    }
    .p-spacing {
        margin-right: -1.5em;
    }
    #organism1{
        margin-left: -15%;
    }
    #org{
        margin-left: -5%;
    }
    #org img{
        width: 120%;
        min-width: 100%;
        max-width: 350px;
    }
    #org1, #org2, #org3{
        margin-top: -45%;
    }
    #sChar .image-item{
        margin-top: -5%;
    }
    #sChar .image-item p{
        margin-left: 25%;
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
        max-width: 70%; 
        height: auto;
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
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../../image/board.png" alt="Board Image" style="width: 140%; height: 105%; max-width: 1800px;; margin-left: -17%">
                    </figure>

                    <!-- Eco Objective -->
                    <div class="x-content" id="objectives">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header1">LEARNING OBJECTIVES</h1>

                            <!-- Content Layout -->
                            <div class="is-centered">
                                <p class="subtitle description2 has-text-white main-font mb-6"> At the end of the lesson you will able to:</p>
                                <!-- Text Column -->
                                <div class="column is-full mt-4">
                                    <div class="subtitle description2 has-text-white">
                                        <p class="mb-5 main-font">Define what are the ecosystem in Intertidal Zone</p>
                                        <p class="mb-5 main-font">Identify different wildlife that lives in Intertidal zone</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 1 -->
                    <div class="eco-content" id="eco1">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="header3">The Ecosystem Intertidal Zone</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="subtitle main-font is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-justified tight-spacing">
                                        Many organisms become visible when you go to the seashore during low tide.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/eco9.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 2 -->
                    <div class="eco-content" id="eco2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white mb-6" id="header5">
                                        Tide
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        <span style="color: yellow;">Tide</span> refers to the movement of water as a result of the gravitational pull of the sun and the moon.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/eco10.gif" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 3 -->
                    <div class="eco-content" id="eco3">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="header">The Intertidal Zones</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-centered is-mobile is-multiline mb-4">
                                <!-- Image Column -->
                                <div class="column is-full">
                                    <figure class="image eco-image2">
                                        <img src="../../image/eco11.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Video -->
                    <div class="eco-content" id="ecoVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">The Ecosystem Estuaries</h1>

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

                    <!-- Eco 4 -->
                    <div class="eco-content" id="eco4">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Splash Zone
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        Also known as the <span style="color: yellow;">spray zone</span> or <span style="color: yellow;">upper littoral zone</span> 
                                        is a region in the intertidal zone that is submerged in the water.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/eco12.png" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Splash -->
                    <div class="eco-content" id="ecoSplash">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-6">
                            <h1 class="title has-text-white secondary-font" id="header4">
                                Organisms that can be found in Splash Zone
                            </h1>

                            <div class="image-container" id="sChar">
                                <!-- Eco Image -->
                                <div class="image-item" id="organism1">
                                    <figure class="image">
                                        <img src="../../image/eco13.gif" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Periwinkle Snails</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/eco14.gif" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Lichens</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 5 -->
                    <div class="eco-content" id="eco5">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        High Tide Zone
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        Also known as the <span style="color: yellow;">upper mid-littoral zone</span> is a region that is submerged in the water only during high tide.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/eco15.gif" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco High -->
                    <div class="eco-content" id="ecoHigh">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-6">
                            <h1 class="title column is-one-fifths has-text-centered has-text-white secondary-font" id="header4">
                                Organisms that can be found in High Tide Zone
                            </h1>
                            
                            <div class="image-container" id="org">
                                <!-- Eco Image -->
                                <div class="image-item" id="org1">
                                    <figure class="image">
                                        <img src="../../image/ecoHigh1.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Sea weeds</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item" id="org2">
                                    <figure class="image">
                                        <img src="../../image/ecoHigh2.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Hermit crab</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item" id="org3">
                                    <figure class="image">
                                        <img src="../../image/ecoHigh3.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Barnacles</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 6 -->
                    <div class="eco-content" id="eco6">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header6">
                                        Middle Tide Zone
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        Also known as <span style="color: yellow;">lower mid-littoral zone</span> is a region that is generally submerged in the water
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/eco16.gif" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Middle -->
                    <div class="eco-content" id="ecoMiddle">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-6">
                            <h1 class="title is-one-fifths has-text-centered has-text-white secondary-font" id="header4">
                                Organisms that can be found in Middle Tide Zone
                            </h1>

                            <div class="image-container" id="sChar">
                                <!-- Eco Image -->
                                <div class="image-item" id="organism1">
                                    <figure class="image">
                                        <img src="../../image/ecoMiddle1.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Sea Urchins</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/ecoMiddle2.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Sea Cucumbers</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Middle 2 -->
                    <div class="eco-content" id="ecoMiddle2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-6">
                            <h1 class="title is-one-fifths has-text-centered has-text-white secondary-font" id="header4">
                                Organisms that can be found in Middle Tide Zone
                            </h1>

                            <div class="image-container" id="sChar">
                                <!-- Eco Image -->
                                <div class="image-item" id="organism1">
                                    <figure class="image">
                                        <img src="../../image/ecoMiddle3.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Fish</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/ecoMiddle4.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Shrimp</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco 7 -->
                    <div class="eco-content" id="eco7">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header6">
                                        Low Tide Zone
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        Also known as <span style="color: yellow;">lower littoral zone</span> is always submerged under water
                                        <br>
                                        <br>
                                        It is only exposed during extreme low tides.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image">
                                        <img src="../../image/eco17.gif" alt="Eco">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Low -->
                    <div class="eco-content" id="ecoLow">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-6">
                            <h1 class="title is-one-fifths has-text-centered has-text-white secondary-font" id="header4">
                                Organisms that can be found in Low Tide Zone
                            </h1>

                            <div class="image-container" id="sChar">
                                <!-- Eco Image -->
                                <div class="image-item" id="organism1">
                                    <figure class="image">
                                        <img src="../../image/ecoLow1.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Sea Star</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/ecoLow2.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Sea Sponge</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eco Low 2 -->
                    <div class="eco-content" id="ecoLow2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-6">
                            <h1 class="title is-one-fifths has-text-centered has-text-white secondary-font" id="header4">
                                Organisms that can be found in Low Tide Zone
                            </h1>

                            <div class="image-container" id="sChar">
                                <!-- Eco Image -->
                                <div class="image-item" id="organism1">
                                    <figure class="image">
                                        <img src="../../image/ecoLow3.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Nudibranch</p>
                                </div>

                                <!-- Eco Image -->
                                <div class="image-item">
                                    <figure class="image">
                                        <img src="../../image/ecoLow4.png" alt="Organisms">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Algae</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LetsTry -->
                    <div class="eco-content" id="letsTry">
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

                    <!-- Eco Quiz -->
                    <div class="eco-content" id="ecoQuiz">
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

                    <!-- Eco Estuaries Completed -->
                    <div class="eco-content" id="ecoCompleted">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <div class="column is-full is-flex is-justify-content-flex-end mb-6">
                                <div class="columns is-half ml-6 p-2">
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
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header7">
                                            YOU DID GREAT!
                                        </p>
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header7">
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
<audio id="ecoEstAudio" src="../../sounds/tide1.mp3"></audio>
<audio id="ecoEstAudio2" src="../../sounds/tide2.mp3"></audio>
<audio id="ecoEstAudio3" src="../../sounds/tide3.mp3"></audio>
<audio id="ecoEstAudio4" src="../../sounds/tide4.mp3"></audio>
<audio id="ecoEstAudio5" src="../../sounds/tide5.mp3"></audio>
<audio id="ecoEstAudio6" src="../../sounds/tide6.mp3"></audio>
<audio id="ecoEstAudio7" src="../../sounds/tide7.mp3"></audio>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const objectives = document.getElementById('objectives');
        const eco1 = document.getElementById('eco1');
        const eco2 = document.getElementById('eco2');
        const eco3 = document.getElementById('eco3');
        const ecoVideo = document.getElementById('ecoVideo');
        const eco4 = document.getElementById('eco4');
        const ecoSplash = document.getElementById('ecoSplash');
        const eco5 = document.getElementById('eco5');
        const ecoHigh = document.getElementById('ecoHigh');
        const eco6 = document.getElementById('eco6');
        const ecoMiddle = document.getElementById('ecoMiddle');
        const ecoMiddle2 = document.getElementById('ecoMiddle2');
        const eco7 = document.getElementById('eco7');
        const ecoLow = document.getElementById('ecoLow');
        const ecoLow2 = document.getElementById('ecoLow2');
        const letsTry = document.getElementById('letsTry');
        const ecoQuiz = document.getElementById('ecoQuiz');
        const ecoCompleted = document.getElementById('ecoCompleted');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        const audio = document.getElementById('ecoEstAudio');
        const audio2 = document.getElementById('ecoEstAudio2');
        const audio3 = document.getElementById('ecoEstAudio3');
        const audio4 = document.getElementById('ecoEstAudio4');
        const audio5 = document.getElementById('ecoEstAudio5');
        const audio6 = document.getElementById('ecoEstAudio6');
        const audio7 = document.getElementById('ecoEstAudio7');
        let currentSection = 0;
        const sections = [objectives, eco1, eco2, eco3, ecoVideo, eco4, ecoSplash, eco5, ecoHigh, eco6, ecoMiddle, ecoMiddle2, eco7, ecoLow, ecoLow2, letsTry, ecoQuiz, ecoCompleted];
        let sectionTimeSpent = new Array(sections.length).fill(0); 
        let sectionTimerInterval;
        const studentId = <?php echo json_encode($id); ?>;
        console.log("Student ID from PHP:", studentId);

        function startSectionTimer() {
    console.log("Starting timer for section " + currentSection);
    sectionTimerInterval = setInterval(() => {
        sectionTimeSpent[currentSection]++;
        console.log(`Time in section ${currentSection}: ${sectionTimeSpent[currentSection]} seconds`);
    }, 1000);
}

function stopSectionTimer() {
    if (sectionTimerInterval) {
        console.log(`Stopping timer for section ${currentSection}. Time spent: ${sectionTimeSpent[currentSection]} seconds`);
        sendTimeData(studentId, 'Ecosystem', currentSection, 'Intertidal', sectionTimeSpent[currentSection]);
        clearInterval(sectionTimerInterval);
        sectionTimerInterval = null;
    }
}

function resetSectionTimer() {
        sectionTimeSpent[currentSection] = 0; 
    }

    function sendTimeData(studentId, lessonName, sectionIndex, sectionName, timeSpent) {
    const data = {
        student_id: studentId,  // from PHP
        lesson: lessonName,
        section_index: sectionIndex,
        section_name: sectionName,
        time_spent: timeSpent
    };


    fetch('../record_time.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.text()) 
    .then(responseText => {
        console.log('Raw response from server:', responseText);  
        try {
            const responseData = JSON.parse(responseText);  
            console.log("Time data saved successfully", responseData);
        } catch (error) {
            console.error("Error parsing JSON response", error);  
        }
    })
    .catch((error) => {
        console.error("Error saving time data", error);
    });
}
        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('eco-content-active');
                section.classList.add('eco-content');
            });
        }

        function updateEinsteinImageAndButtons() {
            if (currentSection === 15 || currentSection === 16 || currentSection === 17) {
                einsteinImage.style.display = 'none'; 
                examplesButton.style.marginLeft = '100%';  
            } else {
                einsteinImage.style.display = 'block';
                examplesButton.style.marginLeft = '0%'; 
            }

            if (currentSection === 15 || currentSection === 17) {
                leftButton.style.display = 'none';
                rightButton.style.display = 'none'; 
            } else {
                leftButton.style.display = 'block';
                rightButton.style.display = 'block'; 
            }
        }

        function stopAudio() {
        audio.pause();
        audio.currentTime = 0; 
    }

    function playAudio() {
        audio.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio2() {
        audio2.pause();
        audio2.currentTime = 0; 
    }

    function playAudio2() {
        audio2.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio3() {
        audio3.pause();
        audio3.currentTime = 0; 
    }

    function playAudio3() {
        audio3.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio4() {
        audio4.pause();
        audio4.currentTime = 0; 
    }

    function playAudio4() {
        audio4.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio5() {
        audio5.pause();
        audio5.currentTime = 0; 
    }

    function playAudio5() {
        audio5.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio6() {
        audio6.pause();
        audio6.currentTime = 0; 
    }

    function playAudio6() {
        audio6.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }
    function stopAudio7() {
        audio7.pause();
        audio7.currentTime = 0; 
    }

    function playAudio7() {
        audio7.play().catch(function (error) {
            console.log("Autoplay prevented by browser, waiting for user interaction.");
        });
    }

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('eco-content');
            sections[index].classList.add('eco-content-active');
            updateEinsteinImageAndButtons();
            resetSectionTimer()
            currentSection = index; 
            startSectionTimer();
            if (sections[index] === eco1) {
        playAudio(); 
    } else {
        stopAudio();
    }
    if (sections[index] === eco2) {
        playAudio2(); 
    } else {
        stopAudio2();
    }
    if (sections[index] === eco3) {
        playAudio3(); 
    } else {
        stopAudio3();
    }
    if (sections[index] === eco4) {
        playAudio4(); 
    } else {
        stopAudio4();
    }
    if (sections[index] === eco5) {
        playAudio5(); 
    } else {
        stopAudio5();
    }
    if (sections[index] === eco6) {
        playAudio6(); 
    } else {
        stopAudio6();
    }
    if (sections[index] === eco7) {
        playAudio7(); 
    } else {
        stopAudio7();
    }
        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length - 1) {
                stopSectionTimer();
                currentSection++;
                showSection(currentSection);
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'ecosystemLesson.php'; 
            } else if (currentSection > 0) {
                stopSectionTimer();
                currentSection--;
                showSection(currentSection);
            }
        });

        
        goBackButton.addEventListener('click', function () {
            currentSection = 14; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 16; 
            showSection(currentSection);
        });

        hideAllSections();
        showSection(0); 
    });


// Quiz Data
const quizData = <?php echo json_encode($quiz_questions_solid); ?>;

let currentQuestionIndex = 0;
let correctAnswersCount = 0;
const totalQuestions = quizData.length;
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
    quizImage.src = currentQuestion.quiz_image;

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
        const correctAnswer = quizData[currentQuestionIndex].correct_answer;

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
        extraInfoText.textContent = quizData[currentQuestionIndex].additional_info;
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

function showResults() {
    const quizContainer = document.getElementById('quizContainer'); // Ensure this ID matches your HTML
    quizContainer.style.display = 'none'; // Hide the quiz container

    quizResult.style.display = 'block';
    totalQuestionsDisplay.textContent = totalQuestions;
    correctAnswersDisplay.textContent = correctAnswersCount;
    wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
    percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
    totalScoreDisplay.textContent = correctAnswersCount + ' / ' + totalQuestions;

    // Send the score to the server (optional)
    sendScoreToServer(correctAnswersCount);
}

// Function to send score to server
function sendScoreToServer(score) {
    const studentId = "<?php echo $id; ?>"; // Get the student ID from the PHP session
    const quizId = 5;
    const lesson = "Ecosystem"; 

    fetch('../save_quiz_score.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({ student_id: studentId, quiz_id: quizId, lesson: lesson, score: score }),
})
.then(response => {
    if (!response.ok) {
        return response.text().then(text => {
            throw new Error(`Network response was not ok: ${text}`);
        });
    }
    return response.json();
})
.then(data => {
    console.log('Score saved successfully:', data);
})
.catch(error => {
    console.error('There was a problem saving the score:', error);
});
}

    // Load the first question
    loadQuestion();
</script>