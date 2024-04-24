<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Learning</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> <!--adding a php script in the action, this key
contains the value of the current file path, php_self is vulnerable to cross-site, to avoid that use htmlspecialchar -->
    username:<br>
    <input type="text" name="username">
    <input type="submit">
  </form>
</body>
</html>

<?php
//  $_SERVER = SGB (Super Global Variable) that contains headers, paths, and script locations.
//             The entires in this array are created by the web server.
//             Shows nearly everything you need to know about the current web page environment.

foreach ($_SERVER as $key => $value) {
  echo"{$key} = {$value} <br>";
}

if ( $_SERVER["REQUEST_METHOD"] == "POST") {
  echo"HELLO";
} //handling post requests
?>
