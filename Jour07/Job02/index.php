<?php 
function bonjour($jour) {
    if ($jour == true) {
        return 'Bonjour';
    }
    else {
        return 'Bonsoir';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 Job02</title>
</head>
<body>
   <?php
   echo bonjour(false);
    
   ?>
   
</body>
</html>