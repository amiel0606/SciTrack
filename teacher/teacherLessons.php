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

.hehe {
    width: 400px;
    margin-left: 950px;
    align-items: center;
    margin-top: 300px;
}

::-webkit-datetime-edit { padding: 1em; }
::-webkit-datetime-edit-fields-wrapper { background: white; }
::-webkit-datetime-edit-text { color: gray; padding: 0 0.3em; }
::-webkit-datetime-edit-month-field { color: gray; }
::-webkit-datetime-edit-day-field { color: gray; }
::-webkit-datetime-edit-year-field { color: gray; }
::-webkit-inner-spin-button { display: none; }
::-webkit-calendar-picker-indicator {
  background: url('../image/calendar-regular.svg') no-repeat center;
  background-size: 16px 16px; 
  cursor: pointer;
}



</style>


<div id="dateModal" class="modal">
    <div class="box hehe">
        <div class="modal-content">
            <p class="title ">Select a date:</p>
                <input class="button" type="date" id="datepicker">
                <input id="lesson-name" type="hidden" name="lesson" >
            <br><br>
            <button id="confirmBtn">Confirm</button>
        </div>
    </div>
</div>
<div class="container">
    <p class="has-text-primary is-size-1 title ml-4">Lessons</p>
    <div class="locked">
        <div class="box my-3" >
            <div class="columns">
                <div class="column is-one-fifth has-background-danger-light">
                    <figure class="image is-square">
                        <img src="../image/matterL.png" alt="Math Image">
                    </figure>
                </div>
                <div class="column">
                    <p class="has-text-primary is-size-4">
                        First Quarter Lesson 1, Lesson 2, and Lesson 3. <br/>
                        <span class="is-size-1 has-text-weight-semibold">MATTER</span> <br/> <br/> <br/></span>
                    </p>
                </div>
            </div>
            <div class="matters lock-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e8eaed">
                        <path d="M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm260.17-140q31.83 0 54.33-22.03T557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z"/>
                    </svg>
            </div>
        </div>
        </div>
    <button class="btn-matters selectDateBtn lesson-btn button is-success js-modal-trigger" data-target="setDate" style="margin-left:1250px" data-lesson="matter">Set Date</button>

    <div class="locked">
        <div class="box my-3">
            <div class="columns">
                <div class="column is-one-fifth has-background-grey">
                    <figure class="image is-square">
                        <img src="../image/eco.png" alt="Math Image">
                    </figure>
                </div>
                <div class="column">
                    <p class="has-text-primary is-size-4">
                        First Quarter Lesson 1, Lesson 2, and Lesson 3. <br/>
                        <span class="is-size-1 has-text-weight-semibold">ECOSYSTEM</span> <br/> <br/> <br/></span>
                    </p>
                </div>
            </div>
            <div class="eco lock-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e8eaed">
                        <path d="M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm260.17-140q31.83 0 54.33-22.03T557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z"/>
                    </svg>
            </div>
        </div>
        </div>
        <button class="btn-eco selectDateBtn lesson-btn button is-success js-modal-trigger" data-target="setDate" style="margin-left:1250px" data-lesson="ecosystem">Set Date</button>


    <div class="locked">
        <div class="box my-3">
            <div class="columns">
                <div class="column is-one-fifth has-background-success">
                    <figure class="image is-square">
                        <img src="../image/motion.png" alt="Math Image">
                    </figure>
                </div>
                <div class="column">
                    <p class="has-text-primary is-size-4">
                        First Quarter Lesson 1, Lesson 2, and Lesson 3. <br/>
                        <span class="is-size-1 has-text-weight-semibold">MOTION</span> <br/> <br/> <br/></span>
                    </p>
                </div>
            </div>
            <div class="motion lock-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e8eaed">
                        <path d="M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm260.17-140q31.83 0 54.33-22.03T557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z"/>
                    </svg>
            </div>
        </div>
        </div>
        <button class="btn-motion selectDateBtn lesson-btn button is-success js-modal-trigger" data-target="setDate" style="margin-left:1250px" data-lesson="motion">Set Date</button>

    <div class="locked">
        <div class="box my-3">
            <div class="columns">
                <div class="column is-one-fifth has-background-warning">
                    <figure class="image is-square">
                        <img src="../image/earth.png" alt="Math Image">
                    </figure>
                </div>
                <div class="column">
                    <p class="has-text-primary is-size-4">
                        First Quarter Lesson 1, Lesson 2, and Lesson 3. <br/>
                        <span class="is-size-1 has-text-weight-semibold">EARTH'S SURFACE</span> <br/> <br/> <br/></span>
                    </p>
                </div>
            </div>
            <div class="earth lock-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e8eaed">
                        <path d="M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm260.17-140q31.83 0 54.33-22.03T557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z"/>
                    </svg>
            </div>
        </div>
        </div>
        <button class="btn-earth selectDateBtn lesson-btn button is-success js-modal-trigger" data-target="setDate" style="margin-left:1250px" data-lesson="earth">Set Date</button>



