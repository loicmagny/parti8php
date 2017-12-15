<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 2 partie 8 suite</title>
        <link rel="stylesheet" href="style2.css"> 
        <link href="https://fonts.googleapis.com/css?family=Smokum" rel="stylesheet"> 
    </head>
    <body>
        <p>Re <?php echo $_SESSION['prenom'] . '  ' . $_SESSION['nom']; ?>, ça va toujours? Rappelle toi, tu as <?php echo $_SESSION['age']; ?> ans</p>
        <a href="index2.php">Retour à l'exercice</a>
        <a href="index.php">Retour au menu</a>
    </body>
</html>
