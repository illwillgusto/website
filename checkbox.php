<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="cheeseburger" value="Cheeseburger">Cheeseburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">Taco<br>
        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {

    if (isset($_POST["pizza"])) {
        echo "You like pizza, we see! <br>";
    }
    if (isset($_POST["cheeseburger"])) {
        echo "You like cheeseburgers, we see!<br>";
    }
    if (isset($_POST["hotdog"])) {
        echo "You like hotdogs, we see!<br>";
    }
    if (isset($_POST["taco"])) {
        echo "You like tacos, we see!<br>";
    }
}
?>