<?php


  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "businessdb";
  $connection = "";

  $connection = mysqli_connect($db_server,
  $db_user,
  $db_pass,
  $db_name);

  if($connection){
    echo "You are connected";
  }
?>