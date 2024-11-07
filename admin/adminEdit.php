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
<!-- END OF EDIT ROLE MODAL -->


<div class="container">
<div class="column mt-1 ml-3">
    <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Edit Roles</p>
    <div class="columns mb-6">
        <div class="column is-2"></div>
        <div class="column mt-6">
            <div class="columns">
                <div class="column is-9"><button class="button is-primary has-text-white">Assign Role</button></div>
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
                        <th>Members</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="has-text-centered">

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
        conn.send(JSON.stringify({ type: 'loadRoles'}));
        conn.send(JSON.stringify({ type: 'getCountRoles' }));
    };
    conn.onmessage = function (e) {
    var data = JSON.parse(e.data);
    console.log(data);

    if (data.type === 'role') {
        console.log("role");
        var table = document.getElementById('roles').getElementsByTagName('tbody')[0];
        var row = table.insertRow();
        row.insertCell(0).innerText = data.name;
        var membersCell = row.insertCell(1);
        membersCell.innerText = data.members;
        membersCell.classList.add('role-members');
        membersCell.setAttribute('data-role', data.name);

        var actionCell = row.insertCell(2);
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
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 30 30">
            <path d="M 13 3 A 1.0001 1.0001 0 0 0 11.986328 4 L 6 4 A 1.0001 1.0001 0 1 0 6 6 L 24 6 A 1.0001 1.0001 0 1 0 24 4 L 18.013672 4 A 1.0001 1.0001 0 0 0 17 3 L 13 3 z M 6 8 L 6 24 C 6 25.105 6.895 26 8 26 L 22 26 C 23.105 26 24 25.105 24 24 L 24 8 L 6 8 z" fill="#fff"></path>
        </svg>`;
        actionCell.appendChild(editButton);
        actionCell.appendChild(deleteButton);

        editButton.addEventListener('click', () => {
            const modal = editButton.getAttribute('data-target');
            const $target = document.getElementById(modal);
            openModal($target);
        });
        deleteButton.addEventListener('click', () => {
            const modal = deleteButton.getAttribute('data-target');
            const $target = document.getElementById(modal);
            openModal($target);
        });
    }

    if (data.type === 'roleCount') {
        var counts = data.counts;
        Object.keys(counts).forEach(role => {
            var element = document.querySelector(`.role-members[data-role="${role}"]`);
            if (element) {
                element.textContent = counts[role];
            } else {
                console.error(`Element for role "${role}" not found.`);
            }
        });
    }
};

});

</script>