<?php
/*
$tableau = array($num = 200, $num = 204, $num = 173, $num = 98, $num = 171, $num = 404, $num = 459);
if ($num % 2 == 0 ) {   
    echo "est Pair" . "<br />";
}
else {
    echo "est Impair" . "<br />";
}
*/
?>
<?php
$Danielle = array(200, 204, 173, 98, 171, 404, 459);

foreach ($Danielle as $trompettes) {
    if ($trompettes % 2 == 0) {
        echo "{$trompettes} est Pair" . "<br />";
    } else {
        echo "{$trompettes} est Impair" . "<br />";
    }
}

?>
