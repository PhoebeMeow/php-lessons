<?php
    date_default_timezone_set("Europe/Amsterdam");

    $today = date("j F Y");
    echo "Vandaag is het: $today";

    echo "<br>";

    $day = date("z");
    echo "Vandaag is het de $day dag van het jaar" ;

    echo "<br>";

    $week = date("w");
    echo "Thursday is de $week dag van de week.";

    echo "<br>";

    $month = date("t");
    echo "De maand August heeft in totaal $month dagen.";

    echo "<br>";

    $year = date("L");
    if ($year == 0) {
        echo "Het jaar 2023 is geen schrikkeljaar.";
    }