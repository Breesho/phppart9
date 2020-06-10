<?php

setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 9 - Exo 3</title>
</head>

<body>

    <h1>Exercice3</h1>
    <p>
        Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
        Bonus : Le faire en français.
    </p>

    <p><?= strftime("%A %d %B %G") ?></p>
    
</body>
</html>