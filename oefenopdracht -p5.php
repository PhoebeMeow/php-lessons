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
        <label>Opdracht 1</label> <br>
        <input class="nonstyle" type="text" name="number">
        <input clsas="nonstyle" type="submit" name="submit" value="Add">
    </form>
</body>
</html>


<?php
session_start();

if (!isset($_SESSION['numbers'])) {
    $_SESSION['numbers'] = array();
}

if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    if (!empty($number)) {
        $_SESSION['numbers'][] = $number;
    }
}

if (isset($_SESSION['numbers'])) {
    foreach ($_SESSION['numbers'] as $value) {
        echo "$value <br>";
    }
    for($i = 0; $i < count($_SESSION['numbers']); $i++) {
        echo ($i * count($_SESSION['numbers'])) . "<br>";
    }
}
?>
