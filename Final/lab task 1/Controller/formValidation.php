<?php
session_start();
$username=$_POST["username"] ??"";
$name=$_POST["name"] ??"";
$email=$_POST["email"] ??"";
$number=$_POST["number"] ??"";

$hasUsernameError = true;
$hasNameError = true;
$hasEmailError = true;
$hasNumberError = true;





if(!$username){
    $_SESSION["usernameErr"] = "Username is required";
    $hasUsernameError = true;
}else{
    unset($_SESSION["usernameErr"]);
    $hasUsernameError = false;
}

if(!$name){
    $_SESSION["nameErr"] = "name is required";
    $hasNameError = true;
}else{
    unset($_SESSION["nameErr"]);
    $hasNameError = false;
}

if(!$email){
    $_SESSION["emailErr"] = "Email is required";
    $hasEmailError = true;
}else{
    unset($_SESSION["emailErr"]);
    $hasEmailError = false;
}

if(!$number){
    $_SESSION["numberErr"] = "Number is required";
    $hasNumberError = true;
}else{
    unset($_SESSION["numberErr"]);
    $hasNumberError = false;
}

if($hasUsernameError || $hasNameError || $hasEmailError || $hasNumberError){
    $_SESSION["username"] = $username;
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["number"] = $number;
    Header("Location: ../View/form.php");
}


?>