<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_Job01</title>

</head>
<body>
<form action="index.php" method="GET"> 
    <label for="firstname">Prénom</label> 
    <input type="text" name="firstname" id="firstname">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" id="lastname">
    <input type="submit" value="Confirmer">
</form>

<?php

if (!empty($_GET['firstname']) && !empty($_GET['lastname'])) {
    echo "Le nombre d'arguments GET envoyés est : " . count($_GET);
    } 
    else {  /*sinon, ne rien afficher*/    
        }

?>

</body>
</html>