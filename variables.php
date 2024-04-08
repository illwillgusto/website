<?php
echo "Variable = a reusable container that holds data <br>";
$name = "Will"; // set the variable name to my name 
$food = "wings";
$email = "fake123@gmail.com";

$age = 30; // this is an integer, whole numbers 
$users = 5;
$quantity = 10;

// float variables, float - a floating point number, a number that contains a decimal portion 
$gpa = 3.2;
$price = 4.95;

// booleans, like in JS, they either true or false 
$employed = true;
$online = false;
$for_sale = true;

echo " This name was set as a variable in our code editor {$name} <br>";
echo "{$name} loves {$food} <br>";
echo "Your email is {$email} <br>";
echo "You are {$age} years old <br>";

echo "There are {$users} users online right now <br>";
echo "You would like to buy {$quantity} items from our store <br>";

echo "Your gpa is {$gpa} <br>";
echo "Your slice of pizza is \${$price} <br>"; // notice here the \ was used before the $


echo "Online status: {$online} <br>"; // because it is false nothing will be displayed on the web page 

// the syntax for calling a variable is {$variablename}
