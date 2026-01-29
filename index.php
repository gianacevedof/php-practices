<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        echo "Hello, this is a paragraph in PHP.";
        ?>
        <p>Hello there, this is also a paragraph, but in HTML.</p>

        <?php 
            // Scalar type variables (contains one value)
            $name = "Giancarlo Acevedo";
            $string = "my name is";
            $int = 20;
            echo "So, " . $string . " " . $name . " and I am " . $int . " years old.";

            // Array type variable (contains multiple values)
            $colors = ["Red", "Green", "Blue", "Yellow"];
            echo " My favorite colors are: " . $colors[0] . " and " . $colors[1];
        ?>

    </body>
</html>