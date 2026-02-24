<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="POST">
        <label name="countries">Enter a country to know its capital:</label>
        <br>
        <input type="text" name="countries">
        <input type="submit" value="Find capital">
    </form>
</body>
</html>

<?php 
// Associative arrays are like dictionaries in Python.
// You have 'Key => Value' for example 'U.S. => Washington D.C.'

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "India" => "New Dalhi",
    "South Korea" => "Seul",
    "Dominican Republic" => "Santo Domingo"
);

// To update a key/value pair you do it like this
// $capitals["U.S."] = "Las Vegas";

// foreach($capitals as $key => $value) {
//     echo "The capital of {$key} is {$value} <br>";
// }

$capital = $capitals[$_POST["countries"]];
echo "Its capital is: <strong>$capital</strong>";

?>