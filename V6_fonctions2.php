<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- suite de la vidéo à environ 14 : 00 https://www.youtube.com/watch?v=iRVcXRhKW3U&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=6  -->
<!-- RAPPEL / tt ce ki è après return n'est jamais executé, le return sort de la fonction  -->
<body>

    <?php

    /**
     * 16 : 00 Permet de documenter mon code, il suffit de taper /**, ainsi qd j'appelle la fonct elle sera documentée TOP
     * cette pratique est RECOMMANDEE, qd qqun reprend derriere le code !!!
     * Permet de calculer la somme de 2 valeurs
     * @param float $nb1 permier nombre
     * @param float $nb2 deuxième nombre
     * @return float somme des 2 nombres
     */
        function additionner($nb1, $nb2){
            return $nb1 + $nb2;             // on remplace echo par return
        }
        $total = additionner(45,10);
        var_dump($total);
    ?>

    <p><?php additionner(12,52); ?></p>

</body>
</html>