<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'femme'");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table>";
echo "<tr>
        <th> prenom </th>
        <th> nom </th>
        <th> naissance </th>
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
    <title>runtrack2/Jour10/Job03</title>
    <META TYPE="AUTHOR" VALUE="runtrack2/Jour10/Job03"/>
    <link href="./Jour10/index.css" rel="stylesheet">
</head>
<body>


</body>
</html>
