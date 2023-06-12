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
// suite V4 à 12 : 20 - TABLEAU ASSOCIATIF - on associe 1 étiquette à 1 valeur

    $tableau =["Bonjour", 15, true, 58.15, "brouette", 45, false];       // déclarer 1 tableau - info : l'index permet d'accéder à 1 valeur bien particulière

    $tableauAsso = [
        "nom" => "OUENDA",
        "prenom" => "Atmane",
        "age" => 49
    ];


    var_dump($tableauAsso["nom"]);            // si je veux que le nom de la personne

    //var_dump($tableauAsso);        


    echo "</pre>";
    ?>
</body>
</html>