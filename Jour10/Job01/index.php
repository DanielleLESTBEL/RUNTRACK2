<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jour10_Job01</title>
        <meta charset="utf-8" />
        <META TYPE="AUTHOR" VALUE="runtrack2/jour10/job01"/>
        
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th { background-color: #f2f2f2; }
        </style>
    </head>
    
    <body>
        <main>
            <?php
                $mysqli = mysqli_connect("localhost", "root","",  "Jour09");
                $result = mysqli_query($mysqli, "SELECT * FROM etudiants");
                //$sql = "SELECT colonne1, colonne2 FROM nom_de_la_table";
                //$result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
            ?>
            <table>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
            
            <?php
            if (!empty($row)) 
            {
                foreach ($result as $row) 
                {
                    echo "<tr>";
                    echo "<td>" . $row["prenom"] . "</td>";
                    
                    echo "<td>" . $row["nom"] . "</td>";
                    
                    echo "<td>" . $row["naissance"] . "</td>";
                    
                    echo "<td>" . $row["sexe"] . "</td>";
                    
                    echo "<td>" . $row["email"] . "</td>";
                    echo "</tr>";
                }
            }
            $mysqli->close();
            ?>
            </table>

        </main>
    </body>
</html>