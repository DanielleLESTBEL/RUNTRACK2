<?php
$hauteur= 5;
 
for ($cote1 = 0; $cote1 < $hauteur; $cote1++)
{
for ($base = 0; $base < $hauteur; $base++)
{echo " ";}
for($cote2=0;$cote2 <=$cote1;$cote2++)
{echo "*";
}
echo "<br />";
}
?>

<?php
$hauteur= 5;
  
for ($i = 0; $i < $hauteur; $i++)
{
    echo str_repeat('&nbsp;',($hauteur-$i));
    for($j = 0; $j <= $i; $j++)
    {
        echo "* ";
    }
echo "<br />";
}
?>
