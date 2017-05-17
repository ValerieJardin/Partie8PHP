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
        <p>Bonjour <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> !</p><br />
        <p>Il me semble que tu as <?php echo $_SESSION['age']; ?> !</p><br/>
        <p>Si tu veux aller sur une autre page clique sur le lien suivant ...  <a href="indexLink.php"> Surprise !</a></p>  
    </body>
</html>
<?php
//Fermeture de la session sans destruction des données
session_write_close();
?>

Correction :
<?php
// On démarre la session AVANT d'écrire du code HTML
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
        <!-- ## Exercice 2: Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre 
        le contenu des variables **nom**, **prenom** et **age** grâce aux sessions. Ces variables auront été définies
        directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.-->
        <div id="style">
            <!-- Ici je déclare les variables -->
            <?php
            $_SESSION['firstName'] = 'Audrey';
            $_SESSION['name'] = 'Lesterlin';
            $_SESSION['age'] = 35;
            ?>
            <a href="resultat.php">Ici se trouve le résultat de l'exercice</a>
            <a href="../index.php"><img src="../assets/img/fleche.png" id="arc" width="100" alt="Flèche de retour au menu"/></a>
        </div>
    </body>        
</html>
<?php
//Fermeture de la session sans destruction des données
session_write_close();
?>
