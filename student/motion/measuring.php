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
$sql = "SELECT question, choices, quiz_image, correct_answer, additional_info FROM quiz_questions_measure";
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

<link rel="stylesheet" href="../css/measuring.css">

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../../image/board.png" alt="Board Image" style="width: 140%; height: 105%; max-width: 1800px;; margin-left: -17%">
                    </figure>
                    
                    <!-- Motion Objective -->
                    <div class="x-content" id="objectives">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header1">LEARNING OBJECTIVES</h1>

                            <!-- Content Layout -->
                            <div class="is-centered">
                                <p class="subtitle description2 has-text-white main-font mb-6"> At the end of the lesson you will able to:</p>
                                <!-- Text Column -->
                                <div class="column is-full mt-4">
                                    <div class="subtitle description2 has-text-white">
                                        <p class="mb-5 main-font">Describe and use appropriate tools for measuring distance and time</p>
                                        <p class="mb-5 main-font">Identity the correct standard unit for measuring distance</p>
                                        <p class="mb-5 main-font">Explain the importance of using measuring tools or device</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Measuring1 -->
                    <div class="motion-content" id="motionMeasuring1">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">Measuring Distance and time</h1>

                            <div class="image-container mb-2" id="sChar">
                                <!-- Motion Image -->
                                <div class="image-item" id="bio1">
                                    <figure class="image">
                                        <img src="../../image/motion16.png" alt="Motion">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Protactor</p>
                                </div>

                                <!-- Motion Image -->
                                <div class="image-item" id="bio2">
                                    <figure class="image">
                                        <img src="../../image/motion17.png" alt="Motion">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Compass</p>
                                </div>

                                <!-- Motion Image -->
                                <div class="image-item" id="bio3">
                                    <figure class="image">
                                        <img src="../../image/motion18.png" alt="Motion">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Clock</p>
                                </div>
                            </div>

                            <p class="main-font title column is-one-fifths is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered mt-4">
                                <span style="color: yellow;">Measuring tools</span> and devices provide us with a basis of how we view our surroundings. 
                            </p>
                        </div>
                    </div>
                    
                    <!-- Motion Measuring2 -->
                    <div class="motion-content" id="motionMeasuring2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">Measuring Distance and time</h1>

                            <div class="image-container mb-2" id="sChar">
                                <!-- Motion Image -->
                                <div class="image-item" id="bio1">
                                    <figure class="image">
                                        <img src="../../image/motion19.png" alt="Motion">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Tape Measure</p>
                                </div>

                                <!-- Motion Image -->
                                <div class="image-item" id="bio2">
                                    <figure class="image">
                                        <img src="../../image/motion20.png" alt="Motion">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">Angle Bar</p>
                                </div>
                            </div>

                            <p class="main-font title column is-one-fifths is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered mt-4">
                                <span style="color: yellow;">Measuring tools</span> and devices provide us with a basis of how we view our surroundings. 
                            </p>
                        </div>
                    </div>
                    
                    <!-- Motion Ruler -->
                    <div class="motion-content" id="motionRuler">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Ruler
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        • Basic tool for measuring short length and distance. 
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        • It is  made of plastic, wood, or metal
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/motion8.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Tape -->
                    <div class="motion-content" id="motionTape">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Tape Measure
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        • A retractable tape measure is used for quantifying size of objects or distances between objects, it is usually made of thin metal sheet that can straighten up or fold.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/motion9.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Odo -->
                    <div class="motion-content" id="motionOdo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Odometer
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        • Vehicles have a built-in odometer, an electric device that measures the distance traveled by the vehicle.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/motion10.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Speedo -->
                    <div class="motion-content" id="motionSpeedo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Speedometer
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing2">
                                        • A speedometer measures how fast a vehicle travels.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/motion11.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Surveyor’s -->
                    <div class="motion-content" id="motionSurvey">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="headerSur">
                                        Surveyor’s wheel
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        •  An instrument that is used to measure short distances on the road or on land.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/motion12.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Caliper -->
                    <div class="motion-content" id="motionCaliper">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Caliper
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        • A device with two tips that are placed on both ends of the object being measured. 
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/motion13.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Motion Micrometer -->
                    <div class="motion-content" id="motionMicrometer">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mb-6 p-6">

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="eco-text">
                                    <p class="title main-font has-text-white" id="header5">
                                        Micrometer
                                    </p>
                                    <p class="title description1 main-font has-text-justified has-text-white tight-spacing">
                                        • It looks like a c-clamp. It is used to take very fine measurements such as the thickness of paper or a leaf. 
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image eco-image mt-6">
                                        <img src="../../image/motion14.gif" alt="Motion">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motion Video -->
                    <div class="motion-content" id="motionVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6" style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="header2">Measuring Distance</h1>

                            <!-- Video for -->
                            <div class="box">
                                <video id="solidVideo" width="750" height="520" controls>
                                    <source src="../../videos/Measuring.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: Peekaboo Kidz Youtube
                                </p>
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

                    <!-- Motion Quiz -->
                    <div class="motion-content" id="motionQuiz">
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
                                <p class="subtitle secondary-font is-2">Good Job!</p>
                                
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

                    <!-- Motion Completed -->
                    <div class="motion-content" id="motionCompleted">
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
<audio id="motionAudio" src="../../sounds/measure1.mp3"></audio>
<audio id="motionAudio2" src="../../sounds/measure2.mp3"></audio>
<audio id="motionAudio3" src="../../sounds/measure3.mp3"></audio>
<audio id="motionAudio4" src="../../sounds/measure4.mp3"></audio>
<audio id="motionAudio5" src="../../sounds/measure5.mp3"></audio>
<audio id="motionAudio6" src="../../sounds/measure6.mp3"></audio>
<audio id="motionAudio7" src="../../sounds/measure7.mp3"></audio>
<audio id="motionAudio8" src="../../sounds/measure8.mp3"></audio>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const objectives = document.getElementById('objectives');
        const motionMeasuring1 = document.getElementById('motionMeasuring1');
        const motionMeasuring2 = document.getElementById('motionMeasuring2');
        const motionRuler = document.getElementById('motionRuler');
        const motionTape = document.getElementById('motionTape');
        const motionOdo = document.getElementById('motionOdo');
        const motionSpeedo = document.getElementById('motionSpeedo');
        const motionSurvey = document.getElementById('motionSurvey');
        const motionCaliper = document.getElementById('motionCaliper');
        const motionMicrometer = document.getElementById('motionMicrometer');
        const letsTry = document.getElementById('letsTry');
        const motionVideo = document.getElementById('motionVideo');
        const motionQuiz = document.getElementById('motionQuiz');
        const motionCompleted = document.getElementById('motionCompleted');
        const letsTryButton = document.getElementById('letsTryButton');
        const proceedToQuizButton = letsTryButton.querySelector('.button.is-success');
        const goBackButton = letsTryButton.querySelector('.button.is-danger');
        const audio = document.getElementById('motionAudio');
        const audio2 = document.getElementById('motionAudio2');
        const audio3 = document.getElementById('motionAudio3');
        const audio4 = document.getElementById('motionAudio4');
        const audio5 = document.getElementById('motionAudio5');
        const audio6 = document.getElementById('motionAudio6');
        const audio7 = document.getElementById('motionAudio7');
        const audio8 = document.getElementById('motionAudio8');
        let currentSection = 0;
        const sections = [objectives, motionMeasuring1, motionMeasuring2, motionRuler, motionTape, motionOdo, motionSpeedo, motionSurvey, motionCaliper, motionMicrometer,  motionVideo, letsTry, motionQuiz, motionCompleted];
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
            quiz_id: 7,
            lesson: 'Motion'
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Server response:', data);
        if (data.status === 'taken') {
            rightButton.style.display = 'flex';
        } else {
            rightButton.style.display = 'none';
        }
    })
    .catch(error => {
        console.error('Error checking quiz status:', error);
    });
}
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
        sendTimeData(studentId, 'Motion', currentSection, 'Measuring', sectionTimeSpent[currentSection]);
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
                section.classList.remove('motion-content-active');
                section.classList.add('motion-content');
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
    function stopAudio8() {
        audio8.pause();
        audio8.currentTime = 0; 
    }

    function playAudio8() {
        audio8.play().catch(function (error) {
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
            sections[index].classList.remove('motion-content');
            sections[index].classList.add('motion-content-active');
            updateEinsteinImageAndButtons();
            resetSectionTimer()
            currentSection = index; 
            startSectionTimer();

            if (sections[index] === motionMeasuring1) {
            playAudio(); 
        } else {
            stopAudio();
        }
        if (sections[index] === motionRuler) {
            playAudio2(); 
        } else {
            stopAudio2();
        }
        if (sections[index] === motionTape) {
            playAudio3(); 
        } else {
            stopAudio3();
        }

        if (sections[index] === motionOdo) {
            playAudio4(); 
        } else {
            stopAudio4();
        }
        if (sections[index] === motionSpeedo) {
            playAudio5(); 
        } else {
            stopAudio5();
        }
        if (sections[index] === motionSurvey) {
            playAudio6(); 
        } else {
            stopAudio6();
        }
        if (sections[index] === motionCaliper) {
            playAudio7(); 
        } else {
            stopAudio7();
        }

        if (sections[index] === motionMicrometer) {
            playAudio8(); 
        } else {
            stopAudio8();
        }

        if (sections[index] === motionQuiz) {
            checkQuizTaken();
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
                window.location.href = 'motionLesson.php'; 
            } else if (currentSection > 0) {
                stopSectionTimer();
                currentSection--;
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 10; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 12; 
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

    document.getElementById('displayTotalQuestions').textContent = totalQuestions;
    document.getElementById('displayCorrectAnswers').textContent = correctAnswersCount;

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
    const quizId = 7; 
    const lesson = "Motion"; 

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