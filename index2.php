<?php
session_start();
$_SESSION['prenom'] = 'Loïc';
$_SESSION['nom'] = 'Magny';
$_SESSION['age'] = 20;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 2 Partie 8</title>
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css?family=Smokum" rel="stylesheet"> 
    </head>
    <body>
        <p>Bonjour, <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?>, comment ça va? Tu as <?php echo $_SESSION['age']; ?> ans</p>
        <a href="user.php">Suite de l'exercice</a>
        <a href="index.php">Retour</a>
    </body>
</html>
