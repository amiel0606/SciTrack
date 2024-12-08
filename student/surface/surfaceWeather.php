<?php
session_start(); 
include_once('./includes/board.php'); 
include_once('../../admin/includes/dbCon.php'); 

if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["id"])) {
    $name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
    $id = $_SESSION["id"]; 
} else {
    
    header("Location: index.php"); 
    exit();
}
$sql = "SELECT question, choices, quiz_image, correct_answer, additional_info FROM quiz_questions_surfaceweathering";
$result = $conn->query($sql);

$quiz_questions_solid = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['choices'] = json_decode($row['choices']); 
        $quiz_questions_solid[] = $row;
    }
    shuffle($quiz_questions_solid);
} else {
    echo "No quiz questions found.";
}


$conn->close();
?>

<link rel="stylesheet" href="../css/weather.css">

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
                                        <p class="mb-5 main-font">Define what is weathering</p>
                                        <p class="mb-5 main-font">Describe the action of different weathering and</p>
                                        <p class="mb-5 main-font">Describe how rocks turn into soil</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pre-Assessment -->
                    <div class="surface-content" id="surfacePreAssessment">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6"
                            style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="headerPreAssessment">
                                PRE-ASSESSMENT
                            </h1>
                            <!-- Pre-Assessment Container -->
                            <div class="box has-text-centered" id="preAssessmentContainer"
                                style="width: 100%; max-width: 90%; max-height: 80%; padding: 30px; z-index: 2;">
                                <div class="columns">
                                    <!-- Left Column for Image -->
                                    <div class="column is-one-third has-text-centered placeholderImage">
                                        <img src="../../image/book.png" alt="Pre-Assessment Image" id="preAssessmentImage">
                                    </div>

                                    <!-- Right Column for Question and Choices -->
                                    <div class="column is-two-thirds">
                                        <!-- Question Number -->
                                        <h2 class="title secondary-font is-2" id="preAssessmentQuestionNumber">Question 1</h2>

                                        <!-- Question -->
                                        <p class="subtitle main-font is-4" id="preAssessmentQuestionText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>

                                        <!-- Choices as Buttons with Responsive Sizes -->
                                        <div class="buttons is-flex is-flex-direction-column ml-3">
                                            <button
                                                class="button main-font is-fullwidth preAssessment-choice-btn is-size-6-widescreen is-size-7-tablet">Lorem ipsum</button>
                                            <button
                                                class="button main-font is-fullwidth preAssessment-choice-btn is-size-6-widescreen is-size-7-tablet">Lorem ipsum</button>
                                            <button
                                                class="button main-font is-fullwidth preAssessment-choice-btn is-size-6-widescreen is-size-7-tablet">Lorem ipsum</button>
                                            <button
                                                class="button main-font is-fullwidth preAssessment-choice-btn is-size-6-widescreen is-size-7-tablet">Lorem ipsum</button>
                                        </div>

                                        <div class="box extra-info-box" id="preAssessmentExtraInfoBox" style="display:none;">
                                            <h3 class="subtitle secondary-font is-3" id="preAssessmentExtraInfoTitle">Additional
                                                Information</h3>
                                            <p id="preAssessmentExtraInfoText" class="main-font"></p>
                                        </div>

                                        <!-- Next Button -->
                                        <button
                                            class="button is-success main-font is-size-6-widescreen is-size-7-tablet"
                                            id="preAssessmentNextButton" disabled>Next Question</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Pre-Assessment Result -->
                            <div class="box has-text-centered p-6" id="preAssessmentResult">
                                <h2 class="subtitle secondary-font is-1">Pre-Assessment Result</h2>
                                <p class="subtitle secondary-font is-2 Feedback">Well Done!</p>

                                <div class="columns is-centered is-vcentered mt-5">
                                    <div class="column is-3 has-text-centered">
                                        <div class="is-flex is-align-items-center is-justify-content-center">
                                            <p class="has-text-weight-bold"
                                                style="font-size: 6rem; color: #FFA500; margin-right: 4rem;"
                                                id="preAssessmentDisplayCorrectAnswers">0</p>
                                            <p style="font-size: 24px;">Out Of</p>
                                            <p class="has-text-weight-bold"
                                                style="font-size: 6rem; color: #007BFF; margin-left: 4rem;"
                                                id="preAssessmentDisplayTotalQuestions">0</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="columns is-centered mt-5">
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;" id="preAssessmentTotalQuestions">Total
                                            Questions: <span class="has-text-weight-bold" id="preAssessmentTotal">0</span>
                                        </p>
                                        <p style="font-size: 24px; margin-left: 60px;" id="preAssessmentPercentage">
                                            Percentage: <span class="has-text-weight-bold" id="preAssessmentPercent">0%</span></p>
                                    </div>
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;"><span
                                                class="has-text-weight-bold has-text-success">Correct Answers:</span>
                                            <span class="has-text-weight-bold has-text-success"
                                                id="preAssessmentCorrectAnswers">0</span>
                                        </p>
                                        <p style="font-size: 24px; margin-left: 60px;"><span
                                                class="has-text-weight-bold has-text-danger">Wrong Answers:</span> <span
                                                class="has-text-weight-bold has-text-danger" id="preAssessmentWrongAnswers">0</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Weathering -->
                    <div class="surface-content" id="surfaceWeathering">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Weathering
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        It is a process by which rocks are worn away and broken down into smaller pieces.  
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/surface1.gif" alt="Surface">
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
                                        Erosion
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        Erosion occurs when small particles are removed and transferred from one location to another.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/surface2.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Video -->
                    <div class="surface-content" id="surfaceVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6" style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="header2">Weathering and soil Formation</h1>

                            <!-- Video for -->
                            <div class="box">
                                <video id="solidVideo" width="750" height="520" controls>
                                    <source src="../../videos/Weather.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: It's AumSum Time Youtube
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Types -->
                    <div class="surface-content" id="surfaceTypes">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">Three types of weathering</h1>

                            <div class="image-container mb-2" id="sChar">
                                <!-- Motion Image -->
                                <div class="image-item" id="bio1">
                                    <figure class="image">
                                        <img src="../../image/surface3.gif" alt="Surface">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Physical weathering</p>
                                </div>

                                <!-- Motion Image -->
                                <div class="image-item" id="bio2">
                                    <figure class="image">
                                        <img src="../../image/surface4.gif" alt="Surface">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Chemical weathering</p>
                                </div>

                                <!-- Motion Image -->
                                <div class="image-item" id="bio3">
                                    <figure class="image">
                                        <img src="../../image/surface5.gif" alt="Surface">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Biological weathering</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Physical -->
                    <div class="surface-content" id="surfacePhysical">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="headerPhy">
                                        Physical Weathering
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing">
                                        It is also known as mechanical weathering, is a natural or man-made process that causes the break down of rocks and minerals.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/surface6.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Chemical -->
                    <div class="surface-content" id="surfaceChemical">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="sur-text">
                                    <p class="title main-font has-text-white" id="headerChe">
                                        Chemical Weathering
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing">
                                        It pertains to the changes in rock structure under the action or influence of chemical reactions. 
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image sur-image">
                                        <img src="../../image/surface7.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Biological -->
                    <div class="surface-content" id="surfaceBiological">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="sur-text">
                                    <p class="title main-font has-text-white" id="headerChe">
                                        Biological Weathering
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white ty-spacing2">
                                        It occurs when living organisms break down rocks. Plant roots and soil organisms cause biological weathering 
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image sur-image2">
                                        <img src="../../image/surface8.gif" alt="Surface">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Surface Rock -->
                    <div class="surface-content" id="surfaceRock">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-4 p-6">
                            <h1 class="title has-text-white has-text-centered secondary-font" id="header">Rock formation resulting from wind abrasion</h1>

                            <!-- Content Layout -->
                            <div class="column is-flex is-flex-direction-column is-align-items-center has-text-centered">
                                <figure class="image es-image">
                                    <img src="../../image/surface9.gif" alt="Surface">
                                </figure>

                                <p class="title main-font column is-one-fifths is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white mb-6">
                                    <span style="color: yellow;">Wind</span> may also cause weathering through abrasion
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Activity -->
                    <div class="surface-content" id="surfaceActivity">
                        <div class="modal">
                            <!-- Modal Background -->
                            <div class="modal-background"></div>

                            <!-- Modal Content -->
                            <div class="modal-content" id="activityContainer1">
                                <div class="box has-background-white-ter activity">
                                    
                                    <p class="title has-text-centered has-text-black actHeader">ACTIVITY</p>
                                    
                                    <p class="subtitle has-text-centered has-text-grey is-size-3 mb-5 actStatement">
                                        Which of these demonstrates breaking down of rocks due to physical, chemical, biological?
                                    </p>

                                    <div class="columns">
                                        <!-- Activity Boxes -->
                                        <div class="column is-two-thirds">
                                            <div class="columns is-multiline">
                                                <!-- Top Row: 3 Images -->
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct1">
                                                        <img src="../exerciseImage/dragEst6.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct2">
                                                        <img src="../exerciseImage/dragWeathering1.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct3">
                                                        <img src="../exerciseImage/dragWeathering2.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <!-- Bottom Row: 2 Images -->
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct4">
                                                        <img src="../exerciseImage/dragWeathering3.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct5">
                                                        <img src="../exerciseImage/dragEst4.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="column is-one-third">
                                            <p class="subtitle has-text-centered actStatement">Drop Here</p>
                                            <div class="columns is-multiline">
                                                <div class="column is-one-third">
                                                    <div class="box has-background-white dropZone" id="dropZone1"></div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box has-background-white dropZone" id="dropZone2"></div>
                                                </div>
                                            </div>

                                            <div class="column is-full mt-4">
                                                <div class="box has-background-white dropZone" id="dropZone3"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Information Icon -->
                                    <div class="info-icon" id="infoIcon">
                                        <i class="fas fa-info-circle"></i> <!-- Using Font Awesome icon -->
                                    </div>

                                    <!-- Instruction Modal -->
                                    <div class="instruction-modal" id="instructionModal">
                                        <div class="instruction-content">
                                            <p class="subtitle main-font has-text-dark is-size-1">
                                                <span style= "color: blue; font-weight: bold;">Drag and Classify</span>
                                            </p>
                                            <p class="subtitle main-font has-text-dark">
                                                <span class="title">Instruction:</span> <br><br>Drag 3 images to the correct box based on their descriptions. Match each image with the right category.
                                            </p>
                                            <button class="button is-medium is-secondary" id="closeInstruction">Close</button>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="has-text-centered">
                                        <button class="button is-success mt-4 submitAct" id="submitAct1">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Content -->
                            <div class="modal-content" id="activityContainer2">
                                <div class="box has-background-white-ter activity">
                                    
                                    <p class="title has-text-centered has-text-black actHeader">ACTIVITY</p>

                                    <!-- Activity Boxes -->
                                    <div class="columns is-multiline">
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct6">
                                                <img src="../exerciseImage/dragSoil3.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct7">
                                                <img src="../exerciseImage/dragSoil4.png" alt="Image 1" />
                                            </div>
                                        </div>
                                        
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct8">
                                                <img src="../exerciseImage/dragSoil5.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct9">
                                                <img src="../exerciseImage/dragSoil6.png" alt="Image 1" />
                                            </div>
                                        </div>

                                        <div class="column is-half">
                                            <p class="subtitle has-text-left has-text-grey is-size-3 mb-5 actStatement2">
                                                What type of weathering is also known as mechanical weathering?
                                            </p>

                                            <!-- Input Box below actStatement2 -->
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input has-text-centered" type="text" placeholder="Your answer here">
                                                </div>
                                            </div>

                                            <!-- Information Icon -->
                                            <div class="info-icon" id="infoIcon1">
                                                <i class="fas fa-info-circle"></i> <!-- Using Font Awesome icon -->
                                            </div>

                                            <!-- Instruction Modal -->
                                            <div class="instruction-modal" id="instructionModal1">
                                                <div class="instruction-content">
                                                    <p class="subtitle main-font has-text-dark is-size-1">
                                                        <span style= "color: blue; font-weight: bold;">Guess the Concept</span>
                                                    </p>
                                                    <p class="subtitle main-font has-text-dark">
                                                        <span class="title">Instruction:</span> <br><br>Look at the image and read the statement. Use them to identify the correct answer. Type your answer in the answer box.
                                                    </p>
                                                    <button class="button is-medium is-secondary" id="closeInstruction1">Close</button>
                                                </div>
                                            </div>

                                            <!-- Submit Button below the input box -->
                                            <div class="has-text-centered">
                                                <button class="button is-success mt-4 submitAct" id="submitAct2">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Content -->
                            <div class="modal-content" id="activityContainer3">
                                <div class="box has-background-white-ter activity">
                                    
                                    <p class="title has-text-centered has-text-black actHeader">ACTIVITY</p>

                                    <!-- Activity Boxes -->
                                    <div class="columns is-multiline">
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct10">
                                                <img src="../exerciseImage/dragWeathering8.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct11">
                                                <img src="../exerciseImage/dragWeathering9.png" alt="Image 1" />
                                            </div>
                                        </div>
                                        
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct12">
                                                <img src="../exerciseImage/dragWeathering10.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct13">
                                                <img src="../exerciseImage/dragWeathering11.png" alt="Image 1" />
                                            </div>
                                        </div>

                                        <div class="column is-half">
                                            <p class="subtitle has-text-left has-text-grey is-size-3 actStatement3">
                                                What process occurs when small particles are removed and transferred from one location to another?
                                            </p>

                                            <p class="subtitle has-text-centered has-text-grey is-size-3 jLetters">
                                                <span style="color: blue;">Letters: </span>
                                            </p>

                                            <div class="box letterChoicesBox">
                                                <div class="columns is-multiline">
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter1">S</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter2">R</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter3">O</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter4">Z</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter5">O</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter6">E</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter7">G</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter8">N</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter9">F</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter10">I</div>
                                                    </div>
                                                    <!-- Add more letters as needed -->
                                                </div>
                                            </div>

                                            <!-- Input Box below actStatement3 -->
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input2 has-text-centered" type="text" placeholder="Your answer here">
                                                </div>
                                            </div>

                                            <!-- Information Icon -->
                                            <div class="info-icon" id="infoIcon2">
                                                <i class="fas fa-info-circle"></i> <!-- Using Font Awesome icon -->
                                            </div>

                                            <!-- Instruction Modal -->
                                            <div class="instruction-modal" id="instructionModal2">
                                                <div class="instruction-content">
                                                    <p class="subtitle main-font has-text-dark is-size-1">
                                                        <span style= "color: blue; font-weight: bold;">What’s the Right Word?</span>
                                                    </p>
                                                    <p class="subtitle main-font has-text-dark">
                                                        <span class="title">Instruction:</span> <br><br>Look at the four pictures and read the description carefully. The description will give you a clue about what the pictures are showing. 
                                                        You will see a set of letters in the choices. Click on the letters to put them into the answer box to form the correct word. If you want to remove a letter, click it again to take it out of the box. When you’re done, click Submit to check if you’re correct!
                                                    </p>
                                                    <button class="button is-medium is-secondary" id="closeInstruction2">Close</button>
                                                </div>
                                            </div>

                                            <!-- Submit Button below the input box -->
                                            <div class="has-text-centered">
                                                <button class="button is-success mt-4 submitAct" id="submitAct3">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Correct Answer -->
                            <div class="modal answerMod" id="correctAnswerModal">
                                <div class="modal-content">
                                    <div class="box has-background-success">
                                        <img src="https://cdn-icons-png.flaticon.com/512/5610/5610944.png" alt="Correct Icon"/>
                                        <p class="subtitle main-font is-size-3 has-text-white">Great Job!</p>
                                        <p class="subtitle main-font is-size-2 has-text-white">Correct!</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Wrong Answer -->
                            <div class="modal answerMod" id="wrongAnswerModal">
                                <div class="modal-content">
                                    <div class="box has-background-danger">
                                        <img src="https://cdn-icons-png.freepik.com/256/11560/11560478.png?ga=GA1.1.1655042950.1733505836&semt=ais_hybrid" alt="Wrong Icon"/>
                                        <p class="subtitle main-font is-size-3 has-text-white">Try Again!</p>
                                        <p class="subtitle main-font is-size-2 has-text-white">Incorrect!</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Modal for "Answer First" -->
                            <div class="modal" id="noAnswerModal">
                                <div class="modal-content">
                                    <div class="box has-background-warning has-text-centered">
                                        <p class="has-text-black is-size-4">Please drag and drop an image before submitting!</p>
                                    </div>
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
                            <div class="box has-text-centered p-6" id="quizResult" style="margin-top: -10px;">
                                <h2 class="subtitle secondary-font is-1">Quiz Result</h2>
                                <p class="subtitle secondary-font is-2 Feedback">Good Job!</p>
                                
                                <div class="columns is-centered is-vcentered mt-5">
                                    
                                    <div class="column is-3 has-text-centered">
                                        <div class="is-flex is-align-items-center is-justify-content-center">
                                            <p class="has-text-weight-bold" style="font-size: 6rem; color: #FFA500; margin-right: 4rem;" id="displayCorrectAnswers">0</p>
                                            <p style="font-size: 24px;">Out Of</p>
                                            <p class="has-text-weight-bold" style="font-size: 6rem; color: #007BFF; margin-left: 4rem;" id="displayTotalQuestions">0</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="columns is-centered mt-5">
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;" id="displayCorrectAnswers">Total Questions: <span class="has-text-weight-bold" id="totalQuestions">0</span></p>
                                        <p style="font-size: 24px; margin-left: 60px;" id="displayCorrectAnswers">Percentage: <span class="has-text-weight-bold" id="percentage">0%</span></p>
                                    </div>
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;" ><span class="has-text-weight-bold has-text-success">Correct Answers:</span> <span class="has-text-weight-bold has-text-success" id="correctAnswers">0</span></p>
                                        <p style="font-size: 24px; margin-left: 60px;" ><span class="has-text-weight-bold has-text-danger">Wrong Answers:</span> <span class="has-text-weight-bold has-text-danger" id="wrongAnswers">0</span></p>
                                    </div>
                                </div>
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
                                <div class="columns is-half ml-6 p-2" id="nxtbtn">
                                    <a href="surfaceSoil.php">
                                        <button class="button back-button is-success is-size-6-desktop is-size-6-tablet" style="z-index: 5;">
                                        <p class="has-text-white">Next Topic</p>
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
                                        <img src="../../image/med7.png" alt="medal1">
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
<audio id="surfaceAudio" src="../../sounds/surface1.mp3"></audio>
<audio id="surfaceAudio2" src="../../sounds/surface2.mp3"></audio>
<audio id="surfaceAudio3" src="../../sounds/surface3.mp3"></audio>
<audio id="surfaceAudio4" src="../../sounds/surface4.mp3"></audio>
<audio id="surfaceAudio5" src="../../sounds/surface5.mp3"></audio>
<audio id="surfaceAudio6" src="../../sounds/surface6.mp3"></audio>
<audio id="surfaceAudio7" src="../../sounds/surface7.mp3"></audio>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const objectives = document.getElementById('objectives');
        const surfacePreAssessment = document.getElementById('surfacePreAssessment');
        const surfaceWeathering = document.getElementById('surfaceWeathering');
        const surfaceErosion = document.getElementById('surfaceErosion');
        const surfaceVideo = document.getElementById('surfaceVideo');
        const surfaceTypes = document.getElementById('surfaceTypes');
        const surfacePhysical = document.getElementById('surfacePhysical');
        const surfaceChemical = document.getElementById('surfaceChemical');
        const surfaceBiological = document.getElementById('surfaceBiological');
        const surfaceRock = document.getElementById('surfaceRock');
        const surfaceActivity = document.getElementById('surfaceActivity');
        const letsTry = document.getElementById('letsTry');
        const surfaceQuiz = document.getElementById('surfaceQuiz');
        const surfaceCompleted = document.getElementById('surfaceCompleted');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        
        const images = document.querySelectorAll('.imageAct');
        const dropZones = document.querySelectorAll('.dropZone');
        const modal = document.querySelector('.modal');
        const modalBackground = document.querySelector('.modal-background');
        const infoIcon = document.getElementById('infoIcon');
        const infoIcon1 = document.getElementById('infoIcon1');
        const infoIcon2 = document.getElementById('infoIcon2');
        const instructionModal = document.getElementById('instructionModal');
        const instructionModal1 = document.getElementById('instructionModal1');
        const instructionModal2 = document.getElementById('instructionModal2');
        const closeInstruction = document.getElementById('closeInstruction');
        const closeInstruction1 = document.getElementById('closeInstruction1');
        const closeInstruction2 = document.getElementById('closeInstruction2');

        const submitAct1 = document.getElementById('submitAct1');
        const submitAct2 = document.getElementById('submitAct2');
        const submitAct3 = document.getElementById('submitAct3');
        const activityContainer1 = document.getElementById('activityContainer1');
        const activityContainer2 = document.getElementById('activityContainer2');
        const activityContainer3 = document.getElementById('activityContainer3');
        const input2 = document.querySelector('.input');
        const input3 = document.querySelector('.input2');
        const tiles = document.querySelectorAll('.tileLetter');
        const correctAnswerModal = document.getElementById('correctAnswerModal');
        const wrongAnswerModal = document.getElementById('wrongAnswerModal');

        const correctSound = new Audio('../../sounds/correct.mp3');
        const incorrectSound = new Audio('../../sounds/incorrect.mp3');
        const buzzer = new Audio('../../sounds/wrong.mp3');
        buzzer.volume = 0.5;

        let selectedImage = null;
        activityContainer1.style.display = 'block';
        activityContainer2.style.display = 'none';
        activityContainer3.style.display = 'none';

        const audio = document.getElementById('surfaceAudio');
        const audio2 = document.getElementById('surfaceAudio2');
        const audio3 = document.getElementById('surfaceAudio3');
        const audio4 = document.getElementById('surfaceAudio4');
        const audio5 = document.getElementById('surfaceAudio5');
        const audio6 = document.getElementById('surfaceAudio6');
        const audio7 = document.getElementById('surfaceAudio7');
        let currentSection = 0;
        const sections = [objectives, surfacePreAssessment, surfaceWeathering, surfaceErosion, surfaceVideo, surfaceTypes, surfacePhysical, surfaceChemical, 
                            surfaceBiological, surfaceRock, surfaceActivity, letsTry, surfaceQuiz, surfaceCompleted];
        let sectionTimeSpent = new Array(sections.length).fill(0); 
        let sectionTimerInterval;
        const studentId = <?php echo json_encode($id); ?>;
        console.log("Student ID from PHP:", studentId);

        function checkSectionComplete() {
            if (currentSection === sections.length - 1) {  // 'matterCompleted' is the last section
                checkQuizTaken();  // Check quiz status

                fetch('../check_quiz_status.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        student_id: studentId,
                        quiz_id: 8,
                        lesson: 'Earth\'s Surface'
                    })
                })
                .then(response => response.json())
                .then(data => {
                if (data.status === 'taken') {

                    const achievementData = {
                        student_id: studentId,
                        achievement_name: 'surfaceOneCompleted',  
                        image_path: '../image/med7.png'  
                    };


                    fetch('../add_achievement.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(achievementData)
                    })
                    .then(response => response.json())
                    .then(achievementResponse => {
                        console.log('Achievement added:', achievementResponse.message);
                        console.log(achievementData);  
                    })
                    .catch(error => {
                        console.error('Error adding achievement:', error);
                    });
                } else {
                    showSection(10); // Show a section to encourage quiz completion
                }
            })
            .catch(error => {
                console.error('Error checking quiz status:', error);
            });
        }}


        function checkQuizTaken() {
            fetch('../check_quiz_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    student_id: studentId,
                    quiz_id: 8,
                    lesson: 'Earth\'s Surface'
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Server response:', data);


                rightButton.onclick = (event) => {
                    if (data.status !== 'taken') {
                        alert('Quiz not taken yet. Please complete the quiz before proceeding.');

                        showSection(10); 
                        updateEinsteinImageAndButtons();
                    } else {
                        if (currentSection < sections.length - 1) {
                            showSection(currentSection + 1);
                        }
                    }
                };
            })
            .catch(error => {
                console.error('Error checking quiz status:', error);
            });
        }

        //For Exercise

        // Show the instruction modal when the icon is clicked
        infoIcon.addEventListener('click', () => {
            instructionModal.style.display = 'block';
        });
        infoIcon1.addEventListener('click', () => {
            instructionModal1.style.display = 'block';
        });
        infoIcon2.addEventListener('click', () => {
            instructionModal2.style.display = 'block';
        });

        // Close the instruction modal when the close button is clicked
        closeInstruction.addEventListener('click', () => {
            instructionModal.style.display = 'none';
        });
        closeInstruction1.addEventListener('click', () => {
            instructionModal1.style.display = 'none';
        });
        closeInstruction2.addEventListener('click', () => {
            instructionModal2.style.display = 'none';
        });

        const originalPositions = {};
        images.forEach(image => {
            const rect = image.getBoundingClientRect();
            originalPositions[image.id] = {
                parent: image.parentElement,
                styles: {
                    marginLeft: image.style.marginLeft || '0',
                    marginTop: image.style.marginTop || '0',
                    left: rect.left,
                    top: rect.top,
                }
            };
            image.setAttribute('draggable', 'true');

            image.addEventListener('dragstart', (e) => {
                e.dataTransfer.setData('text/plain', e.target.id);
                e.target.classList.add('selected-box'); 
            });

            image.addEventListener('dragend', (e) => {
                e.target.classList.remove('selected-box'); 
            });
        });

        dropZones.forEach(zone => {
            zone.addEventListener('dragover', (e) => {
                e.preventDefault(); 
                zone.classList.add('hovered'); 
            });

            zone.addEventListener('dragleave', () => {
                zone.classList.remove('hovered'); 
            });

            zone.addEventListener('drop', (e) => {
                e.preventDefault();
                zone.classList.remove('hovered'); 

                const draggedId = e.dataTransfer.getData('text/plain');
                const draggedElement = document.getElementById(draggedId);

                if (draggedElement) {
                    
                    if (!zone.querySelector('.imageAct')) {
                        zone.appendChild(draggedElement);
                        draggedElement.style.marginLeft = '0';
                    } else {
                        noAnswerModal.querySelector('p').textContent = "This drop box already contains an element.";
                        noAnswerModal.style.display = 'block';
                        setTimeout(() => {
                            noAnswerModal.style.display = 'none';
                        }, 3000); 
                        return;
                    }
                }
            });

            zone.addEventListener('click', (e) => {
                if (e.target.classList.contains('imageAct')) {
                    const imageId = e.target.id;
                    const originalData = originalPositions[imageId];

                    if (originalData) {
                        const originalParent = originalData.parent;

                        originalParent.appendChild(e.target);

                        e.target.style.marginLeft = originalData.styles.marginLeft;
                        e.target.style.marginTop = originalData.styles.marginTop;

                        if (imageId === 'imageAct2') {
                            e.target.style.marginLeft = '-62px'; 
                        } else if (imageId === 'imageAct3') {
                            e.target.style.marginLeft = '-130px'; 
                        } else if (imageId === 'imageAct4') {
                            e.target.style.marginLeft = '130px';
                        } else if (imageId === 'imageAct5') {
                            e.target.style.marginLeft = '130px';
                        }

                        // Reset position
                        e.target.style.position = 'static';
                    }
                }
            });
        });
        const tileStates = {};
        tiles.forEach(letter => {
            tileStates[letter.id] = false; 

            letter.addEventListener('click', function() {
                const letterValue = this.innerText;
                const letterId = this.id; 

                const currentInput = input3.value; 
                const letterCountInInput = currentInput.split('').filter(char => char === letterValue).length;

                if (!tileStates[letterId]) {
                    input3.value += letterValue;  
                    tileStates[letterId] = true;  

                    this.style.pointerEvents = 'none';
                    this.style.backgroundColor = '#d3d3d3'; 
                } else if (tileStates[letterId] && letterCountInInput > 0) {
                    const lastIndex = currentInput.lastIndexOf(letterValue);
                    if (lastIndex !== -1) {
                        input3.value = currentInput.slice(0, lastIndex) + currentInput.slice(lastIndex + 1); 
                        tileStates[letterId] = false;  

                        this.style.pointerEvents = 'auto';
                        this.style.backgroundColor = '';  
                    }
                }
            });
        });

        submitAct1.addEventListener('click', () => {
            const imageAct1 = document.getElementById('imageAct1');
            const imageAct2 = document.getElementById('imageAct2');
            const imageAct3 = document.getElementById('imageAct3');
            const imageAct4 = document.getElementById('imageAct4');
            const imageAct5 = document.getElementById('imageAct5');

            const dropZone1 = document.getElementById('dropZone1');
            const dropZone2 = document.getElementById('dropZone2');
            const dropZone3 = document.getElementById('dropZone3');

            const correctDropZones = [dropZone1, dropZone2, dropZone3];
            const wrongImages = [imageAct1, imageAct5];
            const placedImages = correctDropZones.filter(dropZone => dropZone.children.length > 0);

            if (placedImages.length === 0) {
                const noAnswerModal = document.getElementById('noAnswerModal');
                noAnswerModal.querySelector('p').textContent = "No images placed. Please try again.";
                noAnswerModal.style.display = 'block';
                setTimeout(() => {
                    noAnswerModal.style.display = 'none';
                }, 3000);
                return;
            }


            if (placedImages.length < correctDropZones.length) {
                const noAnswerModal = document.getElementById('noAnswerModal');
                noAnswerModal.querySelector('p').textContent = "Make sure to place an image in every drop box.";
                noAnswerModal.style.display = 'block';
                setTimeout(() => {
                    noAnswerModal.style.display = 'none';
                }, 3000);
                return;
            }

            const allCorrectImagesPlaced = [imageAct2, imageAct3, imageAct4].every(image =>
                correctDropZones.includes(image.parentElement)
            );

            const noWrongImagesPlaced = !wrongImages.some(image =>
                correctDropZones.includes(image.parentElement)
            );

            const isCorrect = allCorrectImagesPlaced && noWrongImagesPlaced;

            if (isCorrect) {
                correctSound.play();
                correctAnswerModal.style.display = 'block';
                setTimeout(() => {
                    correctAnswerModal.style.display = 'none';
                    activityContainer1.style.display = 'none';
                    activityContainer2.style.display = 'block'; 
                }, 3000); 
            } else {
                incorrectSound.play();
                incorrectSound.addEventListener('ended', () => {
                    buzzer.play();
                });
                wrongAnswerModal.style.display = 'block';
                setTimeout(() => {
                    wrongAnswerModal.style.display = 'none';
                }, 3000); 
            }
        });

        submitAct2.addEventListener('click', function() {
            const answer = input2.value.trim().toLowerCase();
            const correctAnswer = "physical";
            if (!answer) {
                noAnswerModal.querySelector('p').textContent = "Please provide an answer to proceed.";
                noAnswerModal.style.display = 'block';
                setTimeout(() => {
                    noAnswerModal.style.display = 'none';
                }, 3000); 
                return;
            }
            if (answer === correctAnswer) {
                correctSound.play();
                const correctAnswerModal = document.getElementById('correctAnswerModal');
                correctAnswerModal.style.display = 'block';
                setTimeout(() => {
                    correctAnswerModal.style.display = 'none';
                    activityContainer2.style.display = 'none';
                    activityContainer3.style.display = 'block';
                }, 3000);
            } else {
                const wrongAnswerModal = document.getElementById('wrongAnswerModal');
                incorrectSound.play();
                incorrectSound.addEventListener('ended', () => {
                    buzzer.play();
                });
                wrongAnswerModal.style.display = 'block';
                setTimeout(() => {
                    wrongAnswerModal.style.display = 'none';
                    noAnswerModal.querySelector('p').textContent = "Hint: 8 letters";
                    noAnswerModal.style.display = 'block';

                    setTimeout(() => {
                        noAnswerModal.style.display = 'none';
                    }, 2000);
                }, 3000); 
            }
        });

        submitAct3.addEventListener('click', function() {
            const answer = input3.value.trim();
            const correctAnswer = "EROSION";
            if (!answer) {
                noAnswerModal.querySelector('p').textContent = "Please provide an answer to proceed.";
                noAnswerModal.style.display = 'block';
                setTimeout(() => {
                    noAnswerModal.style.display = 'none';
                }, 3000); 
                return;
            }
            if (answer === correctAnswer) {
                correctSound.play();
                const correctAnswerModal = document.getElementById('correctAnswerModal');
                correctAnswerModal.style.display = 'block';
                setTimeout(() => {
                    activityContainer3.style.display = 'none'; 
                    modal.style.display = 'none'; 
                    modalBackground.style.display = 'none'; 
                    letsTry.style.display = 'block'; 
                }, 3000);
            } else {
                const wrongAnswerModal = document.getElementById('wrongAnswerModal');
                incorrectSound.play();
                incorrectSound.addEventListener('ended', () => {
                    buzzer.play();
                });
                wrongAnswerModal.style.display = 'block';
                setTimeout(() => {
                    wrongAnswerModal.style.display = 'none';
                    noAnswerModal.querySelector('p').textContent = "Hint: 7 letters";
                    noAnswerModal.style.display = 'block';

                    setTimeout(() => {
                        noAnswerModal.style.display = 'none';
                    }, 2000);
                }, 3000);
            }
        });

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
                sendTimeData(studentId, 'Earths Surface', currentSection, 'Weathering', sectionTimeSpent[currentSection]);
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
                section.classList.remove('surface-content-active');
                section.classList.add('surface-content');
            });
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

        function updateEinsteinImageAndButtons() {
            if (currentSection === 11 || currentSection === 12 || currentSection === 13) {
                einsteinImage.style.display = 'none';
                examplesButton.style.marginLeft = '100%';    
            } else {
                einsteinImage.style.display = 'block';
                examplesButton.style.marginLeft = '0%'; 
            }

            if (currentSection === 11 || currentSection === 13) {
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
            resetSectionTimer()
            currentSection = index; 
            startSectionTimer();

            if (currentSection === 10) {
                modal.style.display = 'block';
                modalBackground.style.display = 'block';
                activityContainer1.style.display = 'block'; 
                examplesButton.style.display = 'none';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'flex';
                goBackButton.style.display = 'flex';
                proceedToQuizButton.style.display = 'flex';
                leftButton.style.display = 'none';
                rightButton.style.display = 'none';
            } else if (currentSection === 11) {
                examplesButton.style.display = 'none';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'flex';
                goBackButton.style.display = 'flex';
                proceedToQuizButton.style.display = 'flex';
                leftButton.style.display = 'none';
                rightButton.style.display = 'none';
            } 

            if (sections[index] === surfaceWeathering) {
                playAudio(); 
            } else {
                stopAudio();
            }
            if (sections[index] === surfaceErosion) {
                playAudio2(); 
            } else {
                stopAudio2();
            }
            if (sections[index] === surfaceTypes) {
                playAudio3(); 
            } else {
                stopAudio3();
            }

            if (sections[index] === surfacePhysical) {
                playAudio4(); 
            } else {
                stopAudio4();
            }
            if (sections[index] === surfaceChemical) {
                playAudio5(); 
            } else {
                stopAudio5();
            }
            if (sections[index] === surfaceBiological) {
                playAudio6(); 
            } else {
                stopAudio6();
            }
            if (sections[index] === surfaceRock) {
                playAudio7(); 
            } else {
                stopAudio7();
            }
            if (sections[index] === surfaceQuiz) {
                checkQuizTaken();
            }
            if (sections[index] === surfaceCompleted) {
                checkSectionComplete();
            } 

        }

        rightButton.addEventListener('click', function () {
            if (currentSection < sections.length + 1) {
                stopSectionTimer();
                if (sections[currentSection] === surfaceRock) {
                    currentSection = sections.indexOf(surfaceActivity);
                    showSection(currentSection); 

                    // Show the modal and activity container
                    modal.style.display = 'block';
                    modalBackground.style.display = 'block';
                    activityContainer1.style.display = 'block';
                    examplesButton.style.display = 'none';  
                    einsteinImage.style.display = 'none';  
                    letsTryButton.style.display = 'flex'; 
                    goBackButton.style.display = 'flex';    
                    proceedToQuizButton.style.display = 'flex'; 
                    leftButton.style.display = 'none';     
                    rightButton.style.display = 'none';   
                } else {
                    currentSection++; 
                    showSection(currentSection);
                }
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'surfaceLesson.php'; 
            } else if (currentSection === 12) {
                letsTry.style.display = 'block'; 
                currentSection = 11;
                showSection(currentSection);
            } else if (currentSection > 0) {
                stopSectionTimer();
                currentSection--;
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 9; 
            letsTry.style.display = 'none'; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 12; 
            letsTry.style.display = 'none'; 
            showSection(currentSection);
        });

        hideAllSections();
        showSection(0); 

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

                if (selectedAnswer === correctAnswer) {
                    correctAnswersCount++;
                    correctSound.play();
                } else{
                    incorrectSound.play();
                    incorrectSound.addEventListener('ended', () => {
                        buzzer.play();
                    });
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
                    const feedbackDisplay = document.querySelector('.Feedback'); // Select the Feedback element
                    quizContainer.style.display = 'none'; // Hide the quiz container

                    document.getElementById('displayTotalQuestions').textContent = totalQuestions;
                    document.getElementById('displayCorrectAnswers').textContent = correctAnswersCount;

                    // Feedback based on correct answers
                if (correctAnswersCount === 0) {
                    feedbackDisplay.textContent = "You didn't score anything! Try again!";
                } else if (correctAnswersCount > 0 && correctAnswersCount < 5) {
                    feedbackDisplay.textContent = "Nice Try!";
                } else if (correctAnswersCount >= 5 && correctAnswersCount < 10) {
                    feedbackDisplay.textContent = "Good Job!";
                } else if (correctAnswersCount === 10) {
                    feedbackDisplay.textContent = "Perfect!";
                }

                    quizResult.style.display = 'block';
                    totalQuestionsDisplay.textContent = totalQuestions;
                    correctAnswersDisplay.textContent = correctAnswersCount;
                    wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
                    percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
                    // Send the score to the server (optional)
                    sendScoreToServer(correctAnswersCount);
                }
        // Function to send score to server
        function sendScoreToServer(score) {
            const studentId = "<?php echo $id; ?>"; // Get the student ID from the PHP session
            const quizId = 8; 
            const lesson = "Earth\'s Surface"; 

            fetch('../save_quiz_score.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ student_id: studentId, quiz_id: quizId, lesson: lesson, score: score }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'error') {
                    alert(data.message); // Show alert if there's an error
                } else {
                    console.log('Score saved successfully:', data.message);
                }
            })
            .catch(error => {
                console.error('Error saving score:', error);
                alert('There was a problem saving your score. Please try again later.');
            });
        }
        // Load the first question
        loadQuestion();
    });
</script>