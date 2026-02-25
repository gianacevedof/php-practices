<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="isset_empty.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" name="username"><br>

            <label for="password">Password:</label><br>
            <input type="password" name="password"><br><br>

            <input type="submit" name="login" value="Log in"><br><br>
        </form>
    </body>
    </html>

<?php

    // isset() = Returns TRUE if the variable is declared and has a value other than null.
    // empty() = Returns TRUE if the variable is not declared or Null.

    // $x = Null;

    // if (isset($x)) {
    //     echo "The variable {$x} is set.";
    // }
    // if (empty($x)) {
    //     echo "This variable is empty.";
    // }

    if (!empty($username = $_POST["username"])) {
        if (!empty($password = $_POST["password"])) {
            echo "Thank you for logging in <strong>{$username}.</strong><br>";
        }
        else {
            echo "You missed the password. Try again.";
        }
    }
    else {
        echo "You haven't entered any data.";
    }
?>