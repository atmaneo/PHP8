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
    // $nombre =10.56;         // renvoi float
    // var_dump($nombre);

    $nombre1 = 14;
    $nombre2= 86;
    // addition
    $resultat = $nombre1 + $nombre2;

    // soustraction
    $resultat = $nombre1 - $nombre2;

    // multiplication
    $resultat = $nombre1 * $nombre2;

    // division
    $resultat = $nombre1 / $nombre2;

    // cumul opérations
    $resultat = $nombre1 + $nombre2 / 5;    // la division est faite en 1er puis l'addition

    // changement des priorités avec les parenthèses
    $resultat = ($nombre1 + $nombre2) / 5;    // la division est faite en 1er puis l'addition

    // modulo -> sert à savoir si 1 nombre est multiple d'1 autre. Si le modulo est 0 alors OUI. Pour info, c utile dans les compte à rebours
   // $resultat = $nombre2 % $nombre1;        // renvoi int(1)

    // incrémenter
    // $nombre1 = $nombre1 +1;

    // incrémenter V2       ++ ou -- pour incrémenter ou décrémenter que de 1 
    $nombre1 = $nombre1 +=1;

    // incrémenter V3
    // $nombre1++;

    // incrémenter V4 - technique !!!
    ++$nombre1;

    // var_dump(++$nombre1);   // il ajoute 1 puis affiche le résultat
    // var_dump($nombre1++);   // il affiche le résultat puis ajoute 1

    var_dump($nombre1);


    
    ?>
</body>
</html>