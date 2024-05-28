<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_Job06</title> 
</head>

<body>
<form action="index.php" method="GET"> 
    <label for="number">Nombre</label> 
    <input type="text" name="number" id="number">
    <input type="submit" value="Pair ou Impair ?">
</form>

<?php

if ($_GET['number'] % 2 == 0) {
    echo "Nombre pair";
} 
else {
    echo "Nombre impair";
}

?>

</body>
</html>