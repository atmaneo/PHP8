<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";

    $tableau =["Bonjour", 15, true, 58.15];       // déclarer 1 tableau - info : l'index permet d'accéder à 1 valeur bien particulière

    // ajouter des valeurs (à la fin en faisant un push) - pour info la plupart des fonctions sur les tableaux commencent par array
    array_push($tableau,"fin");

    //var_dump($tableau);           // affiche toutes les valeurs du tableau
    var_dump($tableau);          // affiche la valeur à l'indice 1 (soit ici 15)
    echo "</pre>";
    ?>
</body>
</html>