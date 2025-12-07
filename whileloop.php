<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #mySubmit{
                height: 30px;
                width: 100px;
                font-size: 15px;
                color: white;
                background-color: darkcyan;
                border-radius: 10px;
                border-style: none;
            }
            #printname{
                height: 30px;
                width: 200px;
                font-size: 15px;
                color: black;
                font-family: Arial, Helvetica, sans-serif;
                border-radius: 10px;
                border-style: solid;
                border-width: 0.5px;
            }
            label{
                font-family: Arial, Helvetica, sans-serif;
                color: darkcyan;
            }
            
        </style>
        <title>While Loop</title>
    </head>
    <body>
        <form action="whileloop.php" method="post">
            <label>Print Name : </label>
            <input type="text" id="printnumber" name="printnumber"><br><br>
            <input type="submit" id="mySubmit" name="mySubmit" value="Enter">
        </form>
    </body>
</html>
<?php
    $printnumber = $_POST["printnumber"];        
    while($printnumber < 10){
        $printnumber++;
        echo "{$printnumber} <br>";
    }
?>