<form method="post" action="">

    <label>Stappelkorting</label>

    <br>

    <input class="nostyle" type="radio" name="keuze" value="22" required> Handdoek

    <br>

    <input class="nostyle" type="radio" name="keuze" value="17" required> Broek

    <br>

    <input class="nostyle" type="radio" name="keuze" value="10" required> Shirt

    <br><br>

    Amount: <input class="nonstyle" type="text" name="amount" required>

    <br><br>

    <input type="submit" name="uitrekenen" value="Uitrekenen">
</form>

<?php
//opdracht 1
    if(isset ($_POST['uitrekenen'])) {
        $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);
        $handdoek = $_POST['keuze'];
        $broek = $_POST['keuze'];
        $shirt = $_POST['keuze'];
        if(!$amount) {
            echo "Voer een getal in";
        }
    }


?>