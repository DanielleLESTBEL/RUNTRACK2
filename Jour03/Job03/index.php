<?php

$textStrg = "I'm sorry Dave I'm afraid I can't do that.";

$textStrg = strtolower($textStrg);
//echo ($textStrg);

for ($counter = 0; isset($textStrg[$counter]);$counter++) {
    
if($textStrg[$counter] == "a" || $textStrg[$counter] == "e" || $textStrg[$counter] == "i" || $textStrg[$counter] == "o" || $textStrg[$counter] == "u" || $textStrg[$counter] == "y") {
    echo $textStrg[$counter] ;
} else {
    echo " ";
}
}

?>
