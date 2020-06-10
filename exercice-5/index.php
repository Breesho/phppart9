<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 </title>
 

</head>
<body>

    <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>

    <?php

    $date1 = time();
    $date2 = strtotime("16-05-2016");
 
    $nbJours = ($date1 - $date2) / 86400 ;
  
    echo "Nombre de jours : " . $nbJours . ' jours ';
  
 ?>

</div>
</body>
</html>
