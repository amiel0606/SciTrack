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
$sql = "SELECT question, choices, quiz_image, correct_answer, additional_info FROM quiz_questions_liquid";
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

<link rel="stylesheet" href="../css/liquid.css">

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-5by3">
                        <img src="../../image/board.png" alt="Board Image" style="width: 140%; height: 105%; max-width: 1800px;; margin-left: -17%">
                    </figure>

                    <!-- Matter States -->
                    <div class="x-content" id="matterStates">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mb-6 p-6">
                            <h1 class="title has-text-white mt-5 secondary-font" id="header">LIQUID</h1>

                            <!-- Liquid Image -->
                            <div class="stateImage">
                                <figure class="image">
                                    <img src="../../image/mliquidgif.gif" alt="Liquid">
                                </figure>
                            </div>

                            <p class="main-font column is-three-fifths title is-size-5-tablet is-size-3-desktop is-size-2-widescreen has-text-centered has-text-white mb-6" id="states">
                                <span style="color: yellow;">Liquid</span> is one of the three principle states of matter.
                            </p>
                        </div>
                    </div>

                    <!-- Matter Liquid -->
                    <div class="matter-content" id="matterLiquid">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="titlehas-text-white secondary-font" id="header1">LIQUID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Image Column -->
                                <div class="column is-5" id="solidGif">
                                    <figure class="image solid-image">
                                        <img src="../../image/mliquidgif3.gif" alt="Liquid">
                                    </figure>
                                </div>

                                <!-- Text Column -->
                                <div class="column is-5">
                                    <p class="subtitle main-font is-size-3-tablet is-size-2-desktop is-size-1-widescreen has-text-white has-text-justified p-spacing">
                                        Has particles that are less tightly packed as compared to solids.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Characteristics -->
                    <div class="matter-content" id="matterChar">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">CHARACTERISTICS OF LIQUID</h1>
                            <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered mt-3">Liquid are known to have:</p>

                            <div class="image-container" id="sChar">
                                <!-- Liquid Image -->
                                <div class="image-item" id="char1">
                                    <figure class="image">
                                        <img src="../../image/lChar1.gif" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">
                                        Fixed volume but no fixed shape.
                                    </p>
                                </div>

                                <!-- Liquid Image -->
                                <div class="image-item" id="char2">
                                    <figure class="image">
                                        <img src="../../image/lChar2.gif" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">
                                        Lesser dense than solids.
                                    </p>
                                </div>

                                <!-- Liquid Image -->
                                <div class="image-item" id="char3">
                                    <figure class="image">
                                        <img src="../../image/lChar3.gif" alt="Liquid">
                                    </figure>
                                    <p class="main-font subtitle is-size-5-tablet is-size-4-desktop is-size-3-widescreen has-text-white has-text-centered">
                                        Liquids can be compressed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Video -->
                    <div class="matter-content" id="matterVideo">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">LIQUID</h1>

                            <!-- Video for Solid.mp4 -->
                            <div class="box">
                                <video id="liquidVideo" width="750" height="420" controls>
                                    <source src="../../videos/Liquid.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="subtitle main-font column is-full is-size-6-tablet is-size-5-desktop is-size-4-widescreen has-text-centered has-text-dark">
                                    Credits to: It's AumSum Time Youtube
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Liquid2 -->
                    <div class="matter-content" id="matterLiquid2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                            <h1 class="title has-text-white secondary-font" id="header3">LIQUID</h1>

                            <!-- Content Layout -->
                            <div class="columns is-vcentered is-mobile is-multiline">
                                <!-- Text Column -->
                                <div class="column is-5" id="solid-text">
                                    <p class="subtitle main-font is-size-4-tablet is-size-2-desktop is-size-1-widescreen has-text-justified has-text-white">
                                        When a liquid is heated, the particles move rapidly.
                                    </p>
                                </div>

                                <!-- Image Column -->
                                <div class="column is-5">
                                    <figure class="image solid-image2">
                                        <img src="../../image/mliquidgif2.gif" alt="Liquid">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples -->
                    <div class="matter-content" id="matterExamples">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">
                                EXAMPLES OF LIQUID
                            </h1>

                            <div class="sExample">
                                <!-- First Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/mliquid4.png" alt="Liquid" class="hover-info">
                                        <div class="info-text subtitle main-font">
                                            Shampoo is liquid so it can easily spread through your hair and wash away dirt and oil without leaving any clumps.
                                        </div>
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Shampoo</p>
                                </div>

                                <!-- Second Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/mliquid5.png" alt="Liquid" class="hover-info">
                                        <div class="info-text subtitle main-font">
                                            Orange juice is liquid because it comes from squeezing oranges, which release their watery juice, making it easy to drink.
                                        </div>
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Orange Juice</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matter Examples 2 -->
                    <div class="matter-content" id="matterExamples2">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-5 p-6">
                            <h1 class="title has-text-white secondary-font" id="header2">
                                EXAMPLES OF LIQUID
                            </h1>

                            <div class="sExample">
                                <!-- Third Image -->
                                <div class="image-item">
                                    <figure class="image mb-4">
                                        <img src="../../image/mliquid6.png" alt="Liquid" class="hover-info">
                                        <div class="info-text subtitle main-font">
                                            Hand sanitizer is liquid so it can quickly spread on your hands and kill germs effectively.
                                        </div>
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Hand Sanitizer</p>
                                </div>

                                <!-- Fourth Image -->
                                <div class="image-item">
                                    <figure class="image" id="soy">
                                        <img src="../../image/mliquid7.png" alt="Liquid" class="hover-info">
                                        <div class="info-text subtitle main-font">
                                            Soy sauce is liquid because it is made by fermenting soybeans and wheat, 
                                            which creates a smooth, salty sauce that can easily pour over food.
                                        </div>
                                    </figure>
                                    <p class="main-font subtitle is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-white has-text-centered">Soy Sauce</p>
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

                    <!-- Matter Quiz -->
                    <div class="matter-content" id="matterQuiz">
                        <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6" style="z-index: 1;">
                            <h1 class="title has-text-white secondary-font" id="header4">
                                QUIZ
                            </h1>
                            <!-- Quiz Container -->
                            <div class="box has-text-centered" id="quizContainer" style="width: 100%; max-width: 90%; max-height: 80%; padding: 30px; z-index: 2;">
                                <div class="columns">
                                    <!-- Left Column for Image -->
                                    <div class="column is-one-third has-text-centered placeholderImage">
                                        <img src="../../image/def.png" alt="Quiz Image" id="quizImage">
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

                    <!-- Matter Liquid Completed -->
                    <div class="matter-content" id="matterCompleted">
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
                                    <a href="matterGas.php">
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


                    <!-- Left and Right Buttons -->
                    <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end p-6" id="examplesButton">
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon mr-2"></i> <span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2" id="rightButton" style="z-index: 2;">
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
<audio id="matterAudio" src="../../sounds/liquid1.mp3"></audio>
<audio id="matterAudio2" src="../../sounds/liquid2.mp3"></audio>
<audio id="matterAudio3" src="../../sounds/liquid3.mp3"></audio>
<audio id="matterAudio4" src="../../sounds/liquid4.mp3"></audio>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const matterStates = document.getElementById('matterStates');
        const matterLiquid = document.getElementById('matterLiquid');
        const matterChar = document.getElementById('matterChar');
        const matterVideo = document.getElementById('matterVideo');
        const matterLiquid2 = document.getElementById('matterLiquid2');
        const matterExamples = document.getElementById('matterExamples');
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
        const liquidVideo = document.getElementById('liquidVideo');
        let currentSection = 0;
        const sections = [matterStates, matterLiquid, matterChar, matterVideo, matterLiquid2, matterExamples, matterExamples2, matterLetsTry, matterQuiz, matterCompleted];
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
            quiz_id: 2,
            lesson: 'Matter'
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
        sendTimeData(studentId, 'Matter', currentSection, 'Liquid', sectionTimeSpent[currentSection]);
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

    // Send the data to the server using fetch (AJAX)
    fetch('../record_time.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.text())  // Use .text() to log the raw response
    .then(responseText => {
        console.log('Raw response from server:', responseText);  // Log the raw response to the console
        try {
            const responseData = JSON.parse(responseText);  // Try to parse the response as JSON
            console.log("Time data saved successfully", responseData);
        } catch (error) {
            console.error("Error parsing JSON response", error);  // Handle JSON parsing error
        }
    })
    .catch((error) => {
        console.error("Error saving time data", error);
    });
}
        function hideAllSections() {
            sections.forEach(section => {
                section.classList.remove('matter-content-active');
                section.classList.add('matter-content');
            });
        }

        function stopVideo() {
        liquidVideo.pause(); 
        liquidVideo.currentTime = 0; 
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

        function showSection(index) {
            hideAllSections();
            sections[index].classList.remove('matter-content');
            sections[index].classList.add('matter-content-active');
            resetSectionTimer()
            currentSection = index; 
            startSectionTimer();
            
            if (sections[index] === matterStates) {
        playAudio(); 
    } else {
        stopAudio();
    }
    if (sections[index] === matterLiquid) {
        playAudio2(); 
    } else {
        stopAudio2();
    }
    if (sections[index] === matterChar) {
        playAudio3(); 
    } else {
        stopAudio3();
    }

    if (sections[index] === matterLiquid2) {
        playAudio4(); 
    } else {
        stopAudio4();
    }
    if (sections[index] === matterVideo) {
            liquidVideo.play();
        } else {
            stopVideo(); 
        }


            if (index >= 0 && index <= 6) { 
                examplesButton.style.display = 'flex';
                einsteinImage.style.display = 'block';
                letsTryButton.style.display = 'none';
                goBackButton.style.display = 'none';
                proceedToQuizButton.style.display = 'none';
                leftButton.style.display = 'flex';
                rightButton.style.display = 'flex';
            } else if (sections[index] === matterLetsTry) {
                examplesButton.style.display = 'none';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'flex';
                goBackButton.style.display = 'flex';
                proceedToQuizButton.style.display = 'flex';
                leftButton.style.display = 'none';
                rightButton.style.display = 'none';
            } else if (sections[index] === matterQuiz) {
                examplesButton.style.display = 'flex';
                einsteinImage.style.display = 'none';
                letsTryButton.style.display = 'none';
                goBackButton.style.display = 'none';
                proceedToQuizButton.style.display = 'none';
                leftButton.style.display = 'flex';
                checkQuizTaken();

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

        rightButton.addEventListener('click', function () {
            if (currentSection === 6) {
                currentSection = 7;
                stopSectionTimer();
                showSection(currentSection);
                if (currentSection === 7) {
                    currentSection = 6;
                    stopSectionTimer();
                }
            } else if (currentSection < sections.length + 1) {
                stopSectionTimer();
                currentSection++;
                showSection(currentSection);
            }
        });

        goBackButton.addEventListener('click', function () {
            currentSection = 6; 
            showSection(currentSection);
        });

        proceedToQuizButton.addEventListener('click', function () {
            currentSection = 8; 
            showSection(currentSection);
        });

        leftButton.addEventListener('click', function () {
            if (currentSection === 0) {
                window.location.href = 'matterLesson.php?show=matterTopic'; 
            } else if (currentSection > 0) {
                stopSectionTimer();
                currentSection--;
                showSection(currentSection);
            }
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
                checkQuizTaken();
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
    const quizId = 2; // Quiz ID for "Matter"
    const lesson = "Matter"; // Set lesson name as "Matter"

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

