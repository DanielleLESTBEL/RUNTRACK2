<?php
$textStrg = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
echo ($textStrg);

for ($counter= 0; isset($textStrg[$counter]); $counter++) {
 /*   echo ($counter).<br>*/

    if ($counter % 2 == 0) {
        echo ($textStrg[$counter]);
    }
    else {
        echo (" ");
}
}

?>

