<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// Création des session nom, prénom et âge
$_SESSION['firstname'] = 'Jean';
$_SESSION['lastname'] = 'BONNOT';
$_SESSION['age'] = 24;
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
        <p>Bonjour <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> !</p><br />
        <p>Il me semble que tu as <?php echo $_SESSION['age']; ?> !</p><br/>
        <p>Si tu veux aller sur une autre page clique sur le lien suivant ...  <a href="indexLink.php">Surprise !</a></p>  
    </body>
</html>