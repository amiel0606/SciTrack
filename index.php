<?php
    include_once('./includes/header.php');
?>
<style>
:root {
    --bulma-primary-h: 310deg;
    --bulma-primary-s: 41%;
    --bulma-primary-l: 39%;
    --bulma-info-h: 270deg;
    --bulma-info-s: 79%;
    --bulma-info-l: 83%;
    --bulma-link-h: 0deg;
}

.input {
    height: 45px;
    --bulma-input-focus-h: 310deg;
    --bulma-input-focus-s: 63%;
    --bulma-input-focus-l: 39%;
}

</style>
<div class="container">
    <div class="columns">
    <div class="column is-7"></div>

    <div class="column is-5">
        <div class="box has-background-info has-text-centered is-flex-direction-column is-justify-content-center p-3" style="margin-top: 220px;">
        <h3 id="title" class="is-size-1 has-text-white has-text-weight-bold mb-6 mt-6">LOGIN</h3>
        <form action="" method="post" id="loginForm">
            <div class="field">
            <label class="label is-size-5 has-text-white" for="username">Username</label>
            <div class="control">
                <input class="input " type="text" name="userName" placeholder="Enter your username">
            </div>
            </div>
            <div class="field">
            <label class="label is-size-5 has-text-white" for="password">Password</label>
            <div class="control">
                <input class="input" type="password" name="password" placeholder="Enter your password">
            </div>
            </div>
            <input class="button is-primary " type="submit" name="Login" value="Login">
            </div>
        </form>
        </div>
    </div>
    </div>
</div>