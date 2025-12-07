<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Switch</title>
    </head>
    <body>
        <form action="switch.php" method="post">
            <h2>Calculator</h2>
            <label>First Number : </label>
            <input type="text" name="firstnumber"><br><br>
            <label>Operator : </label>
            <input type="text" name="operator"><br><br>
            <label>Second Number : </label>
            <input type="text" name="secondnumber"><br><br>
            <input type="submit" value="=">
        </form>
    </body>
</html>
<?php
    $firstnumber = $_POST["firstnumber"];
    $operator = $_POST["operator"];
    $secondnumber = $_POST["secondnumber"];
    $total = null;

    switch($operator){
        case "+":
            $total = $firstnumber + $secondnumber;
            echo "Total = {$total}";
            break;
        case "-":
            $total = $firstnumber - $secondnumber;
            echo "Total = {$total}";
            break;
        case "*":
            $total = $firstnumber * $secondnumber;
            echo "Total = {$total}";
            break;
        case "/":
            if($firstnumber == 0 || $secondnumber == 0){
                echo "cannot divide into zero.";
            }
            else{
                $total = $firstnumber / $secondnumber;
                echo "Total = {$total}";
            }
            break;           
        default:
             echo "Invalid Inputs.";
             break;
    }
?>
