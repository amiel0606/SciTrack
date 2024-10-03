<?php
    include_once('./includes/board.php');
?>

<style>
    .matter-content {
        display: none;
    }
    .matter-content-active {
        display: block;
    }
    @keyframes rotate {
        0% { transform: translate(0, 0); }
        25% { transform: translate(30px, -10px); }
        50% { transform: translate(60px, 10px); }
        75% { transform: translate(-30px, 10px); }
        100% { transform: translate(0, 0); }
    }

    .rotate-image {
        animation: rotate 4s linear infinite;
        transform-style: preserve-3d;
    }
    #einstein-image {
        width: 100%;
        max-width: 25%;
        margin-right: -9%;
        margin-left: -8%;
        margin-bottom: -4%;
    }
    .c-image img, .einstein {
        width: 100%;
        height: auto;
        transform: scaleX(-1);
    }
    #leftButton, #rightButton {
        margin-bottom: -1%;
    }
    #letsTryButton {
        z-index: 10;
    }
    .button-text {
        font-size: 0.75em;
    }
    .matter-container {
        width: 100%;
        max-width: 80%; 
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        text-align: center;
    }
    #matterVideo video {
    z-index: 10; 
    position: relative; 
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
    #sChar img {
        width: 100%;
        max-width: 300px;
    }
    #sExample img {
        width: 100%;
        max-width: 1000px;
        margin-top: 2rem;
    }
    .solid-image {
        width: 100%;
        max-width: 70%;
        margin-left: 9rem;
    }
    .solid-image2 {
        width: 100%;
        max-width: 80%;
        margin-right: 9rem;
    }
    #solid-text {
        margin-left: 9rem;
    }
    #states {
        margin-bottom: -4%;
    }
    .placeholder {
        width: 100%;
        max-width: 90%;
        height: 100%;
        max-height: 70%;
        background-color: #D9D9D9;
    } 
    #letsTryButton {
        z-index: 10;
    }
    .iframe-container {
        position: relative;
        z-index: 2; 
        width: 80%; 
        margin: 0 auto;
    }

    .iframe-container iframe {
        width: 100%;
        margin-top: 250px; 
        border: none;
        z-index: 2;
    }

    .image-container {
        position: relative;
    }

    .image-container img {
        width: 100%;
        height: auto;
        z-index: 1;
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
    @font-face {
        font-family: 'Avenue';
        src: url('../../font/Avenue.otf') format('opentype');
    }
    @font-face {
        font-family: 'Haniley';
        src: url('../../font/Haniley.otf') format('opentype');
    }
    .main-font {
        font-family: 'Avenue';
    }
    .secondary-font{
        font-family: 'Haniley';
    }

    .button.is-text {
        transition: color 0.3s ease;
        background-color: rgba(255, 255, 255, 0.1);
        text-decoration: none;
    }

    .button.is-text:hover,
    .button.is-text.selected {
        background-color: #5eac92;
        color: white;
    }
    .modal {
        display: none;
        align-items: center;
        justify-content: center;
    }
    #leftButton, #rightButton {
        margin-bottom: -1%;
    }
    .modal.is-active {
        display: flex;
    }

    .modal-content {
        padding: 20px;
    }
    .quizzer{
        z-index: 10;
    }
</style>
<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../image/board.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-4">
                        <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mb-6">POP UP QUIZ!</h1>

                        <!-- Question -->
                        <div class="columns is-centered">
                        <p class="title quiz-question is-size-6-mobile is-size-4-tablet is-size-3-desktop is-size-2-widescreen has-text-centered has-text-white mb-6">
                            What is Abiotic?
                        </p>
                        </div>

                        <!-- Buttons Answer -->
                        <div class="columns quizzer is-centered is-multiline">
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">A. Factors that are non-living things</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">B. Factors that are living things</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">C. It is solid, liquid, and gas</p>
                                </button>
                            </div>
                            <div class="column is-half is-flex is-justify-content-center">
                                <button class="button is-text has-text-white is-size-3-dekstop is-size-5-tablet">
                                    <p class="is-size-4-desktop is-size-5-tablet">D. Germs</p>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                <!-- Left and Right Buttons -->
                <div class="is-overlay is-flex is-align-items-end is-justify-content-flex-end mb-5 p-6" id="examplesButton">
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop" id="leftButton" style="z-index: 2;">
                            <i class="fas fa-arrow-left button-icon mr-2"></i> <span class="button-text">Prev</span>
                        </button>
                        <button class="button is-success is-rounded is-size-5-widescreen is-size-6-desktop mx-2" id="rightButton" style="z-index: 2;">
                            <span class="button-text">Next</span> <i class="fas fa-arrow-right button-icon ml-2"></i>
                        </button>

        </div>
    </div>
</section>

<!-- Correct Answer Modal -->
<div id="correctModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <figure class="image">
            <img src="../../image/correct.gif" alt="Correct Answer">
        </figure>
    </div>
