<?php
$cookie_value = 'counter';

setcookie('nbvisites', $cookie_value, time() + 3600);

if (!isset($_COOKIE['nbvisites'])) {
$_COOKIE['nbvisites'] = 0;
}

$_COOKIE['nbvisites']++;
echo $_COOKIE['nbvisites'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08_Job02</title>
</head>
<body>
<?php

echo "<form method='POST'>";
echo "<button name='reset'>Reset</button>";
echo "</form>";

if (isset($_POST['reset'])) {
    $_COOKIE['nbvisites'] = -1;
    header("Refresh:0");
}
?>
</body>
</html>


