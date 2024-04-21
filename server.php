<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Learning</title>
</head>
<body>
  <form action="server.php" method="post">
    username:<br>
    <input type="text" name="username">
    <input type="submit">
  </form>
</body>
</html>

<?php
//  $_SERVER = SGB that contains headers, paths, and script locations.
//             The entires in this array are created by the web server.
//             Shows nearly everything you need to know about the current web page environment.
/*
foreach ($_SERVER as $key => $value) {
  echo"{$key} = {$value} <br>";
}
*/
?>
