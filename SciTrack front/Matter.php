<?php
    include_once('./includes/studentstyle.php');
?>

    <!-- Matter -->
    <div class="matter-cont" style="display: block;">
        <h1>WHAT IS MATTER?</h1>
        <p>Matter is anything that has mass and occupies space is called matter. A matter is made up of tiny particles called atoms. There are three states of matter. Solid, liquid, and gas.
        </p>
    </div>
        
    <div class="s-btn1">
        <a href="#">
            <img src="./image/left1.png" alt="left">
        </a>
        <a href="#">
            <img src="./image/right.png" alt="right">
        </a>
    </div>

    <!-- Topic -->
    <div class="topic">
        <h2>CHOOSE TOPIC</h2>
        <div class="topic-choices">
            <a href="#">
                <img src="./image/solid.png" alt="solid">
                <h3>SOLID</h3>
            </a>
            <a href="#">
                <img src="./image/liquid.png" alt="liquid">
                <h3>LIQUID</h3>
            </a>
            <a href="#">
                <img src="./image/gas.png" alt="gas">
                <h3>GAS</h3>
            </a>
        </div>
    </div>
    <div class="s-btn" id="s-left" style="display: none;">
        <a href="#">
            <img src="./image/left1.png" alt="left">
        </a>
    </div>

    <div id="matterTopic" style="display: none;">
        <!-- Solid -->
        <div id="solid">
            <div id="solidExamples">
                <h1>SOLID</h1>
                <img src="./image/solid.png" alt="s1">
                <img src="./image/solid2.png" alt="s2">
                <img src="./image/solid3.png" alt="s3">
                <img src="./image/solid4.png" alt="s4">
                <img src="./image/solid5.png" alt="s5">
            </div>

            <div id="solidDef">
                <h1>SOLID</h1>
                <p>Solid is one of the three fundamental states of matter along with liquid, gas. 
                    The molecules in a solid are closely packed together and contain the least amount of kinetic energy. 
                    A solid is characterized by structural rigidity and resistance to a force applied to the surface
                </p>
                <div class="slg">
                    <img src="./image/solid2.png" alt="s2">
                    <img src="./image/solid3.png" alt="s3">
                    <img src="./image/solid4.png" alt="s4">
                </div>
            </div>

            <div class="slg-learn" id="solidLearn">
                <h1>Learn More About SOLID</h1>
                <img src="./image/sLearn.png" alt="">
                <p>
                Solids are generally held together by ionic or strong covalent bonding, 
                and the attractive forces between the atoms, ions, or molecules in solids 
                are very strong. In fact, these forces are so strong that particles in a 
                solid are held in fixed positions and have very little freedom of movement. 
                </p>
            </div>

            <div class="slg-char" id="solidChar1">
                <h2>CHARACTERISTICS OF SOLID</h2>
                <img src="./image/sChar1.png" alt="">
                <ul>
                    <li>Solids are known to have fixed shapes.</li>
                    <li>Solids are known to have a fixed volume.</li>
                    <li>Solids are known to have high density.</li>
                </ul>
            </div>

            <div class="slg-char" id="solidChar2">
                <h2>CHARACTERISTICS OF SOLID</h2>
                <img src="./image/sChar2.png" alt="">
                <ul>
                    <li>Intermolecular forces in solids are stronger.</li>
                    <li>There is negligible space between the particles of solids.</li>
                </ul>
            </div>

            <div class="slg-happen" id="solidHappen">
                <h1>What Happens To Solid Particles When Heated</h1>
                <img src="./image/sHappen.png" alt="">
                <p>
                When a solid is heated, its molecules gain energy and vibrate faster. 
                A stage comes when they overcome the intermolecular force of attraction and 
                start moving from each other. This results in the melting of solid.
                </p>
            </div>

            <div class="slg-letsTry" id="solidLetsTry">
                <div class="s-board" id="slg-s-board">
                    <img class="board" id="slg-board" src="./image/board.png" alt="" >
                </div>
                <div class="slg-cont" id="sCont">
                    <img class="slg-einstein" src="./image/einstein2.png" alt="">
                    <img class="slg-lets" src="./image/letstry.png" alt="">
                </div>
                <div class="slgButtons">
                    <button class="go-back">Go Back</button>
                    <button class="proceed-quiz">Proceed to quiz</button>
                </div>
            </div>

            <div class="slg-quiz" id="solidQuiz1">
                <h1>Quiz</h1>
                <div class="quiz" id="solidQA1">
                    <h3>1. Which of the following is not an example of a solid?</h3>
                    <div class="quiz-options">
                        <button class="quiz-option">A. Milk</button>
                        <button class="quiz-option">B. Chair</button>
                        <button class="quiz-option">C. Table</button>
                        <button class="quiz-option">D. Brick</button>
                    </div>
                </div>
            </div>

            <div class="slg-quiz" id="solidQuiz2">
                <h1>Quiz</h1>
                <div class="quiz" id="solidQA2">
                    <h3>2. Something that takes up space and has mass is called:</h3>
                    <div class="quiz-options">
                        <button class="quiz-option">A. Volume</button>
                        <button class="quiz-option">B. Matter</button>
                        <button class="quiz-option">C. Mass</button>
                        <button class="quiz-option">D. Density</button>
                    </div>
                </div>
            </div>
            
            <div class="slg-quiz" id="solidQuiz3">
                <h1>Quiz</h1>
                <div class="quiz" id="solidQA3">
                    <h3>3. Which state of matter has definite shape  and definite volume</h3>
                    <div class="quiz-options">
                        <button class="quiz-option">A. Solid</button>
                        <button class="quiz-option">B. Liquid</button>
                        <button class="quiz-option">C. Gas</button>
                        <button class="quiz-option">D. Plasma</button>
                    </div>
                </div>
            </div>

            <div class="slg-quiz" id="solidQuiz4">
                <h1>Quiz</h1>
                <div class="quiz" id="solidQA4">
                    <h3>4. What happens to the particles in a solid when it is heated?</h3>
                    <div class="quiz-options">
                        <button class="quiz-option">A. They move closer together</button>
                        <button class="quiz-option">B. They move farther apart</button>
                        <button class="quiz-option">C. They stay in the same position</button>
                        <button class="quiz-option">D. They disappear</button>
                    </div>
                </div>
            </div>

            <div class="slg-quiz" id="solidQuiz5">
                <h1>Quiz</h1>
                <div class="quiz" id="solidQA5">
                    <h3>5. What happens to the particles in a solid when it is heated?</h3>
                    <div class="quiz-options">
                        <button class="quiz-option">A. They move closer together</button>
                        <button class="quiz-option">B. They move farther apart</button>
                        <button class="quiz-option">C. They stay in the same position</button>
                        <button class="quiz-option">D. They disappear</button>
                    </div>
                </div>
            </div>

            <div class="slg-quizResult" id="solidQuizResult">
                <div class="result-cont">
                    <div class="result" id="solidCont">
                        <a href="#">
                            <img class="result-close" src="./image/close.png" alt="">
                        </a>
                        <h1>GOOD JOB!</h1>
                        <h2>You Got</h2>
                        <h2>10/10</h2>
                        <img class="resultStar" src="./image/result.png" alt="">
                        <button class="review-quiz">Review Quiz</button>
                        <img class="result-einstein" src="./image/einstein.png" alt="">
                    </div>
                </div>
            </div>

            <div class="slg-quizCompleted" id="solidQuizCompleted">
                    <div class="completed-cont" id="solidCompleted">
                        <h1>YOU DID GREAT!</h1>
                        <div class="content-row">
                            <img class="completed-einstein" src="./image/einstein2.png" alt="">
                            <h2>Here is the medal for completing the lesson 1</h2>
                        </div>
                        <img class="medal1" src="./image/medal1.png" alt="">
                        <button class="back-main">Back To Main Menu</button>
                    </div>
            </div>

            <div class="popUpQuiz" id="solidPopUp">
                <div class="popUp-cont">
                    <div class="pquiz" id="solidpopq">
                        <h1>POP UP QUIZ!</h1>
                        <h2>What is Matter?</h2>
                        <div class="popquiz-options">
                            <button class="pquiz-option">A. Anything that has matter and takes up space</button>
                            <button class="pquiz-option">B. Anything that you can see</button>
                            <button class="pquiz-option">C. Liquid and gases</button>
                            <button class="pquiz-option">D. Only solids</button>
                        </div>
                    </div>
                </div>

                <div class="correctIncorrect">
                    <div class="c-cont">
                        <img class="gif" src="./image/correct.gif" alt="correct">
                        <img class="gif" src="./image/incorrect.gif" alt="incorrect">
                    </div>
                </div>
            </div>
            
            <div class="wrongAnswers" id="solidWrongAnswers">
                <div class="wrongAnswers-cont">
                    
                </div>
            </div>
        </div>

        <!-- Liquid -->
        <div id="liquid">
            <div id="liquidExamples">
                <h1>LIQUID</h1>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </div>

        <!-- Gas -->
        <div id="gas">
            <div id="gasExamples">
                <h1>GAS</h1>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </div>
    </div>
    
<script src="js/matter.js"></script>