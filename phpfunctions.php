<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset and empty function</title>
</head>
<body>
    <form action="phpfunctions.php" method="post">
        <label>username: </label><br>
        <input type="text" name="username"><br>
        <label>password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>
<?php
// isset() = Returns TRUE if a variable is declared and not null
// empty() = Returns TRUE if a variable is not declared, false, null, ""


if(isset($_POST['login'])){
    echo "You tried to login <br>";
}

if(isset($_POST['login'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo "Username is missing";
    }
    else{
        echo "Hello {$username} <br>";
    }
}

//this will echo once a user selects the login button above 



$username = "Bart";

// echo isset($username); // output 1, in php 1 = true 

if(isset($username)) {
    echo "This variable is set <br>";
}
else {
    echo "This variable is NOT set";
}
// this is for an isset function and the rules it follows 

$newid = 4567;

// echo empty($newid); //this returns 1/true because the variable is set to null so empty's rule is true
 
if(empty($newid)) {
    echo "This variable is not declared, no new ID.";
 }
 else {
    echo "This variable has been declared, here's the ID {$newid}";
 }


?>