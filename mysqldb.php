<?php
include("database.php");

$sql = "INSERT INTO users (user, password)
        VALUES ('Goku', 'password1')";

mysqli_query($connection, $sql);

mysqli_close($connection);
?>
