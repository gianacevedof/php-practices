<?php
    $age = 19;

    if ($age >= 100) {
        $adult = True;
        echo "You're too old ({$age}) to enter this side.";
    }
    elseif ($age <= 0) {
        $adult = False;
        echo "That's not a valid age ({$age}).";
    }
    elseif ($age >= 18) {
        $adult = True;
        echo "You may enter this site ({$age}).";
    }
    else {
        $adult = False;
        echo "You must be 18+ to enter this site ({$age}).";
    }
?>