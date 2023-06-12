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

    $tableau =["Bonjour", 15, true, 58.15, "brouette", 45, false];       // déclarer 1 tableau - info : l'index permet d'accéder à 1 valeur bien particulière

    // ajouter des valeurs (à la fin en faisant un push) - pour info la plupart des fonctions sur les tableaux commencent par array
    array_push($tableau,"fin", "juillet");      // ici on ajoute 2 nvelles valeurs à la fin du tableau

    //var_dump($tableau);               // affiche toutes les valeurs du tableau

    // var_dump($tableau[1]);                 // affiche la valeur à l'indice 1 (soit ici 15)


    $tableau[] = "Septembre";           // la doc php PRECONISE cette syntaxe si l'on ajoute qu'1 seule valeur

    array_unshift($tableau,"début");    // ajouter 1 élément au début du tableau

    array_pop($tableau);                // maintenant SUPPRIMER des valeurs à la fin d'1 tableau (pop)

    $valeur = array_pop($tableau);      // je peux récupérer cette dernière valeur que j'ai supprimé (ci-dessus)

    $tableau2 = array_chunk($tableau,2); // diviser le tableau en plusieurs parties de 2 valeurs

    // var_dump($tableau2);             // en lien avec L 31

    shuffle($tableau); // mélanger 1 tableau de façon aléatoire (à chaque fois qu'on actualise le tableau change d'apparence)

    var_dump($tableau);



    echo "</pre>";
    ?>
</body>
</html>