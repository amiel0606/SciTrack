document.addEventListener("DOMContentLoaded", function () {
    const rightButton = document.querySelector('.s-btn1 img[alt="right"]');
    const leftButton1 = document.querySelector('.s-btn1 img[alt="left"]');
    const leftButton = document.querySelector('#s-left img[alt="left"]');
    const matterCont = document.querySelector('.matter-cont');
    const topic = document.querySelector('.topic');
    const sLeft = document.querySelector('#s-left');
    const solidImage = document.querySelector('.topic a img[alt="solid"]');
    const matterTopic = document.querySelector('#matterTopic');
    const solid = document.querySelector('#solid');
    const solidExamples = document.querySelector('#solidExamples');
    const solidDef = document.querySelector('#solidDef');
    const solidLearn = document.querySelector('#solidLearn');
    const solidChar1 = document.querySelector('#solidChar1');
    const solidChar2 = document.querySelector('#solidChar2');
    const solidHappen = document.querySelector('#solidHappen');
    const solidLetsTry = document.querySelector('#solidLetsTry');
    const goBackBtn = document.querySelector('.go-back');
    const proceedBtn = document.querySelector('.proceed-quiz');
    const solidQuiz1 = document.querySelector('#solidQuiz1');
    const solidQuiz2 = document.querySelector('#solidQuiz2');
    const solidQuiz3 = document.querySelector('#solidQuiz3');
    const solidQuiz4 = document.querySelector('#solidQuiz4');
    const solidQuiz5 = document.querySelector('#solidQuiz5');
    const solidQuizResult = document.querySelector('#solidQuizResult');
    const resultClose = document.querySelector('.result-close');
    const solidQuizCompleted = document.querySelector('#solidQuizCompleted');
    const backMain = document.querySelector('.back-main');
    const solidPopUp = document.querySelector('#solidPopUp');
    const solidWrongAnswers = document.querySelector('.wrongAnswers');
    const reviewQuiz = document.querySelector('.review-quiz');

    const sBtn1 = document.querySelector('.s-btn1');
    const liquid = document.querySelector('#liquid');
    const gas = document.querySelector('#gas');
    const einstein = document.querySelector('#einstein');

    topic.style.display = 'none';
    sLeft.style.display = 'none';
    matterCont.style.display = 'block'; /* block */
    matterTopic.style.display = 'none';
    solid.style.display = 'none';
    solidExamples.style.display = 'none';
    solidDef.style.display = 'none';
    solidLearn.style.display = 'none';
    solidChar1.style.display = 'none';
    solidChar2.style.display = 'none';
    solidPopUp.style.display = 'none';
    solidHappen.style.display = 'none';
    solidLetsTry.style.display = 'none';
    solidQuiz1.style.display = 'none';
    solidQuiz2.style.display = 'none';
    solidQuiz3.style.display = 'none';
    solidQuiz4.style.display = 'none';
    solidQuiz5.style.display = 'none';
    solidQuizResult.style.display = 'none';
    solidQuizCompleted.style.display = 'none';
    solidWrongAnswers.style.display = 'none';
    liquid.style.display = 'none';
    gas.style.display = 'none';
    sBtn1.style.display = 'flex';

    rightButton.addEventListener('click', function (event) {
        event.preventDefault();
        if (matterTopic.style.display === 'block' && solid.style.display === 'block') {
            if (solidExamples.style.display === 'grid') {
                solidExamples.style.display = 'none'; 
                solidDef.style.display = 'block'; 
            } else if (solidDef.style.display === 'block') {
                solidDef.style.display = 'none'; 
                solidLearn.style.display = 'block'; 
            } else if (solidLearn.style.display === 'block') {
                solidLearn.style.display = 'none'; 
                solidChar1.style.display = 'block'; 
            } else if (solidChar1.style.display === 'block') {
                solidChar1.style.display = 'none'; 
                solidChar2.style.display = 'block'; 
            } else if (solidChar2.style.display === 'block') {
                solidChar2.style.display = 'none';
                sBtn1.style.display = 'none';
                einstein.style.display = 'none';
                solidPopUp.style.display = 'block'; 
            } else if (solidHappen.style.display === 'block') {
                solidHappen.style.display = 'none';
                solidLetsTry.style.display = 'block'; 
            } else if(solidQuiz1.style.display === 'block') {
                solidQuiz1.style.display = 'none';
                solidQuiz2.style.display = 'block';
            } else if(solidQuiz2.style.display === 'block') {
                solidQuiz2.style.display = 'none';
                solidQuiz3.style.display = 'block';
            } else if(solidQuiz3.style.display === 'block') {
                solidQuiz3.style.display = 'none';
                solidQuiz4.style.display = 'block';
            } else if(solidQuiz4.style.display === 'block') {
                solidQuiz4.style.display = 'none';
                solidQuiz5.style.display = 'block';
            } else if(solidQuiz5.style.display === 'block') {
                solidQuiz5.style.display = 'none';
                sBtn1.style.display = 'none';
                einstein.style.display = 'none';
                solidQuizResult.style.display = 'block';
            } 
        } else {
            matterCont.style.display = 'none'; 
            topic.style.display = 'block'; 
            sLeft.style.display = 'flex';
            sBtn1.style.display = 'none';
        }
    });

    leftButton.addEventListener('click', function (event) {
        event.preventDefault();
        if (sBtn1.style.display === 'none') {
            topic.style.display = 'none'; 
            sLeft.style.display = 'none';
            matterCont.style.display = 'block';
            sBtn1.style.display = 'flex';
        }
    });
    
    leftButton1.addEventListener('click', function (event) {
        event.preventDefault();
        if(solidQuiz5.style.display === 'block'){
            solidQuiz5.style.display = 'none';
            solidQuiz4.style.display = 'block';
        } else if(solidQuiz4.style.display === 'block') {
            solidQuiz4.style.display = 'none';
            solidQuiz3.style.display = 'block';
        } else if(solidQuiz3.style.display === 'block') {
            solidQuiz3.style.display = 'none';
            solidQuiz2.style.display = 'block';
        } else if(solidQuiz2.style.display === 'block') {
            solidQuiz2.style.display = 'none';
            solidQuiz1.style.display = 'block';
        } else if(solidQuiz1.style.display === 'block') {
            solidQuiz1.style.display = 'none';
            solidLetsTry.style.display = 'block';
        } else if(solidLetsTry.style.display === 'block') {
            solidLetsTry.style.display = 'none';
            solidHappen.style.display = 'block';
        } else if (solidHappen.style.display === 'block') {
            solidHappen.style.display = 'none';
            solidChar2.style.display = 'block';
        } else if (solidChar2.style.display === 'block') {
            solidChar2.style.display = 'none';
            solidChar1.style.display = 'block';
        } else if (solidChar1.style.display === 'block') {
            solidChar1.style.display = 'none';
            solidLearn.style.display = 'block';
        } else if (solidLearn.style.display === 'block') {
            solidLearn.style.display = 'none';
            solidDef.style.display = 'block';
        } else if (solidDef.style.display === 'block') {
            solidDef.style.display = 'none';
            solidExamples.style.display = 'grid';
        } else if (solidExamples.style.display === 'grid') {
            matterTopic.style.display = 'none'; 
            solid.style.display = 'none';
            solidExamples.style.display = 'none';
            solidDef.style.display = 'none';
            solidLearn.style.display = 'none';
            solidChar1.style.display = 'none';
            solidChar2.style.display = 'none';
            solidPopUp.style.display = 'none';
            solidHappen.style.display = 'none';
            solidLetsTry.style.display = 'none';
            solidQuiz1.style.display = 'none';
            solidQuiz2.style.display = 'none';
            solidQuiz3.style.display = 'none';
            solidQuiz4.style.display = 'none';
            solidQuiz5.style.display = 'none';
            solidQuizResult.style.display = 'none';
            solidQuizCompleted.style.display = 'none';
            solidWrongAnswers.style.display = 'none';
            topic.style.display = 'block'; 
            sLeft.style.display = 'flex';
            sBtn1.style.display = 'none';
        } else {
            window.location.href = 'StudentDb.php';
        }
    });

    solidImage.addEventListener('click', function (event) {
        event.preventDefault();
        if (topic.style.display === 'block' && sBtn1.style.display === 'none') {
            matterCont.style.display = 'none'; 
            topic.style.display = 'none'; 
            sLeft.style.display = 'none';
            matterTopic.style.display = 'block'; 
            solid.style.display = 'block';
            solidExamples.style.display = 'grid';
            solidDef.style.display = 'none';
            solidLearn.style.display = 'none';
            solidChar1.style.display = 'none';
            solidChar2.style.display = 'none';
            solidPopUp.style.display = 'none';
            solidHappen.style.display = 'none';
            solidLetsTry.style.display = 'none';
            solidQuiz1.style.display = 'none';
            solidQuiz2.style.display = 'none';
            solidQuiz3.style.display = 'none';
            solidQuiz4.style.display = 'none';
            solidQuiz5.style.display = 'none';
            solidQuizResult.style.display = 'none';
            solidQuizCompleted.style.display = 'none';
            solidWrongAnswers.style.display = 'none';
            sBtn1.style.display = 'flex';
        }
    });

    goBackBtn.addEventListener('click', function (event) {
        solidLetsTry.style.display = 'none';
        solidHappen.style.display = 'block';
    });

    proceedBtn.addEventListener('click', function (event) {
        solidLetsTry.style.display = 'none';
        solidQuiz1.style.display = 'block';
    });

    resultClose.addEventListener('click', function (event) {
        event.preventDefault(); 
        solidQuizResult.style.display = 'none';
        sBtn1.style.display = 'none';
        einstein.style.display = 'none';
        solidQuizCompleted.style.display = 'block';
    });

    backMain.addEventListener('click', function (event) {
        solidQuizCompleted.style.display = 'none';
        matterTopic.style.display = 'none';
        solid.style.display = 'none';
        
        topic.style.display = 'block'; 
        sLeft.style.display = 'block';
        einstein.style.display = 'block';
    });

    reviewQuiz.addEventListener('click', function (event) {
        solidQuizResult.style.display = 'none';
        solidWrongAnswers.style.display = 'block';
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const quizOption = document.querySelectorAll('.quiz-option');
    const pquizOption = document.querySelectorAll('.pquiz-option');
    const correctIncorrect = document.querySelector(".correctIncorrect");
    const correct = document.querySelector(".gif[alt='correct']");
    const incorrect = document.querySelector(".gif[alt='incorrect']");
    const solidHappen = document.querySelector('#solidHappen');
    const popUpQuiz = document.querySelector('.popUpQuiz');
    const einstein = document.querySelector('#einstein');
    const sBtn1 = document.querySelector('.s-btn1');

    quizOption.forEach(option => {
        option.addEventListener('click', function (event) {
            event.preventDefault();
            quizOption.forEach(option => {
                option.classList.remove('selected');
            });
            option.classList.add('selected');
        });
    });

    pquizOption.forEach(option => {
        option.addEventListener('click', function (event) {
            event.preventDefault();
            pquizOption.forEach(option => {
                option.classList.remove('selected');
            });
            option.classList.add('selected');
        });
    });
    
    correctIncorrect.style.display = 'none';
    solidHappen.style.display = 'none';

    pquizOption.forEach(option => {
        option.addEventListener('click', function (event) {
            event.preventDefault();
            pquizOption.forEach(option => {
                option.classList.remove('selected');
            });
            option.classList.add('selected');

            correctIncorrect.style.display = 'block';

            if (option.textContent.trim().startsWith("A.")) {
                correct.style.display = "flex";
                incorrect.style.display = "none";
            } else {
                incorrect.style.display = "flex";
                correct.style.display = "none";
            }

            setTimeout(() => {
                correctIncorrect.style.display = 'none';
                correct.style.display = "none";
                incorrect.style.display = "none";

                popUpQuiz.style.display = 'none';
                einstein.style.display = 'block';
                sBtn1.style.display = 'flex';
                solidHappen.style.display = 'block';
            }, 3000);
        });
    });
});
