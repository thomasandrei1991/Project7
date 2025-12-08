<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Radio button</title>
    </head>
    <body>
        <form action="radiobutton.php" method="post">
            <input type="radio" name="ID" value="Driver's License"> Driver's License <br>
            <input type="radio" name="ID" value="Voter's ID"> Voter's ID <br>
            <input type="radio" name="ID" value="Passport"> Passport <br>
            <input type="submit" name="confirm" value="confirm">
        </form>
    </body>
</html>
<?php
    if(isset($_POST["confirm"])) {
        $ID = null;
        if(isset($_POST["ID"])) {
            $ID = $_POST["ID"];
            echo "You selected {$ID}";
        }
        else{
            echo "Please Select ID.";
        }
    }
?>