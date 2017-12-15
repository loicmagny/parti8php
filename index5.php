<?php
if (isset($_POST['login']) && isset($_POST['password']))
    setcookie('login', $_POST['login'] . '  ' . $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice 5 partie 8</title>
        <link rel="stylesheet" href="style5.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet"> 
    </head>
    <body>
        <h1>Exercice 5 partie 8</h1>
        <form method="post" action="index3.php">
            <label>Modifier le login<input type="text" name="login"/></label>
            <label>Modifier le mot de passe<input type="password" name="password"/></label>
            <button type="submit">Valider</button>
        </form>
        <a href="index.php" title="Accueil">Retour</a>
        <a href="index4.php">Exercice 4</a>
    </body>
</html>