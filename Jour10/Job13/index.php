<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jour10_Job13</title>
</head>
<body>
<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT salles.id AS salle_id, salles.nom AS salle_nom, salles.id_etage, salles.capacite, etage.id AS etage_id, etage.nom AS etage_nom, etage.numero, etage.superficie FROM salles INNER JOIN etage ON salles.id_etage = etage.id;");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table border='1'>";
echo "<tr>
        <th>ID de la salle</th>
        <th>Nom de salle</th>
        <th>ID étage</th>
        <th>Capacité</th><th>ID de l'étage</th>
        <th>Nom de l'étage</th>
        <th>Numéro de l'étage</th>
        <th>Superficie de l'étage</th>
    </tr>";

foreach ($rows as $row) {
    echo "<tr>
            <td>{$row['salle_id']}</td>
            <td>{$row['salle_nom']}</td>
            <td>{$row['id_etage']}</td>
            <td>{$row['capacite']}</td>
            <td>{$row['etage_id']}</td>
            <td>{$row['etage_nom']}</td>
            <td>{$row['numero']}</td>
            <td>{$row['superficie']}</td>
          </tr>";
}

echo "</table>";
?>
</body>
</html>

