<?php


  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "businessdb";
  $connection = "";

  try {
    $connection = mysqli_connect($db_server,
    $db_user,
    $db_pass,
    $db_name); // trying some code that might throw an error
  } catch (\Throwable $th) {
    //throw $th;
  } // the 'try block' deals with exception handling

  $connection = mysqli_connect($db_server,
  $db_user,
  $db_pass,
  $db_name);

  if($connection){
    echo "You are connected";
  } else {
    echo "Could not connect, sorry.";
  }
?>
