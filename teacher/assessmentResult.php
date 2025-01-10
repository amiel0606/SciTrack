<?php
include_once './includes/sidebar.php';
?>
<style>
    .table-container {
        max-height: 520px;
        overflow-y: auto;
        max-width: 1095px;
        scrollbar-color: hsl(240, 16%, 31%) transparent !important;
        scrollbar-width: thin !important;
    }

    .table-container::-webkit-scrollbar {
        width: 12px !important;
        border-radius: 100px !important;
    }

    .table-container::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 100px !important;
    }

    .table-container::-webkit-scrollbar-thumb {
        background: hsl(240, 16%, 31%) !important;
        border: 3px solid transparent !important;
        background-clip: content-box !important;
        border-radius: 100px !important;
    }

    th {
        position: sticky;
        top: 0;
        background: hsl(240, 16%, 31%) !important;
        z-index: 1;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4) !important;
    }
</style>
<div class="column mt-1 ml-3">
    <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Assessment Results</p>
    <div class="columns mb-6">
        <div class="column is-1"></div>
        <div class="column mt-6">
            
            <div class="table-container">
                <table class="table is-hoverable">
                    <thead id="assessment" class="has-text-centered">
                        <tr>
                            <th>Name</th>
                            <th>Score</th>
                            <th>Type</th>
                            <th>Lesson</th>
                            <th>Date Taken</th>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered">
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        let quizType;
        $.ajax({
            url: '../server.php',
            type: 'POST',
            data: { type: 'getQuizScores' },
            dataType: 'json',
            success: function (response) {
                var tableBody = document.querySelector('.table tbody');
                tableBody.innerHTML = '';
                if (response && response.length > 0) {
                    response.forEach(function (quizScore) {
                        displayQuizScore(quizScore);
                    });
                } else {
                    var row = document.createElement('tr');
                    var messageCell = document.createElement('td');
                    messageCell.colSpan = 4;
                    messageCell.textContent = "No quiz scores found.";
                    messageCell.className = 'has-text-centered';
                    row.appendChild(messageCell);
                    tableBody.appendChild(row);
                }
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error: ", status, error);
            }
        });

        function displayQuizScore(quizScore, typeQuiz) {
            if (quizScore.quizType === 'pre') {
                const type = 'Pre-Test';
                var tableBody = document.querySelector('.table tbody');
                var row = document.createElement('tr');

                var nameCell = document.createElement('td');
                nameCell.textContent = quizScore.student_name;
                nameCell.className = 'has-text-centered';
                row.appendChild(nameCell);

                var scoreCell = document.createElement('td');
                scoreCell.textContent = `${quizScore.score}/10`;
                scoreCell.className = 'has-text-centered';
                row.appendChild(scoreCell);

                var quizCell = document.createElement('td');
                quizCell.textContent = type;
                quizCell.className = 'has-text-centered';
                row.appendChild(quizCell);

                var lessonCell = document.createElement('td');
                lessonCell.textContent = quizScore.lesson;
                lessonCell.className = 'has-text-centered';
                row.appendChild(lessonCell);

                var dateTakenCell = document.createElement('td');
                dateTakenCell.textContent = quizScore.date_taken;
                dateTakenCell.className = 'has-text-centered';
                row.appendChild(dateTakenCell);

                tableBody.appendChild(row);
            } else if (quizScore.quizType === 'post') {
                const type = 'Post-Test';
                var tableBody = document.querySelector('.table tbody');
                var row = document.createElement('tr');

                var nameCell = document.createElement('td');
                nameCell.textContent = quizScore.student_name;
                nameCell.className = 'has-text-centered';
                row.appendChild(nameCell);

                var scoreCell = document.createElement('td');
                scoreCell.textContent = `${quizScore.score}/10`;
                scoreCell.className = 'has-text-centered';
                row.appendChild(scoreCell);

                var quizCell = document.createElement('td');
                quizCell.textContent = type;
                quizCell.className = 'has-text-centered';
                row.appendChild(quizCell);

                var lessonCell = document.createElement('td');
                lessonCell.textContent = quizScore.lesson;
                lessonCell.className = 'has-text-centered';
                row.appendChild(lessonCell);

                var dateTakenCell = document.createElement('td');
                dateTakenCell.textContent = quizScore.date_taken;
                dateTakenCell.className = 'has-text-centered';
                row.appendChild(dateTakenCell);

                tableBody.appendChild(row);
            }

        }
    });

</script>