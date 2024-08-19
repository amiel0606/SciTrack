<?php
    include_once './includes/sidebar.php'
?>
<style>
    body {
  overflow: hidden; /* Hide scrollbars */
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
    --bulma-input-focus-h: 0deg;
    --bulma-input-focus-s: 43%;
    --bulma-input-focus-l: 28%;
    color: #9B9898;
    border: 1px solid #D4D4D4;
    --bulma-input-placeholder-color: hsl(0, 0%, 20%);
}

.addNotification {
    width: 100%;
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
    --bulma-primary-h: 0deg;
    --bulma-primary-s: 49%;
    --bulma-primary-l: 28%;
    --bulma-link-h: 0deg;
    --bulma-link-s: 0%;
    --bulma-link-l: 83%;
}
</style>
<div class="columns">
    <div class="column is-half is-offset-one-quarter">
        <div class="has-background-primary-light py-1 px-2">
            <p class="title has-text-primary has-text-centered has-text-weight-bold mb-6 mt-6">Add an Admin</p>
            <div class="notification is-success addNotification has-text-centered">
            <button class="delete"></button>
                Added Staff Successfully.
            </div>
        </div>
        <form action="./includes/addStaff/addAdmin.php" method="post" id="regForm">
        <div class="field">
                <label class="label is-size-5 has-text-primary" for="firstName">First Name</label>
                <div class="control">
                    <input class="input " type="text" name="firstName" placeholder="Enter First Name">
                </div>
            </div>
            <div class="field">
                <label class="label is-size-5 has-text-primary" for="lastName">Last Name</label>
                <div class="control">
                    <input class="input " type="text" name="lastName" placeholder="Enter Last Name">
                </div>
            </div>
            <div class="field">
                <label class="label is-size-5 has-text-primary" for="username">Username</label>
                <div class="control">
                    <input class="input " type="text" name="username" placeholder="Enter username">
                </div>
            </div>
            <div class="field">
                <label class="label is-size-5 has-text-primary" for="password">Password</label>
                <div class="control">
                    <input class="input" type="password" name="password" placeholder="Enter password">
                </div>
            </div>
            <div class="field">
                <label class="label is-size-5 has-text-primary" for="ConfPassword">Confirm Password</label>
                <div class="control">
                    <input class="input" type="password" name="ConfPassword" placeholder="Confirm password">
                </div>
            </div>
            <input class="button is-primary " type="submit" name="register" value="Register">
        </form>
    </div>
</div>