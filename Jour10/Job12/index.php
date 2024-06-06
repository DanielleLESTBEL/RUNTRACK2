<?php
$mysqli = mysqli_connect("localhost", "root", "", "jour09");
$result = mysqli_query($mysqli, "SELECT nom, prenom, naissance FROM `etudiants` WHERE `naissance` BETWEEN ('1988-01-01') AND ('2018-12-31');");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<table>";
echo "<tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Naissance</th>
    </tr>";
foreach ($rows as $row) {

echo "<tr>
        <th>{$row['prenom']}</th>
        <th>{$row['nom']}</th>
        <th>{$row['naissance']}</th>
    </tr>";
}
echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jour10_Job12</title>
    <link rel= "stylesheet" href="./index.css">
</head>
<body>

</body>
</html>
