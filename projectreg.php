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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // filter for any malicious scripts
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // checking if any of the 2 register fields are empty
  if (empty($username)) {
    echo "Please enter a username.";
  } elseif (empty($password)) {
    echo "Please enter a password";
  }
  else {
    $hash = password_hash($password, PASSWORD_DEFAULT); // security measures to hash the password when sent to the db
    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')"; //query
    //exception handling
    try {
      mysqli_query($connection, $sql);// initiate the query
      echo "You are now registered!";
    } catch (mysqli_sql_exception)
         {
      echo "That username is taken.";
    }
  }
}

  mysqli_close($connection);
?>
