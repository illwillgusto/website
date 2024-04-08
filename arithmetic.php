<?php
//Arithmetic operators
// + - * / ** %

$x = 10;
$y = 2;
$z = null;

// $z = $x + $y; 12, addition
// $z = $x - $y; 8, subtraction 
// $z = $x * $y; 20, multiply
// $z = $x / $y; 5, division 
// $z = $x ** $y; 100, 10 to the power of 2 
$z = $x % $y; // 0, the remainder or modulus 

echo $z;



// Increment/decrement operators 
// ++, --

$counter = 10;

// $counter++; //increment 
// $counter--; decrement

echo $counter;


// Operator Precedence 
// ()
// **
// * / %
//  + -

$total = 1 + 2 - 3 * 4 / 5 ** 6;

echo $total;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Learning in PHP</title>
</head>

<body>
    <br>
    <a href="index.php">Home</a>
</body>

</html>