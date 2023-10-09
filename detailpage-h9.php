<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");

        $query = $db->prepare("SELECT * FROM fietsen");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as &$data) {
            echo "Artikelnummer: " . $data['id'] . "<br>";
            echo "Merk: " . $data["merk"] . " " . $data["type"] . "<br>";
            echo "Prijs: &euro; " . number_format($data["prijs"], 2, ",", ".") . "<br><br>";
        }
    } catch(PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
?>
<a href="h9-2.php">Terug naar main pagina</a>
