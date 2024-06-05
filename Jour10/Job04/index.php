<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT prenom, nom, naissance, sexe, email FROM etudiants WHERE LEFT (prenom,1) = 'T'");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table>";
echo "<tr>
        <th> prenom </th>
        <th> nom </th>
        <th> naissance </th>
        <th> sexe </th>
        <th> email </th>
    </tr>";

foreach ($rows as $row) {
echo "<tr>
        <th>{$row['prenom']}</th>
        <th>{$row['nom']}</th>
        <th>{$row['naissance']}</th>
        <th>{$row['sexe']}</th>
        <th>{$row['email']}</th>
    </tr>";
}
echo "</table>";

?>
