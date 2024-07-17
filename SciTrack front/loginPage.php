<?php
    include_once('./includes/style.php');
?>
<div class="container">
    <img class= "bground" src="./image/bg.png" alt="">
    <div class="box form-box" id="loginWrap">
            <h3>LOGIN</h3>
            <form action="" method="post" id="loginForm">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="Username" placeholder="Username">
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="loginbtn">
                    <input type="submit" name="Login" value="Login"></input>
                </div>
            </form>
        </div>
</div>