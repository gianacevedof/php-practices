<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type = text/css>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="while_loops.php" method="post">
       <h2><strong>Sign up</strong></h2>

        <label name="username">Please, enter your username:</label>
        <br>
        <input type="text" name="username">
        <br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php
    $username = $_POST["username"];

    while ($username != "gian") {
        echo "{$username} not valid. Try again.";
    }
?>