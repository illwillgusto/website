<?php
include("database.php");


$sql = "SELECT * FROM users"; //this is telling us what we are selecting, from where and what
$result = mysqli_query($connection, $sql); // this function will return an object

// finding out how many rows are in a query we will use an if statement
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
     echo $row['id'] . "<br>";
     echo $row['user'] . "<br>";
     echo $row['reg_date'] . "<br>";
  }; //this function returns the next available row within our object

} else {
  echo "No user found"; // this will appear if a user entered isn't in our db
}

mysqli_close($connection);
?>
