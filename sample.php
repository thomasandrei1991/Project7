<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sample Code</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            body h3 {
                text-align: center;
            }
            .form-container {
                margin-top: 100px;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 500px;
                width: 350px;
                background-color: transparent;
                border-style: solid;
                border-width: 2.5px;
                border-radius: 10px;
                border-color: black;
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <h3>Registration Form</h3>
            <form action="sample.php" method="post">
                <div>
                    <label for="firstname">Fristname :</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
            </form>
        </div>
    </body>
</html>
<?php

?>