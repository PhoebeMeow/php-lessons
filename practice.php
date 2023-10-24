<?php
    /*
     * 2 variabelen -> nummers
     * die variabelen * en dan * 2
     */

    $x = 30;
    $y = 69;

    $result = $x * $y * 2;

    echo $x . " x " . $y . " x 2 = " . $result;


    /*
     * form -> name[text] but no numbers.
     */

    if(isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, "name",);

        $alert = $name;
    } else {
        $alert = "";
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
        Name: <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?= $alert ?>
</body>
</html>
