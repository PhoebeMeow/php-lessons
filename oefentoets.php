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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>IPhone</label>

        <br>

        Versie: <input class="nonstyle" type="text" name="version">

        <br>

        Kleur: <input class="nonstyle" type="text" name="color">
    </form>
</body>
</html>


<?php
//opdracht 2
?>
