<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_bts.php" method="post">
        <label>Please select your payment method:</label>
        <br><br>
        <input type="radio" name="credit_card" value="Visa"> Visa
        <br>
        <input type="radio" name="credit_card" value="Mastercard"> Mastercard
        <br>
        <input type="radio" name="credit_card" value="American Express"> American Express
        <br>
        <input type="submit" name="select" value="Select">
    </form>
</body>
</html>

<?php

    if (isset($_POST["select"])) {

    $credit_card = $_POST["credit_card"];
        
    switch($credit_card) {
        case "Visa":
            echo "You have selected Visa.";
            break;
        case "Mastercard":
            echo "You have selected Mastercard.";
            break;
        case "American Express":
            echo "You have selected American Express.";
            break;
        default:
            echo "Please select a payment method.";
        }
    }
?>