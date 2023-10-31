<form method="post" action="">

    <label>Stappelkorting</label>

    <br>

    <input class="nostyle" type="radio" name="keuze" value="22"> Handdoek €22 (20% korting)

    <br>

    <input class="nostyle" type="radio" name="keuze" value="17"> Broek €17 (30% korting)

    <br>

    <input class="nostyle" type="radio" name="keuze" value="10"> Shirt €10 (50% korting)

    <br><br>

    Amount: <input class="nonstyle" type="text" name="amount">

    <br><br>

    <input type="submit" name="uitrekenen" value="Uitrekenen">
</form>

<?php
//opdracht 1
    if(isset($_POST['keuze']) || isset ($_POST['uitrekenen'])) {
        $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);
        $radio = $_POST['keuze'];
        if(!$amount) {
            echo "Voer een getal in";
        } else if(empty($radio)) {
            echo "Niet alle velden ingevuld";
        } else if ($radio == "handdoek") {
            $price = 22;
            $total = $price / 100 * 80;
            $endTotal = $total * $amount;
            echo "U heeft: " . $amount . " Handdoekken besteld. Het totaal bedrag is: €" . number_format($endTotal, 2);
        } else if ($radio == "shirt") {
            $price = 10;
            $total = $price / 100 * 50;
            $endTotal = $total * $amount;
            echo "U heeft: ". $amount . " Shirts besteld. Het totaal bedrag is: €" . number_format($endTotal, 2);
        } else if ($radio == "broek") {
            $price = 17;
            $total = $price / 100 * 70;
            $endTotal = $total * $amount;
            echo "U heeft: " . $amount . " Broeken besteld. Het totaal bedrag is €" . number_format($endTotal, 2);
        }


    }


?>

<?php
//opdracht 2

session_start();
echo "U heeft voor de IPhone versie: " . $_SESSION['version'] . " gekozen. <br>";

echo "U heeft de IPhone kleur: " . $_SESSION['color'] . " gekozen. <br>";

echo "U bent: " . $_SESSION['fname'] . " " . $_SESSION['lname'] . "<br>";

echo "Uw ingevoerde email is: " . $_SESSION['email'] . "<br>";

echo "Uw address is: " . $_SESSION['street'] . " in " . $_SESSION['residence'] . " met de postcode: " . $_SESSION['zipcode'];


?>
