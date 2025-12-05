<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get and Post</title>
        <!--
        <style>
            body{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .forms{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 500px;
                width: 1000px;
                background-color: gray;
                gap: 100px;
                border-radius: 20px;
            }
            .form1{
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 20px;
                height: 300px;
                width: 300px;
                background-color: aqua;
            }
            .form2{
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 20px;
                height: 300px;
                width: 300px;
                background-color: aqua;
            }
        </style>
-->
    </head>
    <body>
        <div class="forms">
            <div class="form1">
                <form action="get&post.php" method="post">
                    <label for="username">username :</label>
                    <input type="text" name="username"><br><br>
                    <label for="password">password :</label>
                    <input type="password" name="password"><br><br>
                    <input type="submit" value="login">
                </form>
            </div>      
            <div class="form2">
                <form action="get&post.php" method="post">
                    <label for="firstnumber">First Number :</label>
                    <input type="text" name="firstnumber"><br><br>
                    <label for="operator">Operator :</label>
                    <input type="text" name="operator"><br><br>
                    <label for="secondnumber">Second Number :</label>
                    <input type="text" name="secondnumber"><br><br>
                    <input type="submit" value="ADD"><br><br>
                </form>
                <hr>
            </div> 
        </div> 
    </div>
    <?php
        $num1 = $_POST["firstnumber"];
        $num2 = $_POST["secondnumber"];
        $operator = $_POST["operator"];
        $total = null;

        if ($operator == "+") {
            $total = $num1 + $num2;
            echo "Total : {$total}";
        }
        else if ($operator == "-") {
            $total = $num1 - $num2;
            echo "Total : {$total}";
        }
        else if ($operator == "*") {
            $total = $num1 * $num2;
            echo "Total : {$total}";
        }
        else if ($operator == "/") {
            $total = $num1 / $num2;
            echo "Total : {$total}";
        }

        //echo "Username : {$_POST["username"]} <br>";
        //echo "Password : {$_POST["password"]} <br>";
    ?>
    </body>
</html>
