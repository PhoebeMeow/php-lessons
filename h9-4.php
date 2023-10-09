<?php
//    try {
//        $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
//
//        $password = password_hash("geheim", PASSWORD_DEFAULT);
//        $query = $db->prepare("INSERT TO gebruikers(username, password_) VALUES ('ik', "  . $password . ")");
//
//        if($query->execute()) {
//            echo "De nieuwe gegevens zijn teogevoegd.";
//        } else {
////            echo "Er is een fout opgetreden!";
//        }
//    } catch(PDOException $e) {
//        die("Error!: " . $e->getMessage());
//    }
//
?>


<?php
try {
        $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");

        if(isset($POST['inloggen'])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);

        $password = $_POST['password'];
        $query = $db->prepare("SELECT * FROM gebruikers WHERE username :user");

        $query->bindParam("user", $username);
        $query->execute();
        if($query->rowCount() == 1) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $result["password"])) {
                echo "Juiste gegevens!";
            } else {
                echo "Onjuiste gegevens!";
            }
        } else {
            echo "Onjuiste gegevens";
        }
        echo "<br>";
}
?>