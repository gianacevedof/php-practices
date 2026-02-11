<?php
    $foods = array("Apple", "Banana", "Pineapple", "Coconut");

    // This adds an element to the end of the array
    array_push($foods, "Watermelon", "Kiwi");

    // This deletes the last element of the array (Kiwi)
    array_pop($foods);

    // This will delete the first element of the array (Apple)
    array_shift($foods);

    // This will reverse
    $foods = array_reverse($foods);

    // Count the elements on an array
    echo count($foods) . "<br>";

    // This is a efficinet way to display each element on an array
    foreach ($foods as $food) {
        echo $food . "<br>";
    }
?>