<?php
session_start();

if (!isset($_SESSION['nbvisites'])) {
$_SESSION['nbvisites'] = 0;
}

$_SESSION['nbvisites']++;
echo $_SESSION['nbvisites'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08_Job01</title>
</head>
<body>
<?php

echo "<form method='POST'>";
echo "<button name='reset'>Reset</button>";
echo "</form>";

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = -1;
    header("Refresh:0");
}
?>
</body>
</html>


