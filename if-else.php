<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>If Else Statement</title>
    </head>
    <body>
        <form action="controlflow.php" method="post">
            <label>Fistname : </label>
            <input type="text" name="firstname"> <br><br>
            <label>Lastname : </label>
            <input type="text" name="lastname"><br><br>
            <label>Age : </label>
            <input type="text" name="age"><br><br>
            <label>Course : </label>
            <input type="text" name="course"><br><br>
            <input type="submit">
        </form>
    </body>
</html>
<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $course = $_POST["course"];

    if($age < 18 || $age > 100){
        echo "Unable to vote or overaged";
    }
    else if($age >= 18){
        echo "Qualified to vote";
    }
    else{
        echo "Not a voters";
    }

?>