<?php 
function occurences($str, $char) {
    $startngFrom = 0;

    for ($firstLetter = 0; isset($str[$firstLetter]); $firstLetter++) {
        
        if ($str[$firstLetter] == $char) {
           
            $startngFrom++;
        }
      }
      echo "Il y a $startngFrom lettres '$char' dans la phrase" . "<br \>" ;  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 Job05</title>
</head>
<body>

   <?php 
   $str = "Life, it's like a box of chocolates. You never know what you're gonna get.";
   echo occurences($str, "n");
  
   ?> 
</body>
</html>


