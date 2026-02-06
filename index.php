<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
       <p><strong>Price calculator</strong></p>
        <label name="item">Item:</label>
        <input type="text" name="item">

        <br>

        <label name="quantity">Quantity:</label>
        <input type="number" name="quantity">

        <br>

        <label name="price">Price:</label>
        <input type="text" name="price">

        <br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $totalPrice = $quantity * $price;
        echo "<p>You have purchased $quantity $item/s for a total price of: $$totalPrice</p>";
?>