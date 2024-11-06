<?php
if (isset($_POST["register"])) {
    $Fname = $_POST["firstName"];
    $Lname = $_POST["lastName"];
    $UserName = $_POST["username"];
    $password = $_POST["password"];
    $ConfPassword = $_POST["ConfPassword"];
    $role = 'Admin';

    require_once '../../../includes/functions.php';
    require_once '../dbCon.php';

    if (emptyInputSignup($Fname,$Lname,$role,$UserName,$password,$ConfPassword) !== false) {
        header("location: ../../adminRegister.php?error=EmptyInput");
        exit();
    }
    if (passMatch($password,$ConfPassword) !==false) {
        header("location: ../../adminRegister.php?error=PassNotMatching");
        exit();
    }
    if (InvalidUser($UserName) !== false) {
        header("location: ../../adminRegister.php?error=InvalidUsername");
        exit();
    }
    if (userExist($conn,$UserName) !== false) {
        header("location: ../../adminRegister.php?error=UsernameTaken");
        exit();
    }
    createUser($conn,$UserName,$Lname,$Fname,$role,$ConfPassword);
}
else {
    header("location: ../../adminRegister.php?error=Success");
    exit();
}