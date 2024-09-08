d<?php
    include_once('./includes/board.php');
?>

<style>
    .button.is-text {
        transition: color 0.3s ease;
        text-decoration: none;
    }

    .button.is-text:hover {
        background-color: #32a774;
        color: white;
    }

    .quiz-content {
        display: none;
    }

    .quiz-content.active {
        display: block;
    }
    #quizButton{
        margin-bottom: -50%;
    }
</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-full">
                    <figure class="image is-16by9">
                        <img src="../../../image/board.png" alt="Board Image">
                    </figure>

                    <div class="is-overlay is-flex is-flex-direction-column is-align-items-center is-justify-content-center p-6">
                        <!-- Quiz 1 -->
                        <div class="quiz-content" id="quiz1">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-4">
                                <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mt-6 mb-6">QUIZ</h1>

                                <div class="columns is-centered">
                                    <!-- Question -->
                                    <p class="subtitle is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-white mt-2 mb-6">
                                        1. Which of the following is not an example of a solid?
                                    </p>
                                </div>

                                <!-- Buttons Answer -->
                                <div class="columns is-centered is-multiline">
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">A. Milk</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">B. Chair</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">C. Table</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">D. Brick</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quiz 2 -->
                        <div class="quiz-content" id="quiz2">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-4">
                                <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mt-6 mb-6">QUIZ</h1>

                                <div class="columns is-centered">
                                    <!-- Question -->
                                    <p class="subtitle is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-white mt-2 mb-6">
                                        2. Something that takes up space and has mass is called:
                                    </p>
                                </div>

                                <!-- Buttons Answer -->
                                <div class="columns is-centered is-multiline">
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">A. Volume</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">B. Matter</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">C. Mass</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">D. Density</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quiz 3 -->
                        <div class="quiz-content" id="quiz3">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-4">
                                <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mt-6 mb-6">QUIZ</h1>

                                <div class="columns is-centered">
                                    <!-- Question -->
                                    <p class="subtitle is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-white mt-2 mb-6">
                                        3. Which state of matter has definite shape and definite volume
                                    </p>
                                </div>

                                <!-- Buttons Answer -->
                                <div class="columns is-centered is-multiline">
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">A. Solid</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">B. Liquid</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">C. Gas</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">D. Plasma</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quiz 4 -->
                        <div class="quiz-content" id="quiz4">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-4">
                                <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mt-6 mb-6">QUIZ</h1>

                                <div class="columns is-centered">
                                    <!-- Question -->
                                    <p class="subtitle is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-white mt-2 mb-6">
                                        4. What happens to the particles in a solid when it is heated?
                                    </p>
                                </div>

                                <!-- Buttons Answer -->
                                <div class="columns is-centered is-multiline">
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">A. They move closer together</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">B. They move farther apart</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">C. They stay in <br>the same position</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">D. They disappear</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quiz 5 -->
                        <div class="quiz-content" id="quiz5">
                            <div class="is-overlay is-flex is-flex-direction-column is-align-items-center mt-6 p-4">
                                <h1 class="title is-size-3-mobile is-size-1-tablet has-text-white mt-6 mb-6">QUIZ</h1>

                                <div class="columns is-centered">
                                    <!-- Question -->
                                    <p class="subtitle is-size-6-mobile is-size-5-tablet is-size-4-desktop is-size-2-widescreen has-text-centered has-text-white mt-2 mb-6">
                                        5. What happens to the particles in a solid when it is heated?
                                    </p>
                                </div>

                                <!-- Buttons Answer -->
                                <div class="columns is-centered is-multiline">
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">A. They move closer together</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">B. They move farther apart</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">C. They stay in <br>the same position</p>
                                        </button>
                                    </div>
                                    <div class="column is-half is-flex is-justify-content-center">
                                        <button class="button is-text has-text-white is-size-3-desktop is-size-5-tablet">
                                            <p class="is-size-4-desktop is-size-5-tablet">D. They disappear</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and Right Buttons-->
                        <div class="column is-full is-flex is-justify-content-flex-end" id="quizButton">
                            <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet mr-4" id="leftButton">
                                <i class="fas fa-arrow-left button-icon"></i>
                            </button>
                            <button class="button is-success is-rounded is-size-4-desktop is-size-5-tablet" id="rightButton">
                                <i class="fas fa-arrow-right button-icon"></i>
                            </button>
                        </div>
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
        const quizzes = {
            1: document.getElementById('quiz1'),
            2: document.getElementById('quiz2'),
            3: document.getElementById('quiz3'),
            4: document.getElementById('quiz4'),
            5: document.getElementById('quiz5')
        };

        let currentQuiz = 1;

        function updateQuiz() {
            for (let key in quizzes) {
                quizzes[key].classList.toggle('active', key == currentQuiz);
            }
        }

        updateQuiz();

        leftButton.addEventListener('click', function () {
            if (currentQuiz === 1) {
                window.location.href = 'estuarisLetsTry.php'; 
            } else {
                currentQuiz--;
                updateQuiz();
            }
        });

        rightButton.addEventListener('click', function () {
            if (currentQuiz === 5) {
                window.location.href = 'estuarisResult.php'; 
            } else {
                currentQuiz++;
                updateQuiz();
            }
        });
    });
</script>
