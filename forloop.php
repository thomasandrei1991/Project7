<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <form action="forloop.php" method="post">
        <label>Fullname : </label>
        <input type="text" name="fullname">
        <input type="submit" value="Enter Name">
    </form>
</body>
</html>
<?php
    $fullname = $_POST["fullname"];
    $repeat = 10;

    for($repeatname = 0; $repeatname <= $repeat; $repeatname++){
        echo "{$fullname} <br>";
    }
?>