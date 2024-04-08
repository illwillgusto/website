<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize and Validate User Input in Php</title>
</head>
<body>
    <form action="sanitizevalidate.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        Age <br>
        <input type="text" name="age"><br>
        Email <br>
        <input type="email" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){

        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // //this stops viruses from being entered in the input field the filter function and argument 


        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);


        echo "Hello {$username}";
    }
?>