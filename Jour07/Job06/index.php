<?php 
function leetSpeak($str) {
    $char = 0

    while (isset($str[$char])) {
       
        if ($str[$char] == "a" || $str[$char] == "A") {
            $str[$char] = "4";
        } 
        if ($str[$char] == "B" || $str[$char] == "b") {
            $str[$char] = "8";
        } 
        if ($str[$char] == "e" || $str[$char] == "E") {
            $str[$char] = "3";
        } 
        if ($str[$char] == "G" || $str[$char] == "g") {
            $str[$char] = "6";
        } 
        if ($str[$char] == "L" || $str[$char] == "l") {
            $str[$char] = "1";
        } 
        if ($str[$char] == "s" || $str[$char] == "S") {
            $str[$char] = "5";
        }
        $char++;
        }  
    
}
return $str;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 Job06</title>
</head>
<body>
   <?php 
   echo leetSpeak ("Life, it's like a box of chocolates. You never know what you're gonna get."); ?> 
</body>
</html>



