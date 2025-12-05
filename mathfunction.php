<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Math Function</title>
    </head>
    <body>
        <form action="mathfunction.php" method="post">
            <label for="firstnumber">First Number : </label>
            <input type="text" name="firstnumber"> <br><br>
            <label for="secondnumber">Second Number : </label>
            <input type="text" name="secondnumber"> <br><br>
            <label for="thirdnumber">Third Number : </label>
            <input type="text" name="thirdnumber"><br><br>
            <input type="submit" value="Enter">
        </form>
    </body>
</html>
<?php

    // abs() - Absolute value of a number
    // round() - Rounding off numbers
    // floor() - Always rounding down number
    // ceil() - Always rounding up numbers
    // power() - Race to the number power
    // sqrt() - Find the squareroot of numbers
    // max() - Give the greatest or highest value of numbers
    // min() - Give the lowest value of a numbers
    // pi() -
    // rand() - Gives random numbers
    

    $num1 = $_POST["firstnumber"];
    $num2 = $_POST["secondnumber"];
    $num3 = $_POST["thirdnumber"];
    $total = null;

    $total = abs($num1);
    echo "Total = {$total}";

?>