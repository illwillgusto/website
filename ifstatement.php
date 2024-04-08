<?php
// if statement = if some condition is true, do something
//                if condition is false, don't do it 

$age = 101;

if ($age >= 18) {
    echo "You may enter this site <br>";
} elseif ($age <= 0) {
    echo "That wasn't a valid age";
} else {
    echo "You must be 18+ to enter";
}


$adult = true;

if ($adult){
    echo "Welcome to this site <br>";
} else{
    echo "You must be an adult to be here";
}

$hours = 40;
$rate = 45;
$weekly_pay = null;

if($hours <= 40){
    $weekly_pay = $hours * $rate;
}
else {
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate));
}

echo "You made \${$weekly_pay} this week";
// checking the variable for it to be greater than or equal to 18, if it is true the echo code will be executed and displayed on the page 
