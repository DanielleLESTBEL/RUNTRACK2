<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
$mysqli = mysqli_connect("localhost", "root", "", "jour09");
$result = mysqli_query($mysqli, "SELECT nom, prenom, naissance FROM `etudiants` WHERE `naissance` BETWEEN ('1998-01-01') AND ('2018-12-31');");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<table>";
echo "<tr>
        <th>nom</th>
        <th>prenom</th>
        <th>naissance</th>
    </tr>";
foreach ($rows as $row) {

echo "<tr>
        <th>{$row['nom']}</th>
        <th>{$row['prenom']}</th>
        <th>{$row['naissance']}</th>
    </tr>";
}
echo "</table>";
?>
</body>
</html>
