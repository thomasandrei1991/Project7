<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkbox</title>
    </head>
    <body>
        <form action="checkbox.php" method="post">
            <input type="checkbox" name="hotdog" value="Hotdog">Hotdog <br>
            <input type="checkbox" name="cheesedog" value="Cheesedog">Cheesedog <br>
            <input type="checkbox" name="ham" value="Ham">Ham <br>
            <input type="checkbox" name="bacon" value="Bacon">Bacon <br>
            <input type="submit" name="submit" value="Enter">
        </form>
    </body>
</html>
<?php
    if(isset($_POST["submit"])) {
        if(isset($_POST["hotdog"])) {
            echo "You choose hotdog . <br>";
        }
        if(isset($_POST["cheesedog"])) {
            echo "You choose cheesedog . <br>";
        }
        if(isset($_POST["ham"])) {
            echo "You choose ham . <br>";
        }
        if(isset($_POST["bacon"])) {
            echo "You choose bacon . <br>";
        }

        // If you select none of that : 

        if(empty($_POST["hotdog"])) {
            echo "You not choose hotdog . <br>";
        }
        if(empty($_POST["cheesedog"])) {
            echo "You not choose cheesedog . <br>";
        }
        if(empty($_POST["ham"])) {
            echo "You not choose ham . <br>";
        }
        if(empty($_POST["bacon"])) {
            echo "You not choose bacon . <br>";
        }
        
    }
?>