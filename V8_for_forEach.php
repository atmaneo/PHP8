<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // https://www.youtube.com/watch?v=STBmuYTsFMk&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=8

        /*for($nombre =1; $nombre <=10; $nombre++) {
            echo "<p>$nombre</p>";
    }*/

    /*for($nb=0 ; $nb <=100; $nb +=5){
        echo "<p>$nb</p>";
    }*/

    /*for($n1=100 ; $n1 >0; $n1-=5){
        echo "<p>$n1</p>";
    }*/

    // ici on va parcourir les éléments d'1 tableau, il y a diff façons (en fonct de sa taille)
    $clients = [            // IMPORTANT : $clients est la variable qui contient tous les éléments du tableau
        "ref1" => [
            "nom" => "HUGO",
            "prenom" => "Victor"
        ],
        "ref2" => [
            "nom" => "DURAS",
            "prenom" => "Margueritte"
        ]
    ];
    // echo sizeof($clients);      // affiche la taille de mon tableau

    /*
    foreach($clients as $client){       // foreach est la meilleure (+ simple) structure pour parcourir les éléments d'1 tableau
        // var_dump($client);           // on peut faire ça
        // echo "<p>{$client["nom"]}</p>";              // ou ça
        echo "<p>{$client["prenom"]} {$client["nom"]}</p>";    // ou meme ça !! , INFO : on met les accolandes car on fait une injection de variable

    }*/

    // il existe une 3ème méthode (mieux), ici on voudrait récupérer réf1 et ref2
    // LA FIN DE LA VIDEO EST TRES IMPORTANTE SUR L'ASSOCIATION D'1 CLE et d'1 valeur
    // ICI la viariable $REF est la clé pour chaque client
    
    foreach($clients as $ref=> $client){
        echo "<p>Référence client : $ref</p>";
        echo "<p>{$client["prenom"]} {$client["nom"]}</p>";    // ou meme ça !! , INFO : on met les accolandes car on fait une injection de variable

    }

    ?>
</body>
</html>