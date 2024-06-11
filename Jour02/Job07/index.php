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

/*

- tu defini une varriable taille (nombre d'etoil) si tu veu ue la generation soit dynamique (piloter par un fomulaire par exemple)

-tu creer une boucle de 1 a $taille qui s'increment de 1 a chaque foi (pour les lignes)

- tu place $taille nombre d'etoile sur chaque ligne en fonction de $taille donc la tu devra faire une boucle de 1 a $taille encore une foi pour le nombre d'etoile (echo '*';)

et au final tu aura ton triangle

Ca s'est l'idée de base (une ébauche d'algo tres tres franciser xd) */
