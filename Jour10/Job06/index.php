<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT COUNT(*) AS nb_etudiants FROM etudiants");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table>";
echo "<tr>
        <th> Nombre étudiants </th>
    </tr>";

foreach ($rows as $row) {
echo "<tr>
        <th>{$row['nb_etudiants']}</th>
    </tr>";
}
echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10_Job06</title>
    <link rel= "stylesheet" href="./index.css">
</head>
<body>
    
</body>
</html>