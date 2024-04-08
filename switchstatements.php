<?php
/*Switch Statements 
replacement to using many elseif statements, more efficient, less code to write just like in JS */


$grade = "B";

switch ($grade) {
    case "A":
        echo "You did great <br>";
        break;
    case "B":
        echo "You did good <br>";
        break;
    case "C":
        echo "You did okay <br>";
        break;
    case "D":
        echo "You did poorly <br>";
        break;
    case "F":
        echo "You failed <br>";
        break;
    default:
        echo "{$grade} is not valid <br>";
}

$date = date("l");

$date = "Thursday";

switch ($date) {
    case "Monday":
        echo "Monday's are so bad";
        break;
    case "Tuesday":
        echo "It's Taco Tuesday";
        break;
    case "Wednesday":
        echo "It's hump day!";
        break;
    case "Thursday":
        echo "It's Friday Junior.";
        break;
    case "Friday":
        echo "Wrap up the work in the office";
        break;
}

// you need the break statement to break out of the switch, this will prevent executing all the statements 