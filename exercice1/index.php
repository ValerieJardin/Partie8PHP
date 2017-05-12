<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 1 de la partie 8 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--
        Faire une page HTML permettant de donner à l'utilisateur :
            - son User Agent
            - son adresse ip
            - le nom du serveur 
        -->
    </head>
    <body>
        <!--Utilisation de la variable superglobale $_SERVER[]-->
        <p class="position">Votre User Agent : <?php echo $_SERVER['HTTP_USER_AGENT']; ?><p>
        <p class="position">Voici votre adress IP : <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
        <p class="position">Le nom de votre serveur : <?php echo $_SERVER['SERVER_NAME']; ?></p>    
    </body>
</html>