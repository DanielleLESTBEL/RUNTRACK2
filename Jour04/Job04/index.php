<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_Job01</title>

</head>
<body>
<form action="index.php" method="POST"> 
    <label for="firstname">Prénom</label> 
    <input type="text" name="firstname" id="firstname">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" id="lastname">
    <input type="submit" value="Confirmer">
</form>
<?php

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    
} 


?>

<table>
<thead>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
</thead>
<td><?php echo $_POST['firstname']?></td>
<td> <?php echo $_POST['lastname']?> </td>

</table>

</body>
</html>