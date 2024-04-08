<?php
echo "Variable = a reusable container that holds data <br>";
$name = "Will"; // set the variable name to my name 
$food = "wings";
$email = "fake123@gmail.com";

$age = 30; // this is an integer 
$users = 5;
$quantity = 10;

echo " This name was set as a variable in our code editor {$name} <br>";
echo "{$name} loves {$food} <br>";
echo "Your email is {$email} <br>";
echo "You are {$age} years old <br>";

echo "There are {$users} users online right now <br>";
echo "You would like to buy {$quantity} items from our store <br>";
// the syntax for calling a variable is {$variablename}
