<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // pour comparer : ==, ===, <, <=, >, >=, !=,
        // !== strictement différent (en valeur et en type)

        /*$reponse = true;      //exemple 1
        if($reponse){   // cette ligne peut être remplacée par : if($reponse){}, ce sera idem

            echo "Bravo";
        }else {
            echo "puni";
        }*/

        /*$variable = 15;            // exemple 2 ATTENTION si je compare 15 et "15" il affichera Egal, la comparaison porte sur la valeur et non sur le type
        if($variable == 15){       // si je veux comparer le type il faudra mettre === et non == (voir exemple 3)
            echo "Egal";
        } else {
            echo "Différent";
        }*/

        /*$variable = 15;
        if($variable === "15"){         //  égal en valeur et en type qd j'utilise ===
            echo "Egalité";
        }else {
            echo "PAS égalité";
        }*/

        // inférieur
        /* $variable = 150;
        if($variable < 17){
            echo $variable." est plus petit";
        } else {
            echo $variable." est plus grand ou égal";
        }*/

        // opérateur combine <=> RENVOI -1 (si a < b), 0 (si a = b), 1 (si a > b)   environ 13 : 00 - l'opérateur combiné è l'équivalent du SWITCH
        /*$a = 58;
        $b = 17;
        echo ($a <=> $b);*/

    /*    $animal ="Perroquet";
            switch($animal){
                case "Chat":
                    echo "Félin";
                    break;              // Règle : break est obligatoire
                case "Poisson rouge":
                    echo "Poisson";
                    break;
                case "Perroquet":
                    echo "Oiseau";
                    break;
            }   */

    $a = 15;
    $b = 10;

    switch ($a <=> $b) {
        case -1:
            echo "a plus petit que b";
            break;
        
        case 0:
            echo "a égal b";
            break;
        case 1:
            echo "a plus grand que b";
            break;
    }
    ?>
</body>
</html>