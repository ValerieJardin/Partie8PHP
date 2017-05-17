<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 2 de la partie 8 en PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables
        nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.Il faudra 
        afficher le contenu de ces variables sur la deuxième page.-->
    </head>
    <body>
        <header>
            <?php include '../index.php'; ?>
        </header>
        <p>Re-Bonjour <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> !</p><br />
        <p>Es-tu toujours âgé de  <?php echo $_SESSION['age']; ?> ?</p><br/>
        <div class="img"><img class="picture" src="../img/couple.gif" alt=""/><br/></div>
        <p>Retour à la page précédente : <a href="index.php">Retour</a></p>
    </body>
</html>
<?php
//Détruit les données de la session
session_unset();
//Destruction de la session
session_destroy();
?>

Correction :
<?php
//Je n'oublie pas de de réecrire ma session start sur la page cible de mon exo
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet"> 
        <link href="../assets/style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 2</title>
    </head>
    <body>
        <div id="style">
            <?php
            if (isset($_SESSION['firstName']) && isset($_SESSION['name']) && isset($_SESSION['age'])) {
                //Et je fait un classique echo pour afficher le résultat
                echo 'Bonjour ' . $_SESSION['firstName'] . ' ' . $_SESSION['name'] . ' tu as ' . $_SESSION['age'] . ' ans!';
            }
            ?>
            <a href="../index.php"><img src="../assets/img/fleche.png" id="arc" width="100" alt="Flèche de retour au menu"/></a>
        </div>
    </body>        
</html>
<?php
//Détruit les données de la session
session_unset();
//Destruction de la session
session_destroy();
?>
