<?php
/*Sessions in PHP
SGB used to store information on a user to be used across multiple pages.
A user is assigned a session-id
ex. login credentials 
*/

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    This is the login page<br>
    <a href="home.php">This goes to the home page</a><br>
</body>
</html>

<?php
     $_SESSION["username"] = "Will";
     $_SESSION["password"] = "gusto1234";
 
     echo $_SESSION["username"] . "<br>";
     echo $_SESSION["password"] . "<br>";
?>