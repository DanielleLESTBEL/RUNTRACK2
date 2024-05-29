<?php 
function calcule($a, $operation , $b) {
    
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
        return $a / $b;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 Job04</title>
</head>
<body>
   <?php echo calcule(4, "-", 2); ?> 
</body>
</html>