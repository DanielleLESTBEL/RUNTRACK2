<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03_Job05</title>
</head>
<body>
<table>
    <tr>
        <th> Consomnes </th>
    </tr>
    <tr>
        <td> number </td>

    </tr>
    <tr>
        <th> Voyelles </th>
    </tr>
    <tr>
        <td> number </td>
    </tr>

</table>    


</body>
</html>




 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exercice 5</title>
</head>
<body>
        <?php
        $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
        $len = 0;

        for ($i = 0; isset($str[$i]); $i++) {
            $len++;
        }
        $voyelles = 0;
        $consonnes = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "o" || $str[$i] == "u") {
                $voyelles = $voyelles + 1;

            }
            else {
                if ($str[$i] == " ") {
                    //Do Nothing
                }
                elseif ($str[$i] == "'") {
                    //Do Nothing
                }
                else{
                    $consonnes = $consonnes + 1;
                }

            }
        }
        ?>

        <table>
            <thead>
                <tr>
                    <th>Voyelles</th>
                    <th>Consonnes</th>
                </tr>
            </thead>
            <tr>
                <td><?= $voyelles ?></td>
                <td><?= $consonnes ?></td>
            </tr>
        </table>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/Css/index2.css">
    <link rel="stylesheet" href="./Assets/Css/index.css">

</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    Accueil
                </li>
                <li>
                    Information
                </li>
                <li>
                    Contact
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <!--<article>

        </article>-->
        <section>
            <!-- <form> -->
            <!-- <form action="/chemin/vers/traitement.php"> -->
            <form action="/chemin/vers/traitement.php" method="POST">


                <label for="first_name">Prénom</label>
                <input id="first_name" name="first_name">
                <label for="name">Prénom</label>
                <input id="name" name="first_name">

                <input type="password" required>
                <input type="email" id="email" name="email" placeholder="john@doe.com">
                <input type="tel"
                    pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
                    name="phone_number">

                <input type="color" name="color" value="#000000">

                <input type="range" name="happiness" min="0" max="100" step="5">


                <input type="checkbox" value="cat" name="animals[]" id="cat">
                <label for="cat">Chat</label>
                <input type="checkbox" value="dog " name="animals[]" id="dog">
                <label for="dog">Chien</label>
                <input type="checkbox" value="rabbit" name="animals[]" id="rabbit">
                <label for="rabbit">Lapin</label>

                <hr>

                <input type="radio" value="cat" name="animal" id="cat">
                <label for="cat">Chat</label>
                <input type="radio" value="dog " name="animal" id="dog">
                <label for="dog">Chien</label>
                <input type="radio" value="rabbit" name="animal" id="rabbit">
                <label for="rabbit">Lapin</label>

                <textarea name="message"></textarea>

                <hr>
                <label for="animal">Votre animal préféré ?</label>
                <select id="animal" name="animal">
                    <option value="cat">Chat</option>
                    <option value="dog">Chien</option>
                    <option value="rabbit">Lapin</option>
                </select>
                <hr>

                <label for="animal">Votre animal préféré ?</label>
                <select id="animal" name="animal">
                    <optgroup label="Animaux de compagnie">
                        <option value="cat">Chat</option>
                        <option value="dog">Chien</option>
                        <option value="rabbit">Lapin</option>
                    </optgroup>
                    <optgroup label="Animaux de la ferme">
                        <option value="cow">Vache</option>
                        <option value="pig">Cochon</option>
                        <option value="sheep">Mouton</option>
                    </optgroup>
                </select>

                <hr>

                <input name="prenom" value="Ronan" required>
                <input name="prenom" value="Ronan" disabled>
                <input name="prenom" value="Ronan" autofocus>

                <hr>
                <hr>
                <hr>


                <fieldset>
                    <label for="last_name">Nom</label>
                    <input id="last_name" name="last_name">
                    <label for="first_name">Prénom</label>
                    <input id="first_name" name="first_name">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </fieldset>
                <hr>
                <hr>
                <hr>

                <fieldset>
                    <legend>Les champs du profil</legend>
                    <label for="last_name" &gt;Nom&lt;/label>
                        <input id="last_name" name="last_name">

                        <label for="first_name">Prénom</label>
                        <input id="first_name" name="first_name">

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">

                </fieldset>
                <hr>
                <hr>
                <hr>


                <input type="submit" value="Valider et envoyer">

            </form>

        </section>
        <aside>

        </aside>
    </main>
    <footer>
        <nav>
            <ul>
                <li>
                    Accueil
                </li>
                <li>
                    Information
                </li>
                <li>
                    Contact
                </li>
            </ul>
        </nav>
    </footer>
</body>

</html>