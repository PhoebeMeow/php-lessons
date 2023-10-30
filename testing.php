<?php
    date_default_timezone_set("Europe/Amsterdam");

    $today = date('j F Y');
    echo "Vandaag is het: $today";



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
        <label>Getal Keer 260</label> <br>
        <input type="number" name="number"> <br>
        <input type="submit" name="submit" value="Uitrekenen">
    </form>
</body>

<?php
if(isset($_POST['submit'])) {
    $number = $_POST['number'];

    $result = $number * 260;

    echo "Het antwoord is: $result";
}

?>
</html>
