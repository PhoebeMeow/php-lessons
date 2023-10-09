<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=grade", "root", "");

    $query = $db->prepare("SELECT * FROM cijfers");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo "<table>";
    echo "<tr> Leerling";
    echo "<tr> Cijfer";
    foreach ($result as &$data) {
        echo "<tr>";
        echo "<td>" . $data["leerling"] . "</td>";
        echo "<td>" . $data["cijfer"] . "</td>";
    }
    echo "</table>";
} catch(PDOException $e) {
        die("Error!: " . $e->getMessage());
    }


$query1 = $db->prepare("SELECT AVG(cijfer) AS gemiddelde from cijfers");
$query1->execute();
$result1 = $query1->fetchAll(PDO::FETCH_ASSOC);
foreach ($result1 as &$data1) {

    foreach ($data1 as &$data2) {
        echo number_format($data2, 1);
    }
}

$query2 = $db->prepare("SELECT MAX(cijfer) FROM cijfers");
$query2->execute();
$result2 = $query2->fetchAll(PDO::FETCH_ASSOC);
foreach ($result2 as $data3) {
    foreach ($data3 as $data4) {
        echo "<br>" . $data4;
    }
}

$query3 = $db->prepare("SELECT MIN(cijfer) FROM cijfers");
$query3->execute();
$result3 = $query3->fetchAll(PDO::FETCH_ASSOC);
foreach ($result3 as $data5) {
    foreach ($data5 as $data6) {
        echo "<br>" . $data6;
    }
}
?>

<style type="text/css">
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    td {
        border: 1px solid black;
        width 100px;
    }
</style>
