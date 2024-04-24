<?php
include("database.php");

$username = "Gohan";
$password = "Pan";

$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$password')";


try {
  mysqli_query($connection, $sql);
  echo "User is now registered.";
} catch (mysqli_sql_exception) {
  echo "Could not register user";
}

mysqli_close($connection);
?>
