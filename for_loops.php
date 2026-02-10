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
    <form action="loops.php" method="post">
       <h2><strong>Number counter</strong></h2>

        <label name="number">Please, enter a number to count to:</label>
        <br>
        <input type="text" name="number">
        <br>
        <?php
            $number = $_POST["number"];
            for ($i = 1; $i <= $number; $i++) {
                echo "{$i} ";
            }
        ?>

        <br><br>

        <label name="number_r">Now, enter a number to count to in reverse:</label>
        <br>
        <input type="text" name="number_r">
        <br>
        <?php
            $number_r = $_POST["number_r"];
            for ($i = $number_r; $i > 0; $i--) {
                echo "{$i} ";
            }
        ?>

        <br><br>
        <input type="submit" value="Start">
    </form>
</body>
</html>