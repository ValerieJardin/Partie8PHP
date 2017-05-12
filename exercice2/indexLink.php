<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 2 de la partie 8 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables
        nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.Il faudra 
        afficher le contenu de ces variables sur la deuxième page.-->
    </head>
    <body>
        <p>Re-Bonjour <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> !</p><br />
        <p>Es-tu toujours âgé de  <?php echo $_SESSION['age']; ?> ?</p><br/>
        <img class="picture" src="../img/couple.gif" alt=""/><br/>
        <p>Retour à la page précédente : <a href="index.php">Retour</a></p>
    </body>
</html>