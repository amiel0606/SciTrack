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

$sql = "SELECT question, choices, quiz_image, correct_answer, additional_info FROM quiz_questions_solid";
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

                    <!-- Matter LetsTry -->
                    <div class="matter-content" id="matterLetsTry">
                        <div
                            class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
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
                                <p class="subtitle secondary-font is-2">Good Job!</p>

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
                        <div
                            class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center mt-6 p-6">
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const einsteinImage = document.getElementById('einstein-image');
        const examplesButton = document.getElementById('examplesButton');
        const matterStates = document.getElementById('matterStates');
        const matterSolid = document.getElementById('matterSolid');
        const matterChar = document.getElementById('matterChar');
        const matterVideo = document.getElementById('matterVideo');
        const matterSolid2 = document.getElementById('matterSolid2');
        const matterExamples = document.getElementById('matterExamples');
        const matterExamples2 = document.getElementById('matterExamples2');
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
        const solidVideo = document.getElementById('solidVideo');

        const medalPopup = document.getElementById('medalPopup');
        const closePopupButton = document.getElementById('closePopupButton');


        let currentSection = 0;
        const sections = [matterStates, matterSolid, matterChar, matterVideo, matterSolid2, matterExamples, matterExamples2, matterLetsTry, matterQuiz, matterCompleted];
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
            lesson: 'Matter'
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Server response:', data);


        rightButton.onclick = (event) => {
            if (data.status !== 'taken') {
                alert('Quiz not taken yet. Please complete the quiz before proceeding.');

                showSection(8); 
                
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
                lesson: 'Matter'
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
                alert('Quiz not taken yet. Please complete the quiz before proceeding.');
                showSection(8); // Show a section to encourage quiz completion
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
            if (sections[index] === matterQuiz) {
        checkQuizTaken();
    }
    if (sections[index] === matterCompleted) {
        checkSectionComplete();
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
    
    // Log to check for null values
    console.log(displayTotalQuestions, displayCorrectAnswers, quizResult);

    if (displayTotalQuestions && displayCorrectAnswers && quizResult) {
        displayTotalQuestions.textContent = totalQuestions;
        displayCorrectAnswers.textContent = correctAnswersCount;
        quizResult.style.display = 'block';

        totalQuestionsDisplay.textContent = totalQuestions;
        correctAnswersDisplay.textContent = correctAnswersCount;
        wrongAnswersDisplay.textContent = totalQuestions - correctAnswersCount;
        percentageDisplay.textContent = ((correctAnswersCount / totalQuestions) * 100).toFixed(2) + '%';
        sendScoreToServer(correctAnswersCount);
    } else {
        console.error("One or more elements not found in the DOM.");
    }
}


        // Function to send score to server
        function sendScoreToServer(score) {
            const quizId = 1;
            const lesson = "Matter";

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