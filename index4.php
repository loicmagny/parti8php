<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice 4 partie 8</title>
        <link rel="stylesheet" href="style4.css">
        <link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet"> 
    </head>
    <body>
        <h1>Exercice 4 partie 8</h1>
        <?php
        if (isset($_COOKIE['login'])) {
            echo 'Bonjour ' . $_COOKIE['login'] . ' !';
        } else {
            echo 'Il n\'y pas de cookie';
        }
        ?>
        <a href="index.php" title="Accueil">Retour</a>
    </body>
</html>
