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
    $y = 10;
    $x = 15;

    if ($y >= $x) {
        $result = $y * 2 + $x;
        echo $result;
    } else if ($x >= $y) {
        $result = $x * 2 + $y;
        echo "<br> Uitkomst is: $result";
    }

    //opdracht 4
    $oldPrice = 200;
    $cheapPrice = 40;

    if ($oldPrice >= 150 ) {
        $newPrice = 150 / 100 * 19 + $oldPrice;
        echo "<br> Oude prijs: €$oldPrice. Na verhoging van 19% is de prijs: €$newPrice";
    }

    if ($cheapPrice <= 55) {
        $expensivePrice = 55 / 100 * 11 + $cheapPrice;
        echo "<br> Oude prijs: €$cheapPrice. Na verhoging van 11% is de prijs: €$expensivePrice";
    }

    //opdracht 5
    $number = 48;

    $numberResult = match($number) {
        2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48 => "even",
        1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 37, 39, 41, 43, 45, 47, 49 => "oneven",
    };
    echo "<br> Het getal $number is $numberResult";


    $uur = date("G");
    $temperature = 25;
    $humidity = 50;

    if (date("G") >= 8 && date("G") <= 17) {
        echo "<br> De airco moet aan";
    } else if ($temperature > 20 && $humidity > 85) {
        echo "<br> De airco moet aan";
    } else if (date("G") >= 17) {
        echo "<br> De airco moet uit";
    } else if ($temperature < 20 && $humidity < 85) {
        echo "<br> De airco moet uit";
    }

    //opdracht 7
    $spaargeld = 250;
    $iphone = 1000;
    if ($spaargeld < $iphone)