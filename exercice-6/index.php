<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 </title>
 

</head>
<body>

    <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>



    <?php
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); 
        echo "There were {$number} jours dans le mois de février";
    ?>

</div>
</body>
</html>
