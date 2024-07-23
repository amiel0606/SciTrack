<?php
    include_once('./includes/sidebar.php');
?>

    <div class="aTeacher-container">
        <h1>Teachers</h1>
        <div class="cont">
            <div class="addNewTeacher">
                <img src="./image/plus.png" alt="">
                <h5>Add New Teacher</h5>
            </div>
            <div class="tbl">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Subject</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>Teacher 1</td>
                        <td>teacher1</td>
                        <td>Science</td>
                        <td>
                            <div class="box-actions">
                                <img src="./image/edit.png" alt="edit">
                            </div>
                            <div class="box-actions">
                                <img src="./image/archive.png" alt="arc">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Teacher 2</td>
                        <td>teacher2</td>
                        <td>Science</td>
                        <td>
                            <div class="box-actions">
                                <img src="./image/edit.png" alt="edit">
                            </div>
                            <div class="box-actions">
                                <img src="./image/archive.png" alt="arc">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Teacher 3</td>
                        <td>teacher1</td>
                        <td>Science</td>
                        <td>
                            <div class="box-actions">
                                <img src="./image/edit.png" alt="edit">
                            </div>
                            <div class="box-actions">
                                <img src="./image/archive.png" alt="arc">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Teacher 4</td>
                        <td>teacher4</td>
                        <td>Science</td>
                        <td>
                            <div class="box-actions">
                                <img src="./image/edit.png" alt="edit">
                            </div>
                            <div class="box-actions">
                                <img src="./image/archive.png" alt="arc">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Teacher 5</td>
                        <td>teacher5</td>
                        <td>Science</td>
                        <td>
                            <div class="box-actions">
                                <img src="./image/edit.png" alt="edit">
                            </div>
                            <div class="box-actions">
                                <img src="./image/archive.png" alt="arc">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Teacher 6</td>
                        <td>teacher6</td>
                        <td>Science</td>
                        <td>
                            <div class="box-actions">
                                <img src="./image/edit.png" alt="edit">
                            </div>
                            <div class="box-actions">
                                <img src="./image/archive.png" alt="arc">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="bg-modal">
        <div class="form-addNew">
            <div class="close">+</div>
            <h2>Add New Teachers</h2>
            <form>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                
                <input type="file" id="fileInput" name="fileInput">
                <div class="button-container">
                    <button type="button" id="uploadButton">Attach File</button>
                    <button type="submit">Confirm</button>
                </div>
            </form>
        </div>

        <div class="form-edit">
            <div class="close">+</div>
            <h2>Edit Teacher Information</h2>
            <form>
                <label for="editFirstName">First Name</label>
                <input type="text" id="editFirstName" name="editFirstName">
                <label for="editLastName">Last Name</label>
                <input type="text" id="editLastName" name="editLastName">
                <label for="editUsername">Username</label>
                <input type="text" id="editUsername" name="editUsername">
                <label for="editPassword">Password</label>
                <input type="password" id="editPassword" name="editPassword">
                <button type="submit" id="updateButton">Update</button>
            </form>
        </div>

        <div class="form-arc">
            <div class="close">+</div>
            <img src="./image/warning.png" alt="Warning" class="warning-image">
            <h2>Are you sure?</h2>
            <div class="button-container">
                <button type="button" id="archiveButton">Yes, archived it!</button>
                <button type="button" id="cancelButton">Cancel</button>
            </div>
        </div>
    </div>

<script src="js/aTeacher.js"></script>