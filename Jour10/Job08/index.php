<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT SUM(capacite) AS capacite_totale FROM salles;");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table>";
echo "<tr>
        <th> Capacité totale des salles </th>
    </tr>";

foreach ($rows as $row) {
echo "<tr>
        <th>{$row['capacite_totale']}</th>
    </tr>";
}
echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10_Job08</title>
    <link rel= "stylesheet" href="./index.css">
</head>
<body>
    
</body>
</html>
