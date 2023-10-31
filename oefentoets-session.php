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

    <br>

    Voornaam: <input class="nonstyle" type="text" name="fname">

    <br>

    Achternaam: <input class="nonstyle" type="text" name="lname">

    <br>

    Email: <input class="nonstyle" type="text" name="email">

    <br>

    Postcode: <input class="nonstyle" type="text" name="zipcode">

    <br>

    Straat: <input class="nonstyle" type="text" name="street">

    <br>

    Woonplaats: <input class="nonstyle" type="text" name="email">

    <br><br>

    <input class="nonstyle" type="submit" name="order" value="Bestellen">
</form>
</body>
</html>


<?php
//opdracht 2
session_start();
if(isset($_POST['bestellen'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $_SESSION['version'] = $_POST['version'];
    $_SESSION['color'] = $_POST['color'];
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['zipcode'] = $_POST['zipcode'];
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['residence'] = $_POST['residence'];

    if(empty($_SESSION['version']) || empty($_SESSION['color']) || empty($_SESSION['fname']) || empty($_SESSION['lname'] ||
            empty($_SESSION['email']) || empty($_SESSION['zipcode']) || empty($_SESSION['street']) || empty($_SESSION['residence']))) {
        echo "Vul alle velden in";
    } else if(!$email) {
        echo "Vul een geldige email adres in";
    } else {
        header("Location: oefentoets.php");
    }
}
?>