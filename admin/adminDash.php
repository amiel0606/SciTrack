<?php
    include_once './includes/sidebar.php'
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
    <!-- <nav class="navbar has-shadow" role="navigation" aria-label="dropdown navigation">
    <div class="navbar-menu">
        <div class="navbar-start">
            <a href="#" class="navbar-item">
                <i class="fa-solid fa-bars fa-2x"></i>
            </a>
            <a class="navbar-brand ml-2">
                <img class="logo" src="../image/1.png" alt="logo1">
                <img src="../image/2.png" alt="logo1">
            </a>
        </div>
        <div class="navbar-end">
            <a href="#" class="navbar-item">
                <i class="fa-regular fa-circle-user fa-2x"></i>
            </a>
            <p class="title mr-6">
                Admin
            </p>
        </div>
    </div>
</nav> -->

    <div class="column ">
            <div class="columns">
                <div class="column is-two-thirds">
                    <div class="box dash has-shadow" >
                        <img class="aas"style="float: right;" src="../image/admin.png" alt="admin1">
                        <p class="has-text-primary is-size-1 has-text-left mt-1 has-text-weight-bold">Welcome back, Admin</p>
                        <p class="has-text-primary is-size-1 has-text-left ">It is a lot of work for today! <span class="has-text-danger" >So let's start!</span></p>
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
            <div class="box dash-tables dash has-shadow" style="display: flex; flex-direction: column; justify-content: space-between;">
                <div style="display: flex; justify-content: space-between; width: 100%;">
                    <p class="has-text-primary is-size-3 has-text-weight-bold">Students: <span class="has-text-primary is-size-4 has-text-weight-normal">15</span></p>
                    <a href="./adminStudents.php" class="has-text-primary">View All</a>
                </div>
                <div class="select is-primary" style="float: left;">
                    <select name="section">
                        <option>Papaya</option>
                        <option>Mango</option>
                        <option>Star Section</option>
                    </select>
                </div>
                <table class="table dash-table is-hoverable ">
                    <thead class="has-text-centered has-background-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered">
                        <tr>
                            <td>1</td>
                            <td>Amiel Carhyl Lapid</td>
                            <td>aclapid</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Mark Nelson Garcia</td>
                            <td>mngarcia</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Joshua Baker</td>
                            <td>jbaker</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Michael Williams</td>
                            <td>mwilliams</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Daniel Johnson</td>
                            <td>djohnson</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="column is-half">
        <div class="box dash-tables dash has-shadow" style="display: flex; flex-direction: column; justify-content: space-between;">
                <div style="display: flex; justify-content: space-between; width: 100%;">
                    <p class="has-text-primary is-size-3 has-text-weight-bold">Teachers: <span class="has-text-primary is-size-4 has-text-weight-normal">5</span></p>
                    <a href="./adminTeachers.php" class="has-text-primary">View All</a>
                </div>
                <table class="table dash-table is-hoverable ">
                    <thead class="has-text-centered has-background-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered">
                        <tr>
                            <td>1</td>
                            <td>Amiel Carhyl Lapid</td>
                            <td>aclapid</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Mark Nelson Garcia</td>
                            <td>mngarcia</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Joshua Baker</td>
                            <td>jbaker</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Michael Williams</td>
                            <td>mwilliams</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Daniel Johnson</td>
                            <td>djohnson</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



</div>



<script>
document.addEventListener('DOMContentLoaded', () => {
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

        // Add days of the week
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
});

</script>
