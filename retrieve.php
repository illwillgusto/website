<?php
include('database.php');


$sql = "SELECT * FROM users WHERE users = 'Goku'"; //this is telling us what we are selecting, from where and what

mysqli_close($connection);
?>
