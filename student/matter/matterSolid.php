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

// Fetch pre-assessment questions
$preAssessmentData = [];
$postAssessmentData = [];

// Fetch 'pre' questions
$sqlPre = "SELECT question, choices, quiz_image, correct_answer, additional_info 
           FROM quiz_questions_solid 
           WHERE type = 'pre' 
           ORDER BY RAND() 
           LIMIT 5";

$resultPre = $conn->query($sqlPre);

if ($resultPre->num_rows > 0) {
    while ($row = $resultPre->fetch_assoc()) {
        $row['choices'] = json_decode($row['choices']);
        $preAssessmentData[] = $row;
    }
}

// Fetch 'post' questions
$sqlPost = "SELECT question, choices, quiz_image, correct_answer, additional_info 
            FROM quiz_questions_solid 
            WHERE type = 'post' 
            ORDER BY RAND() 
            LIMIT 10";

$resultPost = $conn->query($sqlPost);

if ($resultPost->num_rows > 0) {
    while ($row = $resultPost->fetch_assoc()) {
        $row['choices'] = json_decode($row['choices']);
        $postAssessmentData[] = $row;
    }
}

$conn->close();
?>


<link rel="stylesheet" href="../css/solid.css">

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../../image/board.png" alt="Board Image"
                            style="width: 140%; height: 105%; max-width: 1800px; margin-left: -17%">
                    </figure>

                    <!-- Pre-Assessment -->
                    <div class="matter-content" id="matterPreAssessment">
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

                    <!-- Matter States -->
                    <div class="x-content" id="matterStates">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mb-6 p-6">
                            <h1 class="title has-text-white mt-5 secondary-font" id="header">SOLID</h1>

                            <!-- Solid Image -->
                            <div class="stateImage">
                                <figure class="image">
                                    <img src="../../image/msolidgif.gif" alt="Solid">
                                </figure>
                            </div>

                            <p class="main-font column is-four-fifths title is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-centered has-text-white mb-6"
                                id="states">
                                <span style="color: yellow;">Solid</span> is one of the three fundamental states of
                                matter along with liquid, gas.
                            </p>
                        </div>
                    </div>

                    <!-- Matter Solid -->
                    <div class="matter-content" id="matterSolid">
                        <div
                            class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header1">SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Image Column -->
                                <div class="column is-5" id="solidGif">
                                    <figure class="image solid-image">
                                        <img src="../../image/msolidgif.gif" alt="Solid">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-5">
                                    <p
                                        class="subtitle main-font is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white has-text-justified">
                                        Has particles that are packed closely together and usually arranged in regular
                                        pattern.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Characteristics -->
                    <div class="matter-content" id="matterChar">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title shas-text-white secondary-font" id="header2">CHARACTERISTICS OF SOLID</h1>
                            <p
                                class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mt-3">
                                Solid are known to have:</p>

                            <div class="image-container" id="sChar">
                                <!-- Solid Image -->
                                <div class="image-item" id="char1">
                                    <figure class="image mb-3">
                                        <img src="../../image/ssChar1.gif" alt="Solid">
                                    </figure>
                                    <p
                                        class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-white has-text-centered">
                                        Fixed shape</p>
                                </div>

                                <!-- Solid Image -->
                                <div class="image-item" id="char2">
                                    <figure class="image">
                                        <img src="../../image/ssChar2.gif" alt="Solid">
                                    </figure>
                                    <p
                                        class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-white has-text-centered">
                                        Fixed volume</p>
                                </div>

                                <!-- Solid Image -->
                                <div class="image-item" id="char3">
                                    <figure class="image mb-5">
                                        <img src="../../image/ssChar3.gif" alt="Solid">
                                    </figure>
                                    <p
                                        class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-white has-text-centered">
                                        High density</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Video -->
                    <div class="matter-content" id="matterVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">SOLID</h1>

                            <!-- Video for Solid.mp4 -->
                            <div class="box">
                                <video id="solidVideo" width="750" height="520" controls>
                                    <source src="../../videos/Solid.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p
                                    class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: It's AumSum Time Youtube
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Solid2 -->
                    <div class="matter-content" id="matterSolid2">
                        <div
                            class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header3">SOLID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="solid-text">
                                    <p
                                        class="subtitle main-font is-size-4-tablet is-size-2-desktop is-size-1-widescreen has-text-white has-text-justified tight-spacing">
                                        Has Definite shape and volume. When a solid is heated, its molecules gain energy
                                        and vibrate fast.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image solid-image2">
                                        <img src="../../image/msolid2.png" alt="Solid">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples -->
                    <div class="matter-content" id="matterExamples">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">
                                EXAMPLES OF SOLID
                            </h1>

                            <div class="sExample">
                                <!-- First Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/msolid3.png" alt="Solid" class="hover-info">
                                        <div class="info-text subtitle main-font">
                                            A book is a solid because it has a fixed shape, doesn't change when you hold
                                            it,
                                            and the particles inside are tightly packed together.
                                        </div>
                                    </figure>
                                    <p
                                        class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">
                                        Books</p>
                                </div>

                                <!-- Second Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/msolid4.png" alt="Solid" class="hover-info">
                                        <div class="info-text subtitle main-font">
                                            Erasers are solid because they keep their shape even when you use them to
                                            erase pencil marks.
                                        </div>
                                    </figure>
                                    <p
                                        class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">
                                        Eraser</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples 2 -->
                    <div class="matter-content" id="matterExamples2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">
                                EXAMPLES OF SOLID
                            </h1>

                            <div class="sExample">
                                <!-- Third Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/msolid5.png" alt="Solid" class="hover-info">
                                        <div class="info-text subtitle main-font">
                                            A shirt is a solid because it has a definite shape, occupies a fixed volume,
                                            and is made of tightly packed
                                            fibers that keep it from changing shape when you wear it or move it.
                                        </div>
                                    </figure>
                                    <p
                                        class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">
                                        Shirt</p>
                                </div>

                                <!-- Fourth Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/msolid6.png" alt="Solid" class="hover-info">
                                        <div class="info-text subtitle main-font">
                                            A bag is a solid because it has a shape that stays the same, takes up a
                                            certain amount of space,
                                            and is made of materials that don't easily change shape when you carry it.
                                        </div>
                                    </figure>
                                    <p
                                        class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">
                                        Bag</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Activity -->
                    <div class="matter-content" id="matterActivity">
                        <div class="modal">
                            <!-- Modal Background -->
                            <div class="modal-background"></div>

                            <!-- Modal Content -->
                            <div class="modal-content" id="activityContainer1">
                                <div class="box has-background-white-ter activity">
                                    
                                    <p class="title has-text-centered has-text-black actHeader">ACTIVITY</p>
                                    
                                    <p class="subtitle has-text-centered has-text-grey is-size-3 mb-5 actStatement">
                                        Which of these are examples of solids?
                                    </p>

                                    <div class="columns">
                                        <!-- Activity Boxes -->
                                        <div class="column is-two-thirds">
                                            <div class="columns is-multiline">
                                                <!-- Top Row: 3 Images -->
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct1">
                                                        <img src="../exerciseImage/dragSolid1.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct2">
                                                        <img src="../exerciseImage/dragSolid2.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct3">
                                                        <img src="../exerciseImage/dragSolid3.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <!-- Bottom Row: 2 Images -->
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct4">
                                                        <img src="../exerciseImage/dragGas1.png" alt="Image 1" />
                                                    </div>
                                                </div>
                                                <div class="column is-one-third">
                                                    <div class="box is-clickable has-background-grey-light imageAct" id="imageAct5">
                                                        <img src="../exerciseImage/dragLiquid1.png" alt="Image 1" />
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
                                                <img src="../exerciseImage/dragSolid4.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct7">
                                                <img src="../exerciseImage/dragSolid5.png" alt="Image 1" />
                                            </div>
                                        </div>
                                        
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct8">
                                                <img src="../exerciseImage/dragSolid6.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct9">
                                                <img src="../exerciseImage/dragSolid2.png" alt="Image 1" />
                                            </div>
                                        </div>

                                        <div class="column is-half">
                                            <p class="subtitle has-text-left has-text-grey is-size-3 mb-5 actStatement2">
                                                This solid is found in nature, doesn’t change shape, and is often used to build strong walls.
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
                                                <img src="../exerciseImage/dragSolid7.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct11">
                                                <img src="../exerciseImage/dragSolid8.png" alt="Image 1" />
                                            </div>
                                        </div>
                                        
                                        <div class="column is-half">
                                            <div class="box has-background-grey-light imageAct2" id="imageAct12">
                                                <img src="../exerciseImage/dragSolid9.png" alt="Image 1" />
                                            </div>
                                            <div class="box has-background-grey-light imageAct2" id="imageAct13">
                                                <img src="../exerciseImage/dragSolid10.png" alt="Image 1" />
                                            </div>
                                        </div>

                                        <div class="column is-half">
                                            <p class="subtitle has-text-left has-text-grey is-size-3 actStatement3">
                                                This solid is made of woven threads and can be soft or durable, used in clothes and furniture.
                                            </p>

                                            <p class="subtitle has-text-centered has-text-grey is-size-3 jLetters">
                                                <span style="color: blue;">Letters: </span>
                                            </p>

                                            <div class="box letterChoicesBox">
                                                <div class="columns is-multiline">
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter1">A</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter2">S</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter3">B</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter4">Z</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter5">R</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter6">L</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter7">C</div>
                                                    </div>
                                                    <div class="column is-one-fifth">
                                                        <div class="box is-clickable tileLetter" id="letter8">Q</div>
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

                    <!-- Matter LetsTry -->
                    <div class="matter-content" id="matterLetsTry">
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

                            <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6"
                                id="letsTryButton">
                                <button
                                    class="button main-font is-danger is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile has-text-white">
                                    Go Back
                                </button>
                                <button
                                    class="button main-font is-success is-size-5-widescreen is-size-6-desktop is-size-6-tablet is-size-7-mobile mx-2 has-text-white">
                                    Proceed to quiz
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Quiz -->
                    <div class="matter-content" id="matterQuiz">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6"
                            style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="header4">
                                QUIZ
                            </h1>
                            <!-- Quiz Container -->
                            <div class="box has-text-centered" id="quizContainer"
                                style="width: 100%; max-width: 90%; max-height: 80%; padding: 30px; z-index: 2;">
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
                                            <button
                                                class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button
                                                class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button
                                                class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                            <button
                                                class="button main-font is-fullwidth choice-btn is-size-6-widescreen is-size-7-tablet"></button>
                                        </div>

                                        <div class="box extra-info-box" id="extraInfoBox" style="display:none;">
                                            <h3 class="subtitle secondary-font is-3" id="extraInfoTitle">Additional
                                                Information</h3>
                                            <p id="extraInfoText" class="main-font"></p>
                                        </div>

                                        <!-- Next Button -->
                                        <button
                                            class="button is-success main-font is-size-6-widescreen is-size-7-tablet"
                                            id="nextButton" disabled>Next Question</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Quiz Result -->
                            <div class="box has-text-centered p-6" id="quizResult">
                                <h2 class="subtitle secondary-font is-1">Quiz Result</h2>
                                <p class="subtitle secondary-font is-2 Feedback">Good Job!</p>

                                <div class="columns is-centered is-vcentered mt-5">

                                    <div class="column is-3 has-text-centered">
                                        <div class="is-flex is-align-items-center is-justify-content-center">
                                            <p class="has-text-weight-bold"
                                                style="font-size: 6rem; color: #FFA500; margin-right: 4rem;"
                                                id="displayCorrectAnswers">0</p>
                                            <p style="font-size: 24px;">Out Of</p>
                                            <p class="has-text-weight-bold"
                                                style="font-size: 6rem; color: #007BFF; margin-left: 4rem;"
                                                id="displayTotalQuestions">0</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="columns is-centered mt-5">
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;" id="displayCorrectAnswers">Total
                                            Questions: <span class="has-text-weight-bold" id="totalQuestions">0</span>
                                        </p>
                                        <p style="font-size: 24px; margin-left: 60px;" id="displayCorrectAnswers">
                                            Percentage: <span class="has-text-weight-bold" id="percentage">0%</span></p>
                                    </div>
                                    <div class="column is-4 has-text-left">
                                        <p style="font-size: 24px; margin-left: 60px;"><span
                                                class="has-text-weight-bold has-text-success">Correct Answers:</span>
                                            <span class="has-text-weight-bold has-text-success"
                                                id="correctAnswers">0</span>
                                        </p>
                                        <p style="font-size: 24px; margin-left: 60px;"><span
                                                class="has-text-weight-bold has-text-danger">Wrong Answers:</span> <span
                                                class="has-text-weight-bold has-text-danger" id="wrongAnswers">0</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Matter Solid Completed -->
                    <div class="matter-content" id="matterCompleted">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
                            <div class="column is-full is-flex is-justify-content-flex-end mb-6" id="compButton">
                                <div class="columns is-half ml-6 p-2" id="mainbtn">
                                    <a href="../studentWelcome.php?show=Lessons">
                                        <button class="button back-button is-success is-size-6-desktop is-size-6-tablet"
                                            style="z-index: 5;">
                                            <p class="has-text-white">Back To Main Menu</p>
                                        </button>
                                    </a>
                                </div>
                                <div class="columns is-half ml-6 p-2" id="nxtbtn">
                                    <a href="matterLiquid.php">
                                        <button class="button back-button is-success is-size-6-desktop is-size-6-tablet"
                                            style="z-index: 5;">
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

                                <div
                                    class="column is-half is-one-fifths is-flex is-flex-direction-column align-bottom mt-5">
                                    <div class="has-text-centered">
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header5">
                                            YOU DID GREAT!
                                        </p>
                                        <p class="title main-font has-text-white has-text-weight-semibold" id="header5">
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
                    <div id="medalOverlay" class="overlay" style="display: none;">
                        <div id="medalPopup" class="popup">
                            <div class="popup-content">
                                <p>You Have Received a Medal</p>
                                <img src="../../image/medal1.png" alt="Medal" class="medal-img" />
                                <button id="closePopupButton">Close</button>
                            </div>
                        </div>
                    </div>



                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6"
                        id="examplesButton">
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop"
                            id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon mr-2"></i> <span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2"
                            id="rightButton" style="z-index: 2;">
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
<audio id="matterAudio" src="../../sounds/solid1.mp3"></audio>
<audio id="matterAudio2" src="../../sounds/solid2.mp3"></audio>
<audio id="matterAudio3" src="../../sounds/solid3.mp3"></audio>
<audio id="matterAudio4" src="../../sounds/solid4.mp3"></audio>
<audio id="matterAudio5" src="../../sounds/letsTry.mp3"></audio>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const matterPreAssessment = document.getElementById('matterPreAssessment');
        const matterStates = document.getElementById('matterStates');
        const matterSolid = document.getElementById('matterSolid');
        const matterChar = document.getElementById('matterChar');
        const matterVideo = document.getElementById('matterVideo');
        const matterSolid2 = document.getElementById('matterSolid2');
        const matterExamples = document.getElementById('matterExamples');
        const matterExamples2 = document.getElementById('matterExamples2');
        const matterActivity = document.getElementById('matterActivity');
        const matterLetsTry = document.getElementById('matterLetsTry');
        const matterQuiz = document.getElementById('matterQuiz');
        const matterCompleted = document.getElementById('matterCompleted');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        const audio = document.getElementById('matterAudio');
        const audio2 = document.getElementById('matterAudio2');
        const audio3 = document.getElementById('matterAudio3');
        const audio4 = document.getElementById('matterAudio4');
        const audio5 = document.getElementById('matterAudio5');
        const solidVideo = document.getElementById('solidVideo');

        const medalPopup = document.getElementById('medalPopup');
        const closePopupButton = document.getElementById('closePopupButton');

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

        let currentSection = 0;
        const sections = [matterPreAssessment, matterStates, matterSolid, matterChar, matterVideo, matterSolid2, matterExamples, matterExamples2, matterActivity, matterLetsTry, matterQuiz, matterCompleted];
        let sectionTimeSpent = new Array(sections.length).fill(0);
        let sectionTimerInterval;
        const studentId = <?php echo json_encode($id); ?>;
        console.log("Student ID from PHP:", studentId);

        function checkQuizTaken() {
            fetch('../check_quiz_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    student_id: studentId,
                    quiz_id: 1,
                    lesson: 'Solid'

                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Server response:', data);


                rightButton.onclick = (event) => {
                    if (data.status !== 'taken') {
                        alert('Quiz not taken yet. Please complete the quiz before proceeding.');

                        showSection(10); 

                        
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

        function checkSectionComplete() {
            // Check if the user is in the 'matterCompleted' section
            if (currentSection === sections.length - 1) {  // 'matterCompleted' is the last section
                // First, check if the quiz has been taken
                checkQuizTaken();  // Check quiz status

                // Only add the achievement if the quiz has been taken
                fetch('../check_quiz_status.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        student_id: studentId,
                        quiz_id: 1,
                        lesson: 'Solid'

                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'taken') {
                        // Send the achievement data to the PHP script to add the medal
                        const achievementData = {
                            student_id: studentId,
                            achievement_name: 'solidComplete',  // Achievement name
                            image_path: '../image/medal1.png'  // Path to the medal image
                        };

                        // Call the PHP script to add the achievement to the database
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
            }

            // Logic for showing the next section (if needed)
            rightButton.onclick = (event) => {
                if (currentSection < sections.length - 1) {
                    showSection(currentSection + 1);
                }
            };
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

        tiles.forEach(letter => {
            letter.addEventListener('click', function() {
                const letterValue = this.innerText; 

                if (input3.value.includes(letterValue)) {
                    input3.value = input3.value.replace(letterValue, "");

                    this.style.pointerEvents = 'auto'; 
                    this.style.backgroundColor = '';   
                } else {
                    input3.value += letterValue;  

                    this.style.pointerEvents = 'none';
                    this.style.backgroundColor = '#d3d3d3';  
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
            const wrongImages = [imageAct4, imageAct5];
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

            const allCorrectImagesPlaced = [imageAct1, imageAct2, imageAct3].every(image =>
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
            const correctAnswer = "rock";
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
                    noAnswerModal.querySelector('p').textContent = "Hint: 4 letters";
                    noAnswerModal.style.display = 'block';

                    setTimeout(() => {
                        noAnswerModal.style.display = 'none';
                    }, 2000);
                }, 3000); 
            }
        });

        submitAct3.addEventListener('click', function() {
            const answer = input3.value.trim();
            const correctAnswer = "FABRIC";
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
                    matterLetsTry.style.display = 'block'; 
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
                    noAnswerModal.querySelector('p').textContent = "Hint: 6 letters";
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
                sendTimeData(studentId, 'Matter', currentSection, 'Solid', sectionTimeSpent[currentSection]);
                clearInterval(sectionTimerInterval);
                sectionTimerInterval = null;
            }
        }

        function resetSectionTimer() {
            sectionTimeSpent[currentSection] = 0;
        }

        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('matter-content-active');
                section.classList.add('matter-content');
            });
        }

        function stopVideo() {
            solidVideo.pause();
            solidVideo.currentTime = 0;
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


        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('matter-content');
            sections[index].classList.add('matter-content-active');
            resetSectionTimer();
            currentSection = index;
            startSectionTimer();

            // Play or stop audio and video based on the current section
            if (sections[index] === matterStates) {
                playAudio();
            } else {
                stopAudio();
            }
            if (sections[index] === matterSolid) {
                playAudio2();
            } else {
                stopAudio2();
            }
            if (sections[index] === matterChar) {
                playAudio3();
            } else {
                stopAudio3();
            }
            if (sections[index] === matterSolid2) {
                playAudio4();
            } else {
                stopAudio4();
            }
            if (sections[index] === matterVideo) {
                solidVideo.play();
            } else {
                stopVideo();
            }
            if (sections[index] === matterLetsTry) {
                playAudio5();
            } else {
                stopAudio5();
            }
            if (sections[index] === matterQuiz) {
                checkQuizTaken();
            }
            if (sections[index] === matterCompleted) {
                checkSectionComplete();
            }

            if (index >= 0 && index <= 7) {
                examplesButton.style.display = 'flex';
                einsteinImage.style.display = 'block';
                letsTryButton.style.display = 'none';
                goBackButton.style.display = 'none';
                proceedToQuizButton.style.display = 'none';
                leftButton.style.display = 'flex';
                rightButton.style.display = 'flex';
                modal.style.display = 'none';
            } else if (sections[index] === matterActivity) {
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
            } else if (sections[index] === matterLetsTry) {
                examplesButton.style.display = 'none';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'flex';
                goBackButton.style.display = 'flex';
                proceedToQuizButton.style.display = 'flex';
                leftButton.style.display = 'none';
                rightButton.style.display = 'none';
            } else if (sections[index] === matterQuiz) {
                matterLetsTry.style.display = 'none';
                examplesButton.style.display = 'flex';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'none';
                goBackButton.style.display = 'none';
                proceedToQuizButton.style.display = 'none';
                leftButton.style.display = 'flex';
                rightButton.style.display = 'flex';
                examplesButton.style.marginLeft = '100%';
            } else if (sections[index] === matterCompleted) {
                examplesButton.style.display = 'none';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'none';
                goBackButton.style.display = 'none';
                proceedToQuizButton.style.display = 'none';
                leftButton.style.display = 'none';
                rightButton.style.display = 'none';
            }
        }

        document.getElementById("closePopupButton").addEventListener("click", function() {
            document.getElementById("medalOverlay").style.display = "none";
        });

        function showMedalPopup() {
            document.getElementById("medalOverlay").style.display = "flex";
        }



        rightButton.addEventListener('click', function () {
            if (currentSection === 7) {
                currentSection = 8;
                stopSectionTimer();
                showSection(currentSection);
                if (currentSection === 8) {
                    currentSection = 7;
                    stopSectionTimer();
                }
            } else if (currentSection < sections.length + 1) {
                stopSectionTimer();
                currentSection++;
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 7;
            showSection(currentSection);
            matterLetsTry.style.display = 'none';
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 10;
            showSection(currentSection);
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'matterLesson.php?show=matterTopic';
            } else if (currentSection > 0) {
                stopSectionTimer();
                currentSection--;

                // If the current section is Quiz section
                if (sections[currentSection] === matterLetsTry) {
                    matterLetsTry.style.display = 'block';
                    examplesButton.style.display = 'none';
                    einsteinImage.style.display = 'none';
                    letsTryButton.style.display = 'flex';
                    goBackButton.style.display = 'flex';
                    proceedToQuizButton.style.display = 'flex';
                    leftButton.style.display = 'none';
                    rightButton.style.display = 'none';
                }

                showSection(currentSection);
            } 
        });

        hideAllSections();
        showSection(0);

        // Quiz Data
        const quizData = <?php echo json_encode($postAssessmentData); ?>;

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

        choices.forEach(button => {
            button.addEventListener('click', function () {
                if (selectedAnswer) return;

                selectedAnswer = button.textContent;
                const correctAnswer = quizData[currentQuestionIndex].correct_answer;

                choices.forEach(btn => {
                    if (btn.textContent !== correctAnswer && btn.textContent !== selectedAnswer) {
                        btn.style.display = 'none';
                    } else {
                        btn.classList.add(btn.textContent === correctAnswer ? 'correct' : 'wrong');
                        btn.style.color = 'white';
                    }
                });

                extraInfoText.textContent = quizData[currentQuestionIndex].additional_info;
                extraInfoBox.style.display = 'block';
                nextButton.disabled = false;

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

            currentQuestionIndex++;

            if (currentQuestionIndex >= quizData.length) {
                showResults();
            } else {
                loadQuestion();
            }
        });

        function showResults() {
            const quizContainer = document.getElementById('quizContainer');
            quizContainer.style.display = 'none'; // Hide the quiz container

            const displayTotalQuestions = document.getElementById('displayTotalQuestions');
            const displayCorrectAnswers = document.getElementById('displayCorrectAnswers');
            const quizResult = document.getElementById('quizResult');
            const feedbackDisplay = document.querySelector('.Feedback'); // Select the Feedback element

            // Log to check for null values
            console.log(displayTotalQuestions, displayCorrectAnswers, quizResult);

            if (displayTotalQuestions && displayCorrectAnswers && quizResult && feedbackDisplay) {
                displayTotalQuestions.textContent = totalQuestions;
                displayCorrectAnswers.textContent = correctAnswersCount;
                quizResult.style.display = 'block';

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

                totalQuestionsDisplay.textContent = totalQuestions;
                correctAnswersDisplay.textContent = correctAnswersCount;
                wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
                percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
                sendScoreToServer(correctAnswersCount);
            } else {
                console.error("One or more elements not found in the DOM.");
            }
        }

// Pre-Assessment Data
const preAssessmentData = <?php echo json_encode($preAssessmentData); ?>;

let preCurrentQuestionIndex = 0;
let preCorrectAnswersCount = 0;
const preTotalQuestions = preAssessmentData.length;
let preSelectedAnswer = null;
const preChoices = document.querySelectorAll('.preAssessment-choice-btn');
const preNextButton = document.getElementById('preAssessmentNextButton');
const preExtraInfoBox = document.getElementById('preAssessmentExtraInfoBox');
const preQuestionNumber = document.getElementById('preAssessmentQuestionNumber');
const preQuestionText = document.getElementById('preAssessmentQuestionText');
const preAssessmentImage = document.getElementById('preAssessmentImage');
const preExtraInfoText = document.getElementById('preAssessmentExtraInfoText');
const preAssessmentResult = document.getElementById('preAssessmentResult');
const preTotalQuestionsDisplay = document.getElementById('preAssessmentTotal');
const preCorrectAnswersDisplay = document.getElementById('preAssessmentCorrectAnswers');
const preWrongAnswersDisplay = document.getElementById('preAssessmentWrongAnswers');
const prePercentageDisplay = document.getElementById('preAssessmentPercent');

// Function to load a Pre-Assessment question
function loadPreAssessmentQuestion() {
    const currentQuestion = preAssessmentData[preCurrentQuestionIndex];

    preQuestionNumber.textContent = `Question ${preCurrentQuestionIndex + 1}`;
    preQuestionText.textContent = currentQuestion.question;
    preAssessmentImage.src = currentQuestion.quiz_image;

    preChoices.forEach((button, index) => {
        button.textContent = currentQuestion.choices[index];
        button.classList.remove('correct', 'wrong');
        button.style.display = 'inline-block';
        button.style.color = 'black';
    });

    preExtraInfoBox.style.display = 'none';
    preNextButton.disabled = true;
    preSelectedAnswer = null;
}

preChoices.forEach(button => {
    button.addEventListener('click', function () {
        if (preSelectedAnswer) return;

        preSelectedAnswer = button.textContent;
        const correctAnswer = preAssessmentData[preCurrentQuestionIndex].correct_answer;

        preChoices.forEach(btn => {
            if (btn.textContent !== correctAnswer && btn.textContent !== preSelectedAnswer) {
                btn.style.display = 'none';
            } else {
                btn.classList.add(btn.textContent === correctAnswer ? 'correct' : 'wrong');
                btn.style.color = 'white';
            }
        });

        preExtraInfoText.textContent = preAssessmentData[preCurrentQuestionIndex].additional_info;
        preExtraInfoBox.style.display = 'block';
        preNextButton.disabled = false;

        if (preSelectedAnswer === correctAnswer) {
            preCorrectAnswersCount++;
            correctSound.play();
        } else {
            incorrectSound.play();
            incorrectSound.addEventListener('ended', () => {
                buzzer.play();
            });
        }
    });
});

// Function to handle next Pre-Assessment question
preNextButton.addEventListener('click', function () {
    if (!preSelectedAnswer) {
        alert('Please select an answer!');
        return;
    }

    preCurrentQuestionIndex++;

    if (preCurrentQuestionIndex >= preAssessmentData.length) {
        showPreAssessmentResults();
    } else {
        loadPreAssessmentQuestion();
    }
});

function showPreAssessmentResults() {
    const preAssessmentContainer = document.getElementById('preAssessmentContainer');
    preAssessmentContainer.style.display = 'none'; // Hide the Pre-Assessment container

    const displayPreTotalQuestions = document.getElementById('preAssessmentDisplayTotalQuestions');
    const displayPreCorrectAnswers = document.getElementById('preAssessmentDisplayCorrectAnswers');
    const preAssessmentResult = document.getElementById('preAssessmentResult');
    const preFeedbackDisplay = document.querySelector('.Feedback'); // Select the Feedback element

    console.log(displayPreTotalQuestions, displayPreCorrectAnswers, preAssessmentResult);
    if (displayPreTotalQuestions && displayPreCorrectAnswers && preAssessmentResult && preFeedbackDisplay) {
        displayPreTotalQuestions.textContent = preTotalQuestions;
        displayPreCorrectAnswers.textContent = preCorrectAnswersCount;
        preAssessmentResult.style.display = 'block';

        // Feedback based on correct answers
        if (preCorrectAnswersCount === 0) {
            preFeedbackDisplay.textContent = "You didn't score anything! Try again!";
        } else if (preCorrectAnswersCount > 0 && preCorrectAnswersCount < 5) {
            preFeedbackDisplay.textContent = "Nice Try!";
        } else if (preCorrectAnswersCount >= 5 && preCorrectAnswersCount < 10) {
            preFeedbackDisplay.textContent = "Good Job!";
        } else if (preCorrectAnswersCount === 10) {
            preFeedbackDisplay.textContent = "Perfect!";
        }

        preTotalQuestionsDisplay.textContent = preTotalQuestions;
        preCorrectAnswersDisplay.textContent = preCorrectAnswersCount;
        preAssessmentWrongAnswers.textContent = preTotalQuestions - preCorrectAnswersCount;
        prePercentageDisplay.textContent = ((preCorrectAnswersCount / preTotalQuestions) * 100).toFixed(2) + '%';
    } else {
        console.error("One or more elements not found in the DOM.");
    }
}


// Load the first Pre-Assessment question
loadPreAssessmentQuestion();

        // Function to send score to server
        function sendScoreToServer(score) {
            const quizId = 1;
            const lesson = "Solid";

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

        function sendTimeData(studentId, lessonName, sectionIndex, sectionName, timeSpent) {
            const data = {
                student_id: studentId,
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

        loadQuestion();

    });
</script>