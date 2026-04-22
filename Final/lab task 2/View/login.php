<?php
session_start();
$usernameError=$_SESSION["usernameErr"] ?? "";
$emailError=$_SESSION["emailErr"] ?? "";
$passwordError=$_SESSION["passwordErr"] ?? "";
$confirmPasswordError=$_SESSION["confirmPasswordErr"] ?? "";


$username=$_SESSION["username"] ?? "";
$email=$_SESSION["email"] ?? "";
$password=$_SESSION["password"] ?? "";

$confirmPassword=$_SESSION["confirmPassword"] ?? "";


unset($_SESSION["username"]) ;
unset($_SESSION["email"]) ;
unset($_SESSION["password"]) ;
unset($_SESSION["confirmPassword"]) ;


unset($_SESSION["usernameErr"]) ;
unset($_SESSION["emailErr"]) ;
unset($_SESSION["passwordErr"]) ;
unset($_SESSION["confirmPasswordErr"]) ;


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="post" action="../Controller/loginValidation.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Enter username"value="<?php echo $username; ?>"required/></td>
                <td><?php echo "$usernameError"; ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>" required/></td>
                <td><?php echo "$emailError"; ?></td>
            </tr>


            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Enter password" value="<?php echo $password; ?>" required/></td>
                <td><?php echo "$passwordError"; ?></td>
            </tr>

            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirmPassword" placeholder="Confirm password" value="<?php echo $confirmPassword; ?>" required/></td>
                <td><?php echo "$confirmPasswordError"; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name=""submit/></td>
            </tr>
        </table>
    </form>

</body>

</html>