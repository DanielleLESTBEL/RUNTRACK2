<?php
$mysqli = mysqli_connect("localhost", "root", "", "jour09");
$result = mysqli_query($mysqli, "SELECT nom, capacite  FROM salles");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table>";
echo "<tr>
        <th>nom</th>
        <th>capacite</th>
    </tr>";
foreach ($rows as $row) {

echo "<tr><th>{$row['nom']}</th><th>{$row['capacite']}</th></tr>";
}
echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>runtrack2/jour10/job02</title>
    <META TYPE="AUTHOR" VALUE="runtrack2/jour10/job02"/>
    <link rel= "stylesheet" href="./index.css">
</head>
<body>


</body>
</html>