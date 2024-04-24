<?php
include('database.php');


$sql = "SELECT * FROM users WHERE users = 'Goku'"; //this is telling us what we are selecting, from where and what
mysqli_query($connection, $sql); // this function will return an object 


mysqli_close($connection);
?>
