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
        margin-top: 90px;
        --bulma-footer-background-color: hsl(45, 43%, 95%);
        --bulma-footer-padding: 3rem 1.5rem 3rem;
    }

    body {
        overflow: hidden;
        /* Hide scrollbars */
        height: 100vh;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    .addStudents {
        --bulma-box-background-color: hsl(0, 0%, 100%);
        height: 561px;
        width: 100%;
        font-family: 'InriaSans-Bold';
    }


    .input {
        background-color: #D4D4D4;
        --bulma-input-focus-h: 240;
        --bulma-input-focus-s: 16%;
        --bulma-input-focus-l: 31%;
        color: #333333;
        border: 1px solid #D4D4D4;
        --bulma-input-placeholder-color: hsl(0, 0%, 20%);
    }

    .addNotification {
        width: 300px;
    }

    .modalArchive {
        font-family: 'InriaSans-Bold';
        width: 100%;
        height: 300px;
        --bulma-box-background-color: hsl(0, 0%, 100%);
    }

    .editBox {
        height: 650px;
    }


    :root {
        --bulma-primary-h: 240deg;
        --bulma-primary-s: 16%;
        --bulma-primary-l: 31%;
        --bulma-link-h: 0deg;
        --bulma-link-s: 0%;
        --bulma-link-l: 83%;
    }
</style>
<!-- ADD TEACHER MODAL -->
<div id="addStudentsModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box addStudents">
            <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Add New Teacher</p>
            <form action="./includes/addStaff/uploadSingleTeacher.php" method="post" id="addTeachersForm"
                enctype="multipart/form-data">
                <div class="field">
                    <div class="control mb-5">
                        <input class="input" type="text" name="firstName" placeholder="Enter First Name">
                    </div>
                </div>
                <div class="field">
                    <div class="control mb-5">
                        <input class="input " type="text" name="lastName" placeholder="Enter Last Name">
                    </div>
                </div>
                <div class="field">
                    <div class="control mb-5">
                        <input class="input " type="text" name="userName" placeholder="Enter  Username">
                    </div>
                </div>
                <div class="field">
                    <div class="select">
                        <select class="select-dropdown is-hovered" id="sectionDropdown">
                            <option>Select Section</option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="columns mt-6">
                    <div class="column is-8 has-background-white">
                    </div>
                    <div class="column has-background-white">
                        <button class="button is-primary has-text-white" type="submit" name="submit">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF ADD TEACHER MODAL -->


<!-- EDIT TEACHER MODAL -->
<div id="modalTeacherEdit" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box addStudents editBox">
            <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Edit Teacher's Details
            </p>
            <form action="./includes/addStaff/editTeacher.php" method="post" id="editStudentsForm">
                <input type="hidden" name="teacherID" id="teacherID" value="">
                <div class="field">
                    <label class="label is-size-6 has-text-primary" for="firstName">First Name</label>
                    <div class="control mb-1">
                        <input id="firstName" class="input" type="text" name="firstName" placeholder="Edit First Name">
                    </div>
                </div>
                <div class="field">
                    <label class="label is-size-6 has-text-primary" for="lastName">Last Name</label>
                    <div class="control mb-1">
                        <input id="lastName" class="input " type="text" name="lastName" placeholder="Edit Last Name">
                    </div>
                </div>
                <div class="field">
                    <label class="label is-size-6 has-text-primary" for="userName">Username</label>
                    <div class="control mb-1">
                        <input id="userName" class="input " type="text" name="userName" placeholder="Edit Username">
                    </div>
                </div>
                <div class="field">
                    <label class="label is-size-6 has-text-primary" for="editSectionDropdown">Section</label>
                    <div class="select">
                        <select class="select-dropdown is-hovered" id="editSectionDropdown">
                            <option>Select Section</option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label class="label is-size-6 has-text-primary" for="password">Password</label>
                    <div class="control mb-1">
                        <input class="input" type="password" name="password" placeholder="Edit password">
                    </div>
                </div>
                <div class="columns mt-6">
                    <div class="column is-8 has-background-white">
                    </div>
                    <div class="column has-background-white">
                        <button class="button is-primary has-text-white" type="submit">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF EDIT TEACHER MODAL -->

<!-- ARCHIVE MODAL -->
<div id="archiveModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <form action="./includes/addStaff/archiveTeacher.php" method="post">
            <input type="hidden" name="IDteacher" id="IDteacher" value="">
            <div class="box modalArchive">
                <span class="icon has-text-danger mb-6">
                    <i class="fa-solid fa-circle-exclamation fa-3x gitna"></i>
                </span>
                <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Are you sure to
                    archive records?</p>
                <div class="columns has-background-white">
                    <div class="column is-10 mt-6 has-background-white">
                        <button class="button is-success has-text-centered">Yes, Archive it</button>
                    </div>
        </form>

    </div>
</div>
</div>
<button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF ARCHIVE MODAL -->


<!-- UPLOAD MODAL -->
<div id="uploadModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box uploadModal">
            <form action="./includes/addStaff/uploadTeacher.php" method="post" enctype="multipart/form-data">
                <div class="columns has-background-white">

                    <div class="column ">
                        <label for="file" class="label">Upload a file</label>
                        <div class="file is-primary">
                            <label class="file-label">
                                <input class="file-input" type="file" name="file" id="file" accept=".csv" />
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                    <span class="file-label has-text-white has-text-weight-semibold">Upload a CSV
                                        file</span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="button is-success" name="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF UPLOAD MODAL -->

<div class="container">
    <div class="column mt-1 ml-3">
        <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Teachers</p>
        <div class="columns mb-6">
            <div class="column is-1"></div>
            <div class="column mt-6">
                <div class="columns">
                    <div class="column is-5"></div>
                    <div class="column">
                        <button class="button is-success js-modal-trigger" data-target="uploadModal">
                            <span class="icon is-small">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                            <span class="has-text-weight-semibold">Upload a CSV file</span>
                        </button>
                    </div>
                    <div class="column">
                        <button class="button is-success js-modal-trigger" data-target="addStudentsModal">
                            <span class="icon is-small">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                            <span class="has-text-black has-text-weight-semibold">Add New Teacher</span>
                        </button>
                    </div>
                </div>
                <table id="teacher" class="table is-hoverable">
                    <thead class="has-text-centered has-background-primary">
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Section</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered">

                    </tbody>
                </table>
            </div>

        </div>
        <div class="columns">
            <div class="column is-9"></div>
            <div class="column">
                <div class="<?php echo $notificationClass; ?>">
                    <button class="delete"></button>
                    <?php echo $errorMessage; ?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>

<script>
    $(document).ready(function () {
        function openModal(idModal) {
            if (idModal) {
                idModal.classList.add('is-active');
            } else {
                console.error('Modal element not found');
            }
        }

        function closeModal($el) {
            $el.classList.remove('is-active');
        }

        // Close notification
        const deleteButton = document.querySelector('.notification .delete');
        const notification = document.querySelector('.notification');

        deleteButton.addEventListener('click', () => {
            notification.classList.toggle('is-invisible');
        });

        function closeAllModals() {
            document.querySelectorAll('.modal').forEach(($modal) => {
                closeModal($modal);
            });
        }

        // Add click event on buttons to open a specific modal
        document.querySelectorAll('.js-modal-trigger').forEach(($trigger) => {
            const modal = $trigger.dataset.target;
            const $target = document.getElementById(modal);

            $trigger.addEventListener('click', () => {
                openModal($target);
            });
        });

        // Add click event on various child elements to close the parent modal
        document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button').forEach(($close) => {
            const $target = $close.closest('.modal');

            $close.addEventListener('click', () => {
                closeModal($target);
            });
        });

        // Add keyboard event to close all modals
        document.addEventListener('keydown', (event) => {
            if (event.key === "Escape") {
                closeAllModals();
            }
        });
        $.ajax({
            url: '../server.php',
            method: 'POST',
            data: { type: 'loadTeachers' },
            success: function (response) {
                if (Array.isArray(response)) {
                    if (response.length > 0) {
                        var table = $('#teacher tbody');
                        table.empty();
                        response.forEach(function (teacher) {
                            var newRow = $('<tr>');
                            newRow.append($('<td>').text(teacher.name));
                            newRow.append($('<td>').text(teacher.username));
                            var buttonCell = $('<td>');
                            var button1 = $('<a>')
                                .addClass('button is-success p-1 js-modal-trigger')
                                .attr('data-target', 'modalTeacherEdit')
                                .attr('data-id', teacher.id)
                                .attr('data-name', teacher.name)
                                .attr('data-username', teacher.username)
                                .html(`
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                            <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                        </svg>
                    `);

                            var button2 = $('<a>')
                                .addClass('button btn-archive is-danger p-1 js-modal-trigger')
                                .attr('data-target', 'archiveModal')
                                .attr('data-id', teacher.id)
                                .html(`
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                            <path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z" fill="#fff" />
                        </svg>
                    `);

                            buttonCell.append(button1).append(button2);
                            newRow.append(buttonCell);
                            table.append(newRow);

                            button1.on('click', function () {
                                const modal = $(this).data('target');
                                const modalTarget = document.getElementById(modal);
                                const teacherID = $(this).data('id');
                                const fullName = $(this).data('name');
                                const userName = $(this).data('username');

                                const nameParts = fullName.trim().split(' ');
                                let lastName = nameParts.length > 1 ? nameParts.pop() : '';
                                let firstName = nameParts.join(' ');

                                $('#teacher-id').val(teacherID);
                                $('#firstName').val(firstName);
                                $('#lastName').val(lastName);
                                $('#userName').val(userName);
                                openModal(modalTarget);
                            });

                            button2.on('click', function () {
                                const modal = $(this).data('target');
                                const modalTarget = document.getElementById(modal);
                                const teacherID = $(this).data('id');
                                $('#IDteacher').val(teacherID);
                                openModal(modalTarget);
                            });
                        });
                    } else {
                        var table = $('#teacher tbody');
                        var noDataRow = $('<tr>').append($('<td colspan="3">').text('No data yet').css('text-align', 'center'));
                        table.append(noDataRow);
                    }
                } else {
                    console.error('Response is not an array:', response);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error loading teachers:', error);
            }
        });
        $.ajax({
            url: './includes/showSections.php',
            type: 'GET',
            success: function (response) {
                const dropdown = $('.select-dropdown');
                dropdown.empty();
                dropdown.append('<option value="">Select Section</option>');
                if (Array.isArray(response) && response.length > 0) {
                    response.forEach(section => {
                        dropdown.append(
                            `<option value="${section.section_name}">${section.section_name}</option>`
                        );
                    });
                } else {
                    dropdown.append('<option value="">No sections available</option>');
                }
            },
            error: function () {
                alert('An error occurred while fetching sections.');
            }
        });
    });
</script>