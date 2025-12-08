<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>
<?php
    /*
        -- Some cammands that we can use to manage array function --

        $fruits[0] = "Calamansi"; -- use to change the value of fruits index
        array_push($fruits, "Orange") -- use to add another fruits or value on the last part of the array
        array_pop($fruits) -- the opposite of array_push, remove the last part of the array
        array_shift($fruits) -- remove the first part of array
        array_reverse($fruits) -- use to reverse the possition of array
        echo count($fruits) -- use to identify the length of an array


    */
    $fruits = array("Mango", "Banana", "Apple", "Grapes", "Orange");

    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] ."<br>";
    }
?>