<?php
    //opdracht 1
        session_start();
        if(isset($_SESSION['count'])){

            echo "Deze pagina heb je al: ";
            echo $_SESSION['count']++;
            echo " bekeken <br> voordat je de internet browser hebt afgesloten";
        }
        else{
            $_SESSION['count'] = 1;
        }

    //opdracht 2
        if(isset($_SESSION['counter'])){
            echo "<br>";
            echo "Deze pagina heb je al: ";
            echo $_SESSION['counter']++;
            echo " bekeken <br> voordat je de internet browser hebt afgesloten <br>";
        }
        else{
            $_SESSION['counter'] = 1;
        }

    //opdracht 3
    $zipcode = rand(1000, 9999);
    $letter = chr(64+rand(0,26));
        echo $zipcode;
        echo $letter;
        echo $letter;
        echo "<br>";

    //opdracht 4
    $pi = 3.14159;
    $straal = 5;

    function omtrek($straal, $pi) {
        $sum = 2 * $pi * $straal;

        return round($sum, 1);
    }

    echo "De omtrek van een cirkel met straal 5 is: ";
    echo omtrek($straal, $pi);

    function oppervlakte($pi, $straal) {
        $som = $pi * $straal * $straal;

        return round($som, 1);
    }

    echo "<br> De oppervlakte van een cirkel met straal 5 is: ";
    echo oppervlakte($pi, $straal);
    echo "<br>";

    //opdracht 5
    $s = 5.5; //Lengte van het remspoor in meters
    $a = sqrt(($s / 2)); // a = (s^2 / (2 * s )
    $aKmPerH = $a * 3.6; // 1 m/s^2 = 3.6 km/h^2
    $aRounded = round($aKmPerH);

    echo "De remvertraging is ongeveer " . $aRounded . " km/h";

    echo "<br>";


    //odpracht 6
    //0.93 euro wisselkoers
    $d = 86.74;
    function euro($d) {
    number_format()

    }

    echo euro($d);
?>


