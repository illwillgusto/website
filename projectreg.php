<?php
include("database.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <h2>Welcome to Fakebook</h2>
      username:<br>
      <input type="text" name="username" placeholder="username"><br>
      password:<br>
      <input type="password" name="password" placeholder="password"><br>
      <input type="submit" name="submit" value="register">
  </form>
</body>
</html>
<?php
  mysqli_close($connection);
?>
