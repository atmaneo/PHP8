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
// https://www.youtube.com/watch?v=lZ2iQzjtcFM&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=4
// suite V4 à 13 : 50 - TABLEAU multidimentionnel = des tableaux dans un tableau


    $tableauMulti = [
        0 => [
            "nom" => "OUENDA",
            "prenom" => "Atmane",
            "age" => 49
        ],
        1 => [
            "nom" => "HUGO",
            "prenom" => "Victor",
            "age" => 23
        ]
    ];


    // var_dump($tableauMulti);        
    var_dump($tableauMulti[1]["nom"]);    // accéder au nom de la 2ème personne      



    echo "</pre>";
    ?>
</body>
</html>