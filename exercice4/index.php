<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 4 de la partie 8 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.-->
    </head>
    <body>
        <?php
        /** Utilisation de la fonction isset() pour vérifier que les différentes variables existent
         + utilisation de la fonction strip_tags qui permet d'effacer les balises HTMP **/
        if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
        ?>
        <p>Voici tes données de compte :<br />Ton login est : <?php echo strip_tags($_COOKIE['login']); ?> <br/>et ton mot de passe est :  <?php echo $_COOKIE['password']; ?></p>
        <?php } ?>
    </body>
</html>