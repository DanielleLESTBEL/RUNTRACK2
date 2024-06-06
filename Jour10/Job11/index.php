<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT AVG(capacite)  AS capacite_moyenne FROM salles;");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table>";
echo "<tr>
        <th> Capacité moyenne des salles </th>
    </tr>";
foreach ($rows as $row){ 
echo "<tr>
    <td>{$row['capacite_moyenne']}</td>
    </tr>";
}
echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10_Job11</title>
    <link rel= "stylesheet" href="./index.css">
</head>
<body>
    
</body>
</html>
