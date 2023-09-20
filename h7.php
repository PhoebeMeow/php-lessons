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
    ?>

<form method="post" action="">

    <label>Bedrag exclusief BTW</label>
    <input type="text" name="bedrag">

    <br>

    <input class="nostyle" type="radio" name="btw" value="6"> Laag, 6%

    <br>

    <input class="nostyle" type="radio" name="btw" value="21"> Hoog, 21%

    <br><br>
    <input type="submit" name="uitrekenen" value="Uitrekenen">
</form>

<br><br>

<?php echo $melding; ?>