</div>

<!-- Incorrect Answer Modal -->
<div id="incorrectModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <figure class="image">
            <img src="../../image/incorrect.gif" alt="Incorrect Answer">
        </figure>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        const questionTitle = document.querySelector('.quiz-question');
        const answerButtons = document.querySelectorAll('.button.is-text');

        // Questions Array
const quizData = [
    // Questions about Biotic and Abiotic Factors
    {
        question: "What are biotic factors in an ecosystem?",
        answers: [
            "A. Non-living components like air and water",
            "B. Living components like plants and animals",
            "C. Climate and temperature conditions",
            "D. Soil and minerals"
        ],
        correctAnswer: 1 // index of the correct answer
    },
    {
        question: "Which of the following is an example of an abiotic factor?",
        answers: [
            "A. Bacteria",
            "B. Fungi",
            "C. Sunlight",
            "D. Fish"
        ],
        correctAnswer: 2
    },
    {
        question: "Which of these is a biotic interaction?",
        answers: [
            "A. Water evaporation",
            "B. Photosynthesis",
            "C. Soil erosion",
            "D. Temperature changes"
        ],
        correctAnswer: 1
    },
    {
        question: "Which of the following statements is true about abiotic factors?",
        answers: [
            "A. They can be affected by living organisms",
            "B. They do not influence the living organisms in an ecosystem",
            "C. They are only found in terrestrial ecosystems",
            "D. They include all living things"
        ],
        correctAnswer: 0
    },
    {
        question: "In an ecosystem, which of the following would be classified as a biotic factor?",
        answers: [
            "A. Rocks",
            "B. Water",
            "C. Trees",
            "D. Temperature"
        ],
        correctAnswer: 2
    },

    // Questions about Estuaries
    {
        question: "What is an estuary?",
        answers: [
            "A. A freshwater lake",
            "B. A coastal area where freshwater meets saltwater",
            "C. A type of forest ecosystem",
            "D. A mountain range"
        ],
        correctAnswer: 1
    },
    {
        question: "Why are estuaries considered highly productive ecosystems?",
        answers: [
            "A. They have low nutrient levels",
            "B. They receive nutrients from both land and sea",
            "C. They have no sunlight",
            "D. They are located far from the coast"
        ],
        correctAnswer: 1
    },
    {
        question: "Which of the following is a common characteristic of estuaries?",
        answers: [
            "A. High salinity levels",
            "B. Variety of plant and animal species",
            "C. Lack of water movement",
            "D. Abundant dry land"
        ],
        correctAnswer: 1
    },
    {
        question: "Estuaries serve as important habitats for which type of species?",
        answers: [
            "A. Only terrestrial animals",
            "B. Only aquatic plants",
            "C. Migratory birds and juvenile fish",
            "D. Only bacteria"
        ],
        correctAnswer: 2
    },
    {
        question: "What role do estuaries play in protecting coastal areas?",
        answers: [
            "A. They increase salinity levels",
            "B. They provide habitats for marine mammals",
            "C. They filter pollutants and reduce erosion",
            "D. They prevent flooding"
        ],
        correctAnswer: 2
    }
];


        let currentQuestionIndex = 0;

        // Update Question
        function updateQuestion() {
            const currentData = quizData[currentQuestionIndex];
            questionTitle.innerHTML = currentData.question;
            answerButtons.forEach((button, index) => {
                button.querySelector('p').innerText = currentData.answers[index];
                button.onclick = () => checkAnswer(index);
            });
        }

        // Check Answer
        function checkAnswer(selectedIndex) {
            const currentData = quizData[currentQuestionIndex];
            if (selectedIndex === currentData.correctAnswer) {
                if (currentQuestionIndex === quizData.length - 1) {                
                    window.location.href = 'matterLesson.php'; // Change to the appropriate href
                } else {
                    showCorrectModal();
                    currentQuestionIndex++;
                    updateQuestion();
                }
            } else {
                showIncorrectModal();
            }
        }

        // Navigation buttons
        rightButton.addEventListener('click', function () {
            if (currentQuestionIndex < quizData.length - 1) {
                currentQuestionIndex++;
                updateQuestion();
            } else {
                window.location.href = 'matterSolid.php';
            }
        });

        leftButton.addEventListener('click', function () {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                updateQuestion();
            } else {
                window.location.href = 'matterLesson.php'; 
            }
        });

        function showCorrectModal() {
            const correctModal = document.getElementById('correctModal');
            correctModal.classList.add('is-active');
            setTimeout(() => correctModal.classList.remove('is-active'), 2000); // Hide after 2 seconds
        }

        function showIncorrectModal() {
            const incorrectModal = document.getElementById('incorrectModal');
            incorrectModal.classList.add('is-active');
            setTimeout(() => incorrectModal.classList.remove('is-active'), 2000); // Hide after 2 seconds
        }

        updateQuestion();
    });
</script>
