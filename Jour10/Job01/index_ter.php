<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT * FROM etudiants");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<table>";
echo "<tr>
        <th>nom</th>
        <th>prenom</th>
        <th>naissance</th>
        <th>sexe</th>
        <th>email</th>
    </tr>";

foreach ($rows as $row) {

echo "<tr>
        <th>{$row['nom']}</th>
        <th>{$row['prenom']}</th>
        <th>{$row['naissance']}</th>
        <th>{$row['sexe']}</th>
        <th>{$row['email']}</th>
    </tr>";
}
echo "</table>";
?>
</body>
</html>