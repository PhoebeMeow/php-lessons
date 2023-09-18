<?php
    //opdracht 1
    if (isset($_POST['uitrekenen'])) {
        if ($_POST('btw') == 6) {
            $melding = "Bedrag inclusief 6% BTW: € " .
                ($_POST ['bedrag'] * 1.06);
        } else {
            $melding = "Bedrag inclusief 21 BTW: € " .
                ($_POST['bedrag'] * 1.21);
        }
    }


