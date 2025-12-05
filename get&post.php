<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get and Post</title>
    </head>
    <body>
        <form action="get&post.php" method="post">
            <label for="username">username :</label>
            <input type="text" name="username"><br><br>
            <label for="password">password :</label>
            <input type="password" name="password"><br><br>
            <input type="submit" value="login">
        </form>
    </body>
</html>
<?php
    echo "Username : {$_POST["username"]} <br>";
    echo "Password : {$_POST["password"]} <br>";
?>
