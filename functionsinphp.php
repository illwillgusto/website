<?php
/*Functions 
write some code once, reuse when you need it 
type () after function name to invoke 
ex. add() subtract() multiply() divide()
 */

function happy_birthday($first_name, $age)
{
    echo "Happy Birthday dear {$first_name}! <br>";
    echo "Happy Birthday to you! <br>";
    echo "Happy Bornday dear {$first_name}! <br>";
    echo "You are {$age} years old! <br>";
}

happy_birthday("Goku", 40); // call a function 


function is_even($number){
    return $result % 2;
}

echo is_even(10);


function hypotenuse($a, $b){
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}

echo hypotenuse(4, 5);
