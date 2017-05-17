<?php
// Utilisation de la fonction isset() pour vérifier que les différentes variables existent 
if (isset($_POST['login']) && isset($_POST['password'])) {
// Cookie correspondant au login
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true);
// Cookie correspondant au mot de passe
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 3 de la partie 8 en PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation 
        du formulaire, stocker les informations dans un cookie.-->
    </head>
    <body>
        <header>
<?php include '../index.php'; ?>
        </header>
        <form action="index.php" method="post">
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

Correction :
<?php
if (isset($_POST['userLogin']) && isset($_POST['userPassword'])) {
    // /!\ la fonction setcookie() est à placé avant la balise doctype !! /!\
    // Le dernier paramètre  true  permet d'activer le mode  httpOnly  sur le cookie, et donc de le rendre en quelque sorte plus sécurisé.
    setcookie('userLogin', $_POST['userLogin'], time() + 365 * 24 * 3600, '/', null, false, true);
    setcookie('userPassword', $_POST['userPassword'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 3</title>
        <meta charset="utf-8"/>
        <link href="../asset/css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <!-- 
        ******* ÉNONCÉ  *******
        Faire un formulaire qui permet de récupérer le login et le mot de passe de 
        l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.
        -->
        <h1><strong>Exercice 3</strong></h1>
        <div class="btn-group">
            <a type="button" class="btn btn-primary" href="../exercice1/index.php">exercice 1</a>
            <a type="button" class="btn btn-primary" href="../exercice2/index.php">exercice 2</a>
            <a type="button" class="btn btn-primary" href="index.php">exercice 3</a>
            <a type="button" class="btn btn-primary" href="../exercice4/index.php">exercice 4</a>
            <a type="button" class="btn btn-primary" href="../exercice5/index.php">exercice 5</a>
        </div>
        <div class="content">
            <form action="index.php" method="POST">
                <p><label>Login </label><input title="Login" type="text" name="userLogin"/></p>
                <p><label>Password </label><input title="Password" type="password" name="userPassword"/></p>
                <p><label></label><input type="submit"/></p>
            </form>
        </div>
    </body>
</html>
