<?php
// Utilisation de la fonction isset() pour vérifier que les différentes variables existent 
if (isset($_POST['login']) && isset($_POST['password'])) {
// Cookie correspondant au login
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true);
// Cookie correspondant au mot de passe
setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 5 de la partie 8 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.-->
    </head>
    <body>
        <form action="#" method="post">
            <p>Données du compte :</p>
            Login :<br>
            <input type="text" name="login" placeholder="Votre login">
            <br/>
            Mot de passe :<br/>
            <input type="text" name="password" placeholder="Votre mot de passe">
            <br/><br/>
            <input type="submit" value="Envoyer">
        </form>  
    </body>
</html>