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
        /* Adjust the height as needed */
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        /* Center text horizontally */
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
</style>

<body>
    <div class="container mt-5">
        <p class="title has-text-centered">Manage Quiz Questions</p>
        <div class="notification is-success">
            <button class="delete"></button>
            <span id="notif"></span>
        </div>
        <div class="box">
            <p class="title">ADD QUESTION</p>
            <div class="field mb-3">
                <div class="control">
                    <input type="text" id="question" name="question" placeholder="Put Question Here"
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
                            <input type="text" name="choice4" id="choice4" placeholder="Second Choice"
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
                            <label class="label is-size-4 has-text-weight-bold" for="difficulty">Quiz Difficulty</label>
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
                            <button class="btn-add btn button is-medium is-success is-fullwidth">ADD</button>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button
                                class="btn-clear btn button is-medium has-text-white is-primary is-fullwidth">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function () {
        $('.notification').hide();
        const currentUrl = window.location.href;
        const url = new URL(currentUrl);
        const params = new URLSearchParams(url.search);
        const lesson = params.get('lesson');
        const type = params.get('type');

        $('.btn-add').click(function () {
            const question = $('#question').val();
            const choices = [
                $('#choice1').val(),
                $('#choice2').val(),
                $('#choice3').val(),
                $('#choice4').val()
            ];
            const correctAnswer = $('#correctDropdown').val();
            const additionalInfo = $('#additional').val();
            const difficulty = $('#difficultyDropdown').val();

            if (!lesson) {
                alert('Lesson parameter is missing!');
                return;
            }

            const formData = new FormData();
            formData.append('lesson', lesson);
            formData.append('type', type);
            formData.append('question', question);
            formData.append('choices[]', choices[0]);
            formData.append('choices[]', choices[1]);
            formData.append('choices[]', choices[2]);
            formData.append('choices[]', choices[3]);
            formData.append('correct_answer', correctAnswer);
            formData.append('additional_info', additionalInfo);
            formData.append('difficulty', difficulty);


            $.ajax({
                url: './includes/addQuestion.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#notif').text('Question Added');
                    $('.notification').show();
                    setTimeout(function () {
                        $('.notification').hide();
                        $('#notif').text('');
                    }, 2000);
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        function openModal($el) {
            $el.classList.add('is-active');
        }

        function closeModal($el) {
            $el.classList.remove('is-active');
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.removeAttribute('data-lesson');
            });
        }

        function closeAllModals() {
            (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                closeModal($modal);
            });
        }

        (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
            const modal = $trigger.dataset.target;
            const lesson = $trigger.dataset.lesson;
            const $target = document.getElementById(modal);
            $trigger.addEventListener('click', () => {
                const buttons = document.querySelectorAll('.btn');
                buttons.forEach(button => {
                    button.setAttribute('data-lesson', lesson);
                });
                openModal($target);
            });
        });

        (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
            const $target = $close.closest('.modal');

            $close.addEventListener('click', () => {
                closeModal($target);
            });
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === "Escape") {
                closeAllModals();
            }
        });
    });
</script>