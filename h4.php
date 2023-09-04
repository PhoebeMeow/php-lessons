<?php

//opdracht 1
    $hour = date("G");

    if ( date("G") >= 6 && date("G") < 12 ) {
        echo "Het is ochtend";
    } else if (date("G") >= 12 && date("G") < 18) {
        echo "Het is middag";
    } else if (date("G") >= 18 && date("G") < 24) {
        echo "Het is avond";
    } else if (date("G") >= 24 && date("G") < 6) {
        echo "Het is nacht";
    }

    //opdracht 2
    $time = match($hour) {
        "6", "7", "8", "9", "10", "11", "12" => "Het is ochtend",
        "12", "13", "14", "15", "16", "17", "18" => "Het is middag",
        "18", "19", "20", "21", "22", "23", "24" => "Het is avond",
        "24", "0", "1", "2", "3", "4", "5", "6" => "Het is nacht",
    };
    echo "<br> $time";

    //opdracht 3
