<?php
session_start();

$usernameError=$_SESSION["usernameErr"] ??"";
$nameError=$_SESSION["nameErr"] ??"";
$emailError=$_SESSION["emailErr"] ??"";
$numberError=$_SESSION["numberErr"] ??"";



unset($_SESSION["usernameErr"]);
unset($_SESSION["nameErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["numberErr"]);


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="post" action="../Controller/formValidation.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="" placeholder="Enter username" /></td>

                <td><?php echo "$usernameError";?></td>

            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="" placeholder="Enter Name"/></td>
                <td><?php echo "$nameError";?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" placeholder="Enter Email" /></td>
                <td><?php echo "$emailError";?></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="number" id="" placeholder="Enter Number" /></td>
                <td><?php echo "$numberError";?></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>

</body>

</html>