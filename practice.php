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

    postive();
    function postive() {
        echo "<label>Positivity:</label> <br> " . "I can do this";
    }


    if(isset($_POST['continue'])) {
        $positive = $_POST['positive'];
        echo "<br>" . $positive;
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
        <input type="text" name="positive" required>
        <input type="submit" name="continue" value="Postive">
    </form>
    <br> <br>
    <form method="post" action="">
        Name: <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>
    <br><br>

    <?= $alert ?>
    <form method="post" action="">
        <label>The Owl Company</label><br>
        First name: <input type="text" name="name" placeholder="First Name"> <br>
        Last name: <input type="text" name="lname" placeholder="Last Name"> <br>
        Email: <input type="text" name="email" placeholder="Email"> <br>
        <input type="submit" name="continue" value="Send">
    </form>
</body>
</html>



<?php
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H:i:s");
    $date = date("j F Y");
    echo "------------- <br>";
    echo "| " . $time . " | <br>";
    echo "------------- <br>";
    echo $date;
?>

