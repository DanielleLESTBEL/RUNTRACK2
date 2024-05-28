<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_Job01</title>

</head>
<style>
    td, th{ 
        border: 1px solid black;
    }
    </style>
<body>
<form action="index.php" method="GET"> 
    <label for="firstname">Prénom</label> 
    <input type="text" name="firstname" id="firstname">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" id="lastname">
    <input type="submit" value="Confirmer">
</form>
<?php

if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
    
} 


?>

<table>
<thead>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
</thead>
<td><?php echo $_GET['firstname']?></td>
<td> <?php echo $_GET['lastname']?> </td>



</table>

</body>
</html>