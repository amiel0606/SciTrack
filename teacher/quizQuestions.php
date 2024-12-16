<?php
include_once './includes/sidebar.php';
?>
<style>
    .column {
        border-radius: 10px;
    }

    :root {
        --bulma-warning-h: 48deg;
        --bulma-warning-l: 77%;
    }

    .locked {
        background-color: #818589;
        opacity: .5;
        position: relative;
        border-radius: 15px;
    }

    .lock-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        border-radius: 5px;
    }

    .lock-overlay svg {
        width: 64px;
        height: 64px;
        fill: #fff;
    }

    .no-way {
        display: none;
    }

    .box {
        background-color: #faf9f5;
    }

    .hehe {
        width: 400px;
        margin-left: 950px;
        align-items: center;
        margin-top: 300px;
    }

    ::-webkit-datetime-edit {
        padding: 1em;
    }

    ::-webkit-datetime-edit-fields-wrapper {
        background: white;
    }

    ::-webkit-datetime-edit-text {
        color: gray;
        padding: 0 0.3em;
    }

    ::-webkit-datetime-edit-month-field {
        color: gray;
    }

    ::-webkit-datetime-edit-day-field {
        color: gray;
    }

    ::-webkit-datetime-edit-year-field {
        color: gray;
    }

    ::-webkit-inner-spin-button {
        display: none;
    }

    ::-webkit-calendar-picker-indicator {
        background: url('../image/calendar-regular.svg') no-repeat center;
        background-size: 16px 16px;
        cursor: pointer;
    }

    .lesson-card {
        border-radius: 10px;
        padding: 1rem;
    }

    .lesson-card.locked {
        background-color: #818589;
        opacity: 0.5;
        position: relative;
    }

    .lesson-card img {
        border-radius: 10px;
    }

    .lesson-content {
        background-color: #f4f4f4;
        padding: 1rem;
        border-radius: 10px;
    }

    .lesson-content .icon {
        float: right;
    }

    .is-scrollable {
        max-height: 80vh;
        overflow-y: auto;
    }

    .lesson-content {
        min-height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    .lesson-card {
        min-height: 200px;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .lesson-card img {
        max-width: 100%;
        height: 200px;
        max-height: 100%;
        object-fit: contain;
    }

    .icon {
        margin-top: 15px;
    }

    .file-label {
        display: flex;
        align-items: center;
    }

    .file-label img {
        margin-left: 10px;
        max-width: 100px;
        max-height: 100px;
        object-fit: contain;
    }

    .margin-200 {
        margin-top: 300px !important;
    }

    .btn {
        width: 100%;
        padding: 1rem;
    }

    .is-narrow {
        width: 70%;
        margin: 0 auto;
    }

    .icon {
        margin: 0 !important;
    }

    .box-scrollable {
        max-height: 700px;
        overflow-y: auto;
    }

    .box-scrollable::-webkit-scrollbar {
        width: 5px;
    }

    .box-scrollable::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 5px;
    }

    .box-scrollable::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    .box-scrollable::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .modal {
        display: none;
    }

    .modal.is-active {
        display: block;
    }

    .modal-content {
        width: 100%;
        max-width: 1200px !important;
        margin-top: 50px !important;
    }
</style>

<body>
    <div class="container mt-5">
        <p class="title has-text-centered is-size-1">Edit <span id="testIto"></span>-test questions for <span id="lessonItu"></span> </p>
        <div class="notification is-success">
            <button class="delete"></button>
            <span id="notif"></span>
        </div>
        <div class="box box-scrollable">
            <p class="subtitle">Total Questions: <span id="countQuestion"></span>  </p>
            <!-- Existing content for quiz questions -->
        </div>
        <div class="field">
            <div class="control">
                <button id="addQuestion" class="button is-primary has-text-white">
                    <span class="icon is-large">
                        <i class="fa-solid fa-plus fa-lg"></i>
                    </span>
                    <span>Add New Question</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="questionModal" class="modal">
        <div class="modal-background close-modal"></div>
        <div class="modal-content">
            <div class="box">
                <p class="title">EDIT QUESTION</p>
                <input type="hidden" name="questionId" id="question_ID">
                <div class="field mb-3">
                    <div class="control">
                        <input type="text" id="questionPo" name="question" placeholder="Put Question Here"
                            class="input question mt-6">
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-one-third">
                        <div class="field mt-4">
                            <div class="control">
                                <label class="label is-size-4 has-text-weight-bold" for="choice1">Option 1</label>
                                <input type="text" name="choice1" id="choice1" placeholder="First Choice"
                                    class="input choice1">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="label is-size-4 has-text-weight-bold" for="choice3">Option 3</label>
                                <input type="text" name="choice3" id="choice3" placeholder="Third Choice"
                                    class="input choice2">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="label is-size-4 has-text-weight-bold" for="choice2">Correct Answer</label>
                                <div class="select is-fullwidth">
                                    <select id="correctDropdown">
                                        <option selected disabled>Select Correct Answer</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="field mt-4">
                            <div class="control">
                                <label class="label is-size-4 has-text-weight-bold" for="choice2">Option 2</label>
                                <input type="text" name="choice2" id="choice2" placeholder="Second Choice"
                                    class="input choice2">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="label is-size-4 has-text-weight-bold" for="choice4">Option 4</label>
                                <input type="text" name="choice4" id="choice4" placeholder="Fourth Choice"
                                    class="input choice2">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="label is-size-4 has-text-weight-bold" for="additional">Additional
                                    Information</label>
                                <textarea rows="12" cols="50" name="additional" id="additional"
                                    placeholder="Give Additional Information" class="textarea additional"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="column mt-4">
                        <div class="field">
                            <div class="control">
                                <label class="label is-size-4 has-text-weight-bold" for="difficulty">Quiz
                                    Difficulty</label>
                                <div class="select is-fullwidth">
                                    <select id="difficultyDropdown" name="difficulty">
                                        <option selected disabled>Select Difficulty</option>
                                        <option value="easy">Easy</option>
                                        <option value="average">Average</option>
                                        <option value="hard">Hard</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="margin-200"></div>
                        <div class="field">
                            <div class="control">
                                <button class="btn-save btn button is-medium is-success is-fullwidth">SAVE</button>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button
                                    class="btn-clear btn button is-medium has-text-white is-primary is-fullwidth">Clear</button>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button
                                    class="close-modal btn button is-medium has-text-white is-danger is-fullwidth">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="modal-close is-large close-modal" aria-label="close"></button>
    </div>
</body>
<script>
    $(document).ready(function () {
        function openModal() {
            document.getElementById('questionModal').classList.add('is-active');
        }

        function closeModal() {
            document.getElementById('questionModal').classList.remove('is-active');
        }

        function clearForm() {
            document.getElementById('questionPo').value = '';
            document.getElementById('choice1').value = '';
            document.getElementById('choice2').value = '';
            document.getElementById('choice3').value = '';
            document.getElementById('choice4').value = '';
            document.getElementById('additional').value = '';
            document.getElementById('correctDropdown').selectedIndex = 0;
            document.getElementById('difficultyDropdown').selectedIndex = 0;
        }
        $('.notification').hide();
        const currentUrl = window.location.href;
        const url = new URL(currentUrl);
        const params = new URLSearchParams(url.search);
        const lesson = params.get('lesson');
        const type = params.get('type');
        $('#lessonItu').text(lesson);
        $('#testIto').text(type);
        $('#addQuestion').on('click', function () {
            if (type === 'pre') {
                window.location.href = `addQuizQuestions.php?lesson=${lesson}&type=${type}`;
            }
        });
        $(document).on('click', '.close-modal', function () {
            closeModal();
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === "Escape") {
                closeModal();
            }
        });
        $(document).on('click', '.btn-clear', function () {
            clearForm();
        });
        $(document).on('click', '.btn-save', function () {
            const questionId = $('#question_ID').val();
            const question = $('#questionPo').val();
            const choices = [
                $('#choice1').val(),
                $('#choice2').val(),
                $('#choice3').val(),
                $('#choice4').val()
            ];
            const correctAnswer = $('#correctDropdown').val();
            const additionalInfo = $('#additional').val();
            const difficulty = $('#difficultyDropdown').val();
            if (!lesson || !type || !questionId || !question || choices.some(choice => !choice) || !correctAnswer) {
                alert('Please fill in all required fields!');
                return;
            }
            const formData = new FormData();
            formData.append('lesson', lesson);
            formData.append('type', type);
            formData.append('questionId', questionId);
            formData.append('question', question);
            formData.append('choices', JSON.stringify(choices));
            formData.append('correct_answer', correctAnswer);
            formData.append('additional_info', additionalInfo);
            formData.append('difficulty', difficulty);

            $.ajax({
                url: './includes/editQuestion.php',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    const res = JSON.parse(response);
                    if (res.status === 'success') {
                        closeModal();
                        $('#notif').text('Question updated successfully');
                        $('.notification').show();
                        setTimeout(function () {
                            $('.notification').hide();
                            $('#notif').text('');
                        }, 2000);
                    } else {
                        alert(`Failed to update: ${res.message}`);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                    alert('An error occurred while updating the question.');
                }
            });
        });
        $(document).on('click', '.btn-delete', function () {
            const questionId = $(this).data('id');
            $.ajax({
                url: './includes/deleteQuestion.php',
                type: 'POST',
                data: {
                    lesson: lesson,
                    type: type,
                    id: questionId
                },
                success: function (response) {
                    const res = JSON.parse(response);
                    if (res.status ==='success') {
                        $('#notif').text('Question deleted successfully');
                        $('.notification').show();
                        setTimeout(function () {
                            $('.notification').hide();
                            $('#notif').text('');
                            location.reload();
                        }, 2000);
                    } else {
                        alert(`Failed to delete: ${res.message}`);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                    alert('An error occurred while deleting the question.');
                }
            });
        });
        $(document).on('click', '.edit-question', function () {
            const questionId = $(this).data('id');
            $.ajax({
                url: './includes/showEditQuestion.php',
                type: 'POST',
                data: {
                    lesson: lesson,
                    type: type,
                    id: questionId
                },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        response.data.forEach((data) => {
                            document.getElementById('questionPo').value = data.question;
                            const jsonData = JSON.parse(data.choices || '[]');
                            document.getElementById('choice1').value = jsonData[0] || '';
                            document.getElementById('choice2').value = jsonData[1] || '';
                            document.getElementById('choice3').value = jsonData[2] || '';
                            document.getElementById('choice4').value = jsonData[3] || '';
                            document.getElementById('additional').value = data.additional_info || '';
                            $('#question_ID').val(questionId)
                            const correctDropdown = document.getElementById('correctDropdown');
                            if (correctDropdown) {
                                [...correctDropdown.options].forEach((option, index) => {
                                    if (option.value === data.correct_answer) {
                                        correctDropdown.selectedIndex = index;
                                    }
                                });
                            }
                            const difficultyDropdown = document.getElementById('difficultyDropdown');
                            if (difficultyDropdown) {
                                [...difficultyDropdown.options].forEach((option, index) => {
                                    if (option.value === data.difficulty) {
                                        difficultyDropdown.selectedIndex = index;
                                    }
                                });
                            }
                            openModal();
                        });
                    } else {
                        alert(response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    alert('An error occurred while processing your request.');
                }
            });
        });
        function fetchQuestions() {
            if (!lesson || !type) {
                alert('Lesson or Type parameter is missing!');
                return;
            }
            $.ajax({
                url: './includes/showQuestions.php',
                method: 'POST',
                dataType: 'json',
                data: { lesson: lesson, type: type },
                success: function (response) {
                    if (response.status === 'success') {
                        $('#countQuestion').text(response.data.length);
                        const questions = response.data;
                        $('.columns.is-vcentered').remove();
                        questions.forEach((question) => {
                            const questionHTML = `
                        <div class="columns is-vcentered">
                            <div class="column is-three-quarters">
                                <div class="box has-background-grey-lighter has-text-centered has-background-grey">
                                    <span id="question" class="title is-size-4">Question: ${question.question}</span>
                                    <div class="columns is-8 is-centered">
                                        <div class="column is-half">
                                            ${JSON.parse(question.choices).slice(0, 2).map((choice, index) => `
                                            <div class="field">
                                                <div class="control">
                                                    <div class="box has-text-centered is-narrow has-background-grey">
                                                        <span class="title has-text-white is-size-4">${choice}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            `).join('')}
                                        </div>
                                        <div class="column is-half">
                                            ${JSON.parse(question.choices).slice(2).map((choice, index) => `
                                            <div class="field">
                                                <div class="control">
                                                    <div class="box has-text-centered is-narrow has-background-grey">
                                                        <span class="title has-text-white is-size-4">${choice}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            `).join('')}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column has-text-centered">
                                <div class="field">
                                    <div class="control">
                                        <button class="button is-success is-narrow edit-question" data-id="${question.id}">
                                            <span class="icon is-large">
                                                <i class="fas fa-edit fa-lg"></i>
                                            </span>
                                            <span>Edit</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button class="btn-delete button is-danger is-narrow delete-question" data-id="${question.id}">
                                            <span class="icon is-large">
                                                <i class="fa-solid fa-trash fa-lg"></i>
                                            </span>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                            $('.box-scrollable').append(questionHTML);
                        });
                    } else {
                        console.error(response.message);
                        alert('Failed to fetch questions. Check console for details.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                }
            });
        }
        fetchQuestions();
    });
</script>