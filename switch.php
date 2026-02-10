<?php

    $grade = "B";

    switch($grade) {
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break; 
        case "C":
            echo "You did ok";
            break; 
        case "F":
            echo "You failed";
            break;
        default:
        echo "{$grade} is not valid.";
    }

?>