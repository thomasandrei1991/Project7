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
                min-height: 100vh;
                margin: 0;
            }
            body h3 {
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
            }
            form {
                display: flex;
                flex-direction: column;
                gap: 15px;
                width: 100%;
                align-items: center;
            }
            .form-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 400px;
                max-width: 90vw;
                background-color: transparent;
                border-style: solid;
                border-width: 2.5px;
                border-radius: 10px;
                border-color: black;
                box-shadow: 3px;
                padding: 20px;
            }
            /* consolidated label styling below */
            .form-container form div {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 6px;
            }
            .form-container form h3 {
                width: 100%;
                text-align: center;
                margin: 0 0 8px;
            }
            .form-container label {
                display: block;
                width: 80%;
                max-width: 320px;
                margin: 0 auto;
                text-align: left;
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type="text"],
            input[type="date"],
            input[type="number"],
            input[type="email"] {
                display: block;
                width: 80%;
                max-width: 320px;
                margin: 0;
                padding: 8px;
                box-sizing: border-box;
            }
            button {
                display: block;
                width: 80%;
                max-width: 320px;
                margin: 10px auto 0;
                padding: 8px 16px;
                box-sizing: border-box;
                text-align: center;
            }
            input[type="radio"] {
                margin: 0 8px 0 0;
                flex-shrink: 0;
            }
            .form-container form div h3 {
                width: 80%;
                max-width: 320px;
                margin: 0 auto 6px;
                text-align: center;
                font-size: 14px;
            }
            .radio-group {
                display: flex;
                gap: 40px;
                justify-content: flex-start;
                align-items: center;
                flex-direction: row;
                width: auto;
                max-width: none;
                margin: 0;
            }
            .sex-container {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 10px;
                width: auto;
                max-width: none;
                margin: 0;
                align-self: flex-start;
            }
            .sex-container span {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
                font-weight: bold;
            }
            .radio-group label {
                width: auto;
                max-width: none;
                margin: 0;
                text-align: left;
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 6px;
            }
           
        </style>
    </head>
    <body>
        <div class="form-container">
            <form action="sample.php" method="post">
                <h3>Registration Form</h3>
                <div>
                    <label for="firstname">Firstname:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div>
                    <label for="lastname">Lastname:</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
                <div>
                    <label for="birthdate">Birthdate:</label>
                    <input type="date" id="birthdate" name="birthdate">
                </div>
                <div>
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" min="0">
                </div>
                 <div class="sex-container">
                    <span>Sex</span>
                    <div class="radio-group">
                        <label for="male">
                            <input type="radio" id="male" name="sex" value="Male">
                            Male
                        </label>
                        <label for="female">
                            <input type="radio" id="female" name="sex" value="Female">
                            Female
                        </label>
                    </div>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="buttons"> 
                    <button type="submit">Submit</button>
                    <button type="reset">Clear</button>
                </div>
            </form>
        </div>
    </body>
</html>
<?php

?>