</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    $(function() {
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');

        const datepicker = document.getElementById('datepicker');

        datepicker.min = `${year}-${month}-${day}`;
        $(".selectDateBtn").click(function() {
            $("#dateModal").css("display", "block");
        });

        $("#confirmBtn").click(function() {
            let selectedDate = $("#datepicker").val();
            alert("You selected: " + selectedDate);
            $("#dateModal").css("display", "none");
        });

        $(window).click(function(event) {
            if ($(event.target).is("#dateModal")) {
                $("#dateModal").css("display", "none");
            }
        });
    });
    // WebSocket connection
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const section = params.get('section');
    const idsToProperties = {
        'matters': 'matter',
        'eco': 'ecosystem',
        'motion': 'motion',
        'earth': 'earth'
    };

    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function() {
        conn.send(JSON.stringify({ type: 'loadLessons', section: section }));
    };
    conn.onmessage = function(e) {
    var data = JSON.parse(e.data);
    // console.log(data);
    const today = new Date();
    const formattedToday = today.toISOString().slice(0, 10);
    console.log(formattedToday);
    Object.keys(idsToProperties).forEach(id => {
        const element = document.querySelector(`.${id}`);
        const buttonElement = document.querySelector(`.btn-${id}`);
        if (element) {
            const property = idsToProperties[id];
            const databaseDate = new Date(data[property]);
            if (databaseDate <= today) {
                element.classList.add('no-way');
            } else {
                element.classList.remove('no-way');
            }
            buttonElement.textContent = data[property];
            if (data[property] !== "Set Date") {
                buttonElement.classList.remove('is-success');
                buttonElement.classList.add('has-background-dark');
                buttonElement.classList.add('has-text-white');
            }
            // console.log(data[property]);
        } else {
            console.error(`Element with class "${id}" not found.`);
        }
    });
};

    document.addEventListener('click', function(event) {
        if (event.target.closest('.lesson-btn')) {
            var button = event.target.closest('.lesson-btn');
            var lesson_value = button.getAttribute('data-lesson');
            $("#lesson-name").val(lesson_value);

        } else if (event.target.closest('#confirmBtn')) {
            var lesson = $("#lesson-name").val();
            var date = $("#datepicker").val();
            console.log(date);
            if (conn.readyState === WebSocket.OPEN) {
                conn.send(JSON.stringify({ type: 'giveLesson', section: section, lesson: lesson, date: date }));
                conn.send(JSON.stringify({ type: 'loadLessons', section: section }));
            } else {
                console.error('WebSocket connection is not open.');
            }
        }
    });
});
    // var data = JSON.parse(e.data);
    // console.log(data);
    // const today = new Date();
    // const offset = today.getTimezoneOffset();
    // const philippinesOffset = 360; 
    // const philippinesTime = new Date(today.getTime() + (philippinesOffset - offset) * 60000);
    // const formattedToday = philippinesTime.toISOString().slice(0, 10); 
    // console.log(formattedToday); 
    // Object.keys(idsToProperties).forEach(id => {
    //     const element = document.getElementById(id);
    //     if (element) {
    //         const property = idsToProperties[id];
    //         if (data[property] !== formattedToday) {
    //             element.classList.remove('no-way');
    //         } else {
    //             element.classList.add('no-way');
    //         }
    //     } else {
    //         console.error(`Element with id "${id}" not found.`);
    //     }
    // });
</script>