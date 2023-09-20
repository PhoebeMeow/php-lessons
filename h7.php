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


<?php
    //opdracht 2
        if(isset($_POST['uitrekenen']) {
            $operator = $_POST['operator'];
            $getal1 = $_POST['getal1'];
            $getal2 = $_POST['getal2'];
            switch($operator) {
                case "plus" : $antw = $getal1 . " + " . $getal2 . " = " . ($getal1 + $getal2); break;
                case "min" : $antw = $getal1 . " - " . $getal2 . " = " . ($getal1 - $getal2); break;
                case "keer" : $antw = $getal1 . " x " . $getal2 . " = " . ($getal1 * $getal2); break;
                case "deel" : $antw = $getal1 . " / " . $getal2 . " = " . ($getal1 / $getal2); break;
            }
        } else {
            $antw = "";
        }
?>

<form method="post" action="">

    <label>Getal 1</label>
    <input type="text" name="getal1">

    <br>

    <input class="nostyle" type="radio" name="operator" value="plus">Optellen
    <input class="nostyle" type="radio" name="operator" value="min">Aftreken
    <input class="nostyle" type="radio" name="operator" value="keer">Vermenigvuldigen
    <input class="nostyle" type="radio" name="operator" value="deel">Delen

    <br>

    <label>Getal 2</label>
    <input type="text" name="getal2">
    <br>

    <br>

    <input  type="submit" name="uitrekenen" value="Berekenen">
</form>

<br><br>

<?php
    echo $antw;
    ?>

<?php
    //opdracht 3
        


