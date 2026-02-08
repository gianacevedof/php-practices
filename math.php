<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <h1>Geometry Calculator</h1>
        <br>
        <label for="radius">To get the data of your circle please enter its radius:</label>
        <br>
        <br>
        <input type="text" name="radius">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];

    $circumference = null;
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = null;
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = null;
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "<br>The Circumference of your circle is {$circumference} cm.";
    echo "<br>The Area of your circle is {$area} cm^2.";
    echo "<br>The Volume of your Sphere is {$volume} cm^3.";
?>