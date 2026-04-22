<?php
session_start();

$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$confirmPassword = $_POST["confirmPassword"] ?? "";


$hasUsernameError=true;
$hasEmailError=true;
$hasPasswordError=true;
$hasConfirmPasswordError = true;


if (strlen($username) < 3) {
    $_SESSION["usernameErr"] = "Username must be min 3 character";
    $hasUsernameError = true;

} else {
    unset($_SESSION["usernameErr"]);
    $hasUsernameError = false;
}



if (strlen($password) < 6) {
    $_SESSION["passwordErr"] = "password must be min 6 character";
    $hasPasswordError = true;

} else {
    unset($_SESSION["passwordErr"]);
    $hasPasswordError = false;
}

if($password != $confirmPassword) {
    $_SESSION["confirmPasswordErr"] = "password  not match";
    $hasConfirmPasswordError = true;
}
else{
    unset($_SESSION["confirmPasswordErr"]);
    $hasConfirmPasswordError = false;

}


if ($hasUsernameError || $hasEmailError || $hasPasswordError || $hasConfirmPasswordError) {

    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["confirmPassword"] = $confirmPassword;

    Header("Location: ../View/login.php");

}
?>