<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST variables</title>
</head>

<body>
    <form action="getandpost.php" method="get">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in"><br>
    </form> <br>
    <form action="getandpost.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in"><br>
    </form>
</body>

</html>

<?php
echo "{$_GET["username"]} <br> ";
echo "{$_GET["password"]} <br>"; // when using the GET method adding the {} and "" along with the <br> gives cleaner code and line breaks 
// the syntax for what you want to get from a form is $_GET["what you want to get goes here"];
// the problem with GET is any information sent over to php is appended to the url, no security
echo "{$_POST["username"]} <br> ";
echo "{$_POST["password"]} <br>";
// the sensitive information doesn't appear in the URL 

/*
$_GET, $_POST = special variables used to collect data from an HTML form
data is sent to the file in the action attribute of <form>
<form action="some_file.php" method="get">

$_GET = Data is appended to the url 
        NOT SECURE
        char limit
        Bookmark is possible w/ values
        GET requests can be cached 
        Better for a search page 


$_POST = Data is packed inside the body of the HTTP request
        More SECURE
        No data limit 
        Cannot bookmark 
        GET requests are not cached 
        Better for submitting credentials 
*/


?>