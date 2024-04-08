<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Exercise</title>
</head>

<body>
    <form action="associativearray.php" method="post">
        <label>Enter a Country</label> <br>
        <input type="text" name="country"> <br>
        <input type="submit">
    </form>
</body>

</html>


<?php
/*Associative Array
An array made of key=>value pairs
countries => capitals
id => username
item => price  

*/

$capitals = array(
    "USA" => "Washington D.C",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

$capital = $capitals[$_POST["country"]];

echo "This capital is {$capital}.";

// $capitals["USA"] = "Chicago"; // this allows you to change the key value pair 
// $capitals["China"] = "Beijing"; // add a new key value pair 
// array_pop($capitals); //removed the last value key pair in the array
// array_shift($capitals); //shift function removes the first key value pair in the array 

// foreach ($capitals as $key => $value) {
//     echo "{$key} {$value} <br>";
// }
// this foreach method allows you to loop through all the key value pairs in the associative array 
