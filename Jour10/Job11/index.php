<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT * FROM `salles` ORDER BY capacite ASC;");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table>";
echo "<tr>
        <th > Capacité moyenne des salles </th>
    </tr>";
foreach ($rows as $row){ 
echo "<tr>
    <td>{$row['capacite']}</td>
    </tr>";
}
echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10_Job10</title>
    <link rel= "stylesheet" href="./index.css">
</head>
<body>
    
</body>
</html>
