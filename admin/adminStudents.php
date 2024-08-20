<?php
    include_once('./includes/sidebar.php');
?>
<style>
    .footer {
    margin-top: 90px;
    --bulma-footer-background-color: hsl(45, 43%, 95%);
    --bulma-footer-padding: 3rem 1.5rem 3rem;
}
.addStudents {
    --bulma-box-background-color: hsl(0, 0%, 100%);
    height: 561px;
    width: 100%;
    font-family: 'InriaSans-Bold';
}

body {
  overflow: hidden; /* Hide scrollbars */
  height: 100vh;
}
body::-webkit-scrollbar {
  display: none;
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

.gitna {
    display: flex;
    justify-content: center;
}


</style>
<!-- ADD STUDENTS MODAL -->
<div id="addStudentsModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box addStudents">
            <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Add New Student</p>
            <form action="./includes/addStaff/uploadStudents.php" method="post" id="addStudentsForm"  enctype="multipart/form-data">
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
                    <div class="control mb-5">
                        <input class="input" type="password" name="password" placeholder="Enter password">
                    </div>
                </div>
                <div class="columns mt-6">
                    <div class="column is-8 has-background-white">
                        <div class="file is-primary">
                            <label class="file-label">
                                <input class="file-input" type="file" name="file" id="file" accept=".csv"/>
                                <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label has-text-white">Upload a CSV file</span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="column has-background-white">
                        <button class="button is-primary has-text-white" name="submit" type="submit" >Confirm</button>
                    </div>
                    <div class="column has-background-white">
                        <button class="button">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF ADD STUDENTS MODAL -->


<!-- EDIT STUDENT MODAL -->
<div id="editStudentsModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box addStudents">
            <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Edit Student's Details</p>
            <form action="" method="post" id="editStudentsForm" >
                <div class="field">
                <label class="label is-size-6 has-text-primary" for="firstName">First Name</label>
                    <div class="control mb-1">
                        <input class="input" type="text" name="firstName" placeholder="Edit First Name">
                    </div>
                </div>
                <div class="field">
                    <label class="label is-size-6 has-text-primary" for="lastName">Last Name</label>
                        <div class="control mb-1">
                            <input class="input " type="text" name="lastName" placeholder="Edit Last Name">
                        </div>
                </div>
                <div class="field">
                    <label class="label is-size-6 has-text-primary" for="userName">Username</label>
                        <div class="control mb-1">
                            <input class="input " type="text" name="userName" placeholder="Edit Username">
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
                        <button class="button is-primary has-text-white" type="submit" >Confirm</button>
                    </div>
                    <div class="column has-background-white">
                        <button class="button">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>

<!-- END OF EDIT STUDENT MODAL -->

<!-- ARCHIVE MODAL -->

<div id="archiveModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box modalArchive">
            <span class="icon has-text-danger mb-6" >
            <i class="fa-solid fa-circle-exclamation fa-3x gitna"></i>
            </span>
        <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6" >Are you sure to archive records?</p>
        <div class="columns has-background-white">
            <div class="column is-10 mt-6 has-background-white">
                <button class="button is-success has-text-centered">Yes, Archive it</button>
            </div>
            <div class="column mt-6 has-background-white">
                <button class="button has-text-centered">Cancel</button>
            </div>
        </div>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>

<!-- END OF ARCHIVE MODAL -->

<div class="container">
<div class="column mt-1 ml-3">
    <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Students</p>
    <div class="columns mb-6">
        <div class="column is-1"></div>
        <div class="column mt-6">
            <div class="columns">
                <div class="column is-7"></div>
                <div class="column">
                    <button class="button is-success js-modal-trigger" data-target="addStudentsModal">
                        <span class="icon is-small">
                        <i class="fa-solid fa-plus"></i>
                        </span>
                        <span>Add New Student</span>
                    </button>
                </div>
            </div>
            <table class="table is-hoverable ">
                <thead class="has-text-centered has-background-primary">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="has-text-centered">
                    <tr>
                        <th>1</th>
                        <td>Amiel Carhyl Lapid</td>
                        <td>amiel06</td>
                        <td>
                            <a class="button is-success p-1 js-modal-trigger" data-target="editStudentsModal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="button is-danger p-1 js-modal-trigger" data-target="archiveModal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                                    <path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z" fill="#fff" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Amiel Carhyl Lapid</td>
                        <td>amielss</td>
                        <td>
                            <a class="button is-success p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="button is-danger p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                                    <path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z" fill="#fff" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Amiel Carhyl Lapid</td>
                        <td>amielss</td>
                        <td>
                            <a class="button is-success p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="button is-danger p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                                    <path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z" fill="#fff" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Amiel Carhyl Lapid</td>
                        <td>amielss</td>
                        <td>
                            <a class="button is-success p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="button is-danger p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                                    <path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z" fill="#fff" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>Amiel Carhyl Lapid</td>
                        <td>amielss</td>
                        <td>
                            <a class="button is-success p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="button is-danger p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                                    <path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z" fill="#fff" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td>Amiel Carhyl Lapid</td>
                        <td>amielss</td>
                        <td>
                            <a class="button is-success p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="button is-danger p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                                    <path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z" fill="#fff" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>7</th>
                        <td>Amiel Carhyl Lapid</td>
                        <td>amielss</td>
                        <td>
                            <a class="button is-success p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="button is-danger p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                                    <path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z" fill="#fff" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="columns">
        <div class="column is-9"></div>
        <div class="column">
        <div class="notification is-success addNotification has-text-centered">
            <button class="delete"></button>
                Added Student Successfully.
        </div>
        </div>
    </div>

</div>

</div>
</div>
<script src="./js/script.js"></script>
