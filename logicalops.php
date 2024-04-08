<?php
/*Logical operators = combine conditional statements 
if(condition1 && condition2)

&& (and)= True if both conditions are true 
|| (or)= True if at least one condition is true 
! = True if false. False if true. can reverse a condition
*/

$temp = 15;
$cloudy = true;

if($temp >= 0 && $temp <= 30){
    echo "The weather is good. <br>";
}
else{
    echo "The weather is bad. <br>";
}

if(!$cloudy){
    echo "It's cloudy <br>";
}
else{
    echo "It's sunny <br>";
}

$age = 25;
$citizen = true;

if($age >= 18 && $citizen){
    echo "You can vote here in America <br>";
}
else{
    echo "You cannot vote <br>";
}

$child = false;
$senior = false;
$ticket = null;

if($child || $senior){
    $ticket = 10;
}
else{
    $ticket = 15;
}

echo "The ticket price is \${$ticket}";


?>