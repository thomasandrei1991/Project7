<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Isset and Empty</title>
    </head>
    <body>
        <form action="isset-empty.php" method="post">
            <label for="username">Username : </label>
            <input type="text" name="username"> <br><br>
            <label for="password">Password : </label>
            <input type="text" name="password"> <br><br>
            <input type="submit" name="login">
        </form>
    </body>
</html>
<?php
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(empty($username) || empty($password)) {
            echo "Username or Password is missing.";
        }
        else {
            echo"Welcome {$username}";
        }
    }
?>