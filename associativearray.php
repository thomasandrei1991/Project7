<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Associative Array</title>
    </head>
    <body>
        <form action="associativearray.php" method="post">
            <label for="foods">Foods : </label>
            <input type="text" name="foods">
            <input type="submit">
        </form>
    </body>
</html>
<?php
     /*
        -- Some cammands that we can use to manage array function --

        $foods["Apetizer"] -- Getting the value of foods (Chicken Soup)
        array_pop($foods) --
        array_shift($foods) --
        array_keys($foods) --
        array_values($foods) --
        array_flip()
        array_reverse($fruits) -- use to reverse the possition of array
        echo count($fruits) -- use to identify the length of an array

    */
    $foods = array("Apetizer" => "Chicken Soup", 
                "Main Course" => "Roasted Fried Chicken", 
                "Desert" => "Red Velvet Cake");
    /*
    foreach($foods as $key => $value) {
        echo $key . " - " . $value . "<br>";
    }
    */
    $food = $foods[$_POST["foods"]];
    echo "{$food}";
?>