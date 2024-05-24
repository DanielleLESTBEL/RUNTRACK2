<?php

$textStr = "Dans l'espace, personne ne vous entend crier." ;
echo $textStr;

for ($counter= 0; isset($textStr[$counter]); $counter++) {
echo ($counter)."<br>";
}
?>
