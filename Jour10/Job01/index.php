<?php
$recupdata = mysqli_connect("localhost", "root", "", "Jour09");
$selections = mysqli_query($recupdata, "SELECT * FROM etudiants");
$result = mysqli_fetch_assoc($selections);

echo  "<table>
            <thead>
                    <th>
                        Prenom
                    </th>

                    <th>
                        Nom
                    </th>

                    <th>
                        Naissance
                    </th>

                    <th>
                        Sexe
                    </th>

                    <th>
                        email
                    </th>        
            </thead>
            <tbody>";
                foreach ($selections as $user) {
                    echo "<tr>";
                        echo "<td>" . $user['prénom'] . "</td>";
                        echo "<td>" . $user['nom'] . "</td>";
                        echo "<td>" . $user['naissance'] . "</td>";
                        echo "<td>" . $user['sexe'] . "</td>";
                        echo "<td>" . $user['email'] . "</td> <br/>";
                        echo "</tr>";
                    }
                echo "</tbody>
            </table>";    
?>