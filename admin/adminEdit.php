<?php
    include_once './includes/sidebar.php'
?>
<style>
.actions {
    width: 100px;
}

#roles {
    width: 880px;
}

.material-symbols-outlined {
    font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 20
}

.checkboxes {
    width: 300px;
    margin-left: 150px;
}

.columns .checkboxing{
    background-color: #fff;
    width: 350px !important;
}
</style>
<!-- ADD ROLE MODAL -->
<div id="addRoleModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box addRoleModal">
            <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Edit Role</p>
            <form action="./includes/addStaff/editRoles.php" method="post" id="newRoleForm"  enctype="multipart/form-data">
                <div class="field">
                    <div class="control mb-5">
                        <input class="input" type="text" name="roleName" placeholder="Role Name">
                    </div>
                </div>

                <div class="field">
                    <div class="control mb-5">
                        <div class="checkboxes">
                            <div class="columns checkboxing">
                                <div class="column is-half">
                                    <label class="checkbox">
                                        <input type="checkbox" name="addStudent"/>
                                        Add Student
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="removeTeacher"/>
                                        Remove Teacher
                                    </label>
                                    
                                    <label class="checkbox">
                                        <input type="checkbox" name="addTeacher" />
                                        Add Teacher
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="addAdmin" />
                                        Add Admin
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="viewLesson" />
                                        Can View Lessons
                                    </label>
                                    </div>
                                    <div class="column is-half">
                                    <label class="checkbox">
                                        <input type="checkbox"  name="removeStudents" />
                                        Remove Students
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="viewStudents" />
                                        View All Students
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="editRoles" />
                                        Edit Roles
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="removeAdmin" />
                                        Remove Admin
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="assessmentResult" />
                                        Check Assessment Result
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns mt-6">
                    <div class="column has-background-white is-10">
                        <button class="button is-primary has-text-white" name="submit" type="submit" >Confirm</button>
                    </div>
                    <div class="column has-background-white">
                        <button class="button cancel-button">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF ADD ROLE MODAL -->

<!-- EDIT ROLE MODAL -->
<div id="editRoleModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Add New Role</p>
            <form action="./includes/addStaff/editRoles.php" method="post" id="newRoleForm"  enctype="multipart/form-data">
                <div class="field">
                    <div class="control mb-5">
                        <input class="input" type="text" name="roleName" placeholder="Role Name">
                    </div>
                </div>

                <div class="field">
                    <div class="control mb-5">
                        <div class="checkboxes">
                            <div class="columns checkboxing">
                                <div class="column is-half">
                                    <label class="checkbox">
                                        <input type="checkbox" name="addStudent"/>
                                        Add Student
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="removeTeacher"/>
                                        Remove Teacher
                                    </label>
                                    
                                    <label class="checkbox">
                                        <input type="checkbox" name="addTeacher" />
                                        Add Teacher
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="addAdmin" />
                                        Add Admin
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="viewLesson" />
                                        Can View Lessons
                                    </label>
                                    </div>
                                    <div class="column is-half">
                                    <label class="checkbox">
                                        <input type="checkbox"  name="removeStudents" />
                                        Remove Students
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="viewStudents" />
                                        View All Students
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="editRoles" />
                                        Edit Roles
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="removeAdmin" />
                                        Remove Admin
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="assessmentResult" />
                                        Check Assessment Result
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns mt-6">
                    <div class="column has-background-white is-10">
                        <button class="button is-primary has-text-white" name="submit" type="submit" >Confirm</button>
                    </div>
                    <div class="column has-background-white">
                        <button class="button cancel-button">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF EDIT ROLE MODAL -->


<div class="container">
<div class="column mt-1 ml-3">
    <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Edit Roles</p>
    <div class="columns mb-6">
        <div class="column is-2"></div>
        <div class="column mt-6">
            <div class="columns">
                <div class="column is-9"></div>
                <div class="column">
                    <button class="button is-success js-modal-trigger" data-target="addRoleModal">
                        <span class="icon is-small">
                        <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="has-text-weight-semibold">Add New Role</span>
                    </button>
                </div>
            </div>
            <table id="roles" class="table is-hoverable ">
                <thead class="has-text-centered has-background-primary">
                    <tr>
                        <th>Role</th>
                        <th class="actions" >Actions</th>
                    </tr>
                    </thead>
                    <tbody id="roleTableBody" class="has-text-centered">
                        <!-- <td>Admin</td>
                        <td>
                            <a class="button is-success p-1 js-modal-trigger" data-target="editStudentsModal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="button is-danger p-1 js-modal-trigger" data-target="archiveModal">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fff">
                                    <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"/>
                                </svg>
                            </a>
                        </td> -->
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Functions to open and close a modal
    function openModal($el) {
        $el.classList.add('is-active');
    }

    function closeModal($el) {
        $el.classList.remove('is-active');
    }

    function closeAllModals() {
        (document.querySelectorAll('.modal') || []).forEach(($modal) => {
            closeModal($modal);
        });
    }

    // Add a click event on buttons to open a specific modal
    (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
        const modal = $trigger.dataset.target;
        const $target = document.getElementById(modal);

        $trigger.addEventListener('click', () => {
            openModal($target);
        });
    });

    // Add a click event on various child elements to close the parent modal
    (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
        const $target = $close.closest('.modal');

        $close.addEventListener('click', () => {
            closeModal($target);
        });
    });

    // Add a click event specifically for the Cancel button
    (document.querySelectorAll('.cancel-button') || []).forEach(($cancel) => {
        const $target = $cancel.closest('.modal');

        $cancel.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent form submission
            closeModal($target);
        });
    });

    // Add a keyboard event to close all modals
    document.addEventListener('keydown', (event) => {
        if (event.key === "Escape") {
            closeAllModals();
        }
    });

    //WebSocket Connection
    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function (e) {
        console.log("Connection established!");
        conn.send(JSON.stringify({ type: 'loadRoles'}));
    };
    conn.onmessage = function (e) {
        var role = JSON.parse(e.data);
        var table = document.getElementById('roles').getElementsByTagName('tbody')[0];
        var row = table.insertRow();
        console.log(role);
        row.insertCell(0).innerText = role.name;
        var actionCell = row.insertCell(1);
        var editButton = document.createElement('a');
        var deleteButton = document.createElement('a');
        editButton.classList.add('button', 'is-success', 'p-1', 'js-modal-trigger');
        editButton.setAttribute('data-target', 'editRoleModal');
        editButton.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
            <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
        </svg>`;
        deleteButton.classList.add('button', 'is-danger', 'p-1', 'js-modal-trigger');
        deleteButton.setAttribute('data-target', 'archiveModal');
        deleteButton.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fff">
            <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"/>
        </svg>`;
        actionCell.appendChild(editButton);
        actionCell.appendChild(deleteButton);

        editButton.addEventListener('click', () => {
            const modal = editButton.getAttribute('data-target');
            const $target = document.getElementById(modal);
            openModal($target);
        });
        deleteButton.addEventListener('click', () => {
            const modal = editButton.getAttribute('data-target');
            const $target = document.getElementById(modal);
            openModal($target);
        });
    };
});

</script>