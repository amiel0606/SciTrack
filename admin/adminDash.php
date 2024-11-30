<?php
session_start();
if ($_SESSION['role'] == 'Admin') {
    include_once './includes/sidebar.php';
} else {
    header("Location: ../index.php");
    exit();
}
?>
<style>
    .footer {
        margin-top: 390px;
        --bulma-footer-background-color: hsl(45, 43%, 95%);
        --bulma-footer-padding: 3rem 1.5rem 3rem;
    }

    .container {
        margin: 0;
        width: 2000px;
        max-width: 2000px;
        height: 52px;
        background-color: #D9D9D9;
    }

    .navbar {
        width: 1600;
    }

    .navbar-brand {
        height: 50px;
    }

    .dash-table {
        width: 700px;
        margin-bottom: 100px;
    }

    .dash-tables {
        width: 100%;
        height: 489px;
    }

    .select {
        width: 150px;
        padding-left: 6px;
    }
</style>

<div class="container is-max-desktop">
    <div class="column ">
        <div class="columns">
            <div class="column is-two-thirds">
                <div class="box dash has-shadow">
                    <img class="aas" style="float: right;" src="../image/admin.png" alt="admin1">
                    <p class="has-text-primary is-size-1 has-text-left mt-1 has-text-weight-bold">Welcome back, Admin
                    </p>
                    <p class="has-text-primary is-size-1 has-text-left ">It is a lot of work for today! <span
                            class="has-text-danger">So let's start!</span></p>
                </div>
            </div>
            <div class="column">
                <div id="calendar" class="box dash has-shadow px-6 pb-6">
                    <div id="calendar-header" class="level">
                        <span id="month-prev" class="level-left button is-small">&lt;</span>
                        <h1 id="month" class="level-item has-text-centered"></h1>
                        <span id="month-next" class="level-right button is-small">&gt;</span>
                    </div>
                    <div id="calendar-body" class="columns is-multiline is-mobile" style="background-color: #fff">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="columns">
            <div class="column is-half">
                <div class="box dash-tables dash has-shadow"
                    style="display: flex; flex-direction: column; justify-content: space-between;">
                    <div style="display: flex; justify-content: space-between; width: 100%;">
                        <p class="has-text-primary is-size-3 has-text-weight-bold">Students: <span
                                class="studentCount has-text-primary is-size-4 has-text-weight-normal"></span></p>
                        <a href="./adminStudents.php" class="has-text-primary">View All</a>
                    </div>

                    <div class="table-container">
                        <table id="students" class="table dash-table is-hoverable ">
                            <thead class="has-text-centered has-background-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody class="has-text-centered">

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="column is-half">
                <div class="box dash-tables dash has-shadow"
                    style="display: flex; flex-direction: column; justify-content: space-between;">
                    <div style="display: flex; justify-content: space-between; width: 100%;">
                        <p class="has-text-primary is-size-3 has-text-weight-bold">Teachers: <span
                                class="teacherCount has-text-primary is-size-4 has-text-weight-normal"></span></p>
                        <a href="./adminTeachers.php" class="has-text-primary">View All</a>
                    </div>
                    <table id="teachers" class="table dash-table is-hoverable ">
                        <thead class="has-text-centered has-background-primary">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody class="has-text-centered">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>



<script>
    $(document).ready(function () {
        const calendarBody = document.getElementById('calendar-body');
        const monthElement = document.getElementById('month');
        const prevButton = document.getElementById('month-prev');
        const nextButton = document.getElementById('month-next');
        let today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();

        const months = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        function generateCalendar(month, year) {
            calendarBody.innerHTML = '';
            monthElement.textContent = `${months[month]} ${year}`;

            daysOfWeek.forEach(day => {
                const dayCell = document.createElement('div');
                dayCell.classList.add('date');
                dayCell.textContent = day;
                calendarBody.appendChild(dayCell);
            });

            const firstDay = new Date(year, month).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            for (let i = 0; i < firstDay; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.classList.add('date');
                calendarBody.appendChild(emptyCell);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const dateCell = document.createElement('div');
                dateCell.classList.add('date');
                dateCell.textContent = day;

                if (day === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                    dateCell.classList.add('current');
                }

                calendarBody.appendChild(dateCell);
            }
        }

        function changeMonth(direction) {
            currentMonth += direction;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            } else if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateCalendar(currentMonth, currentYear);
        }

        prevButton.addEventListener('click', () => changeMonth(-1));
        nextButton.addEventListener('click', () => changeMonth(1));

        generateCalendar(currentMonth, currentYear);
        // Load students, teachers, and counts using AJAX requests
        $.ajax({
            url: '../server.php',
            method: 'POST',
            data: { type: 'loadStudents' },
            success: function (response) {
                if (Array.isArray(response)) {
                    var table = $('#students tbody');
                    table.empty(); // Clear existing rows
                    response.forEach(function (student) {
                        var newRow = $('<tr>');
                        newRow.append($('<td>').text(student.id));
                        newRow.append($('<td>').text(student.name));
                        newRow.append($('<td>').text(student.username));
                        table.append(newRow);
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('Error loading students:', error);
            }
        });

        $.ajax({
            url: '../server.php',
            method: 'POST',
            data: { type: 'loadTeachers' },
            success: function (response) {
                if (Array.isArray(response)) {
                    var table = $('#teachers tbody');
                    table.empty(); // Clear existing rows
                    response.forEach(function (teacher) {
                        var newRow = $('<tr>');
                        newRow.append($('<td>').text(teacher.id));
                        newRow.append($('<td>').text(teacher.name));
                        newRow.append($('<td>').text(teacher.username));
                        table.append(newRow);
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('Error loading teachers:', error);
            }
        });

        $.ajax({
            url: '../server.php',
            method: 'POST',
            data: { type: 'getCountStudents' },
            success: function (response) {
                if (response && response.counts) {
                    const totalCount = Object.values(response.counts).reduce((sum, count) => {
                        return sum + parseInt(count, 10); 
                    }, 0);
                    $('.studentCount').text(totalCount);
                } else {
                    console.log('No counts found in student response');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching student count:', error);
            }
        });

        $.ajax({
            url: '../server.php',
            method: 'POST',
            data: { type: 'getTeacherCounts' },
            success: function (response) {
                if (response && response.counts) {
                    const totalCount = Object.values(response.counts).reduce((sum, count) => {
                        return sum + parseInt(count, 10); 
                    }, 0);
                    $('.teacherCount').text(totalCount);
                } else {
                    console.log('No counts found in teacher response');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching teacher count:', error);
            }
        });
    });
</script>