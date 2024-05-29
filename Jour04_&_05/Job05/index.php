<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_Job05</title>

    
</head>
<body>
<form action="index.php" method="POST"> 
    <label for="username">Utilisateur</label> 
    <input type="text" name="username" id="username">
    <label for="password">Mot de Passe</label>
    <input type="text" name="password" id="password">
    <input type="submit" value="Confirmer">
</form>
<?php

if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
    echo "C'est pas ma guerre";
} 
elseif ($_POST['username'] == "Max" && $_POST['password'] == "Mox") {
    echo "T'as réussi !";
}
else {
    echo "Votre pire cauchemar";
}

?>

</body>
</html>