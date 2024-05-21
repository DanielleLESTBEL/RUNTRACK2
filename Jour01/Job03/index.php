<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tableau html - php </title>
</head>
<body>
<?php
$col1 = 'Types';
$col2 = 'nom';
$col3 = 'value';
$table = array('cat','col2','col3');
?>

<table>
<tr>
<?php echo"<td>$col1</td><td>$col2</td><td>$col3</td>";?>
</tr>

<tr>
<?php echo"<td>$table[0]</td><td>$table[1]</td><td>$table[2]</td>";?>
</tr>

</table>


</body>
</html>