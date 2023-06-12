<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function additionner($nb1, $nb2){
            echo $nb1 + $nb2;
        }
        function saluer ($salutation, $prenom, $nom){
            echo "$salutation $prenom $nom";
        }
        function saluer2 ($prenom, $nom, $salutation="HELLO"){
            echo "$salutation $prenom $nom";
        }
        function saluer3 ($prenom, $nom, $salutation="HELLO"){  //$salutation doit etre à la fin sinon KO
            echo "$salutation $prenom $nom";
        }


    ?>

    <p><?php additionner(12,52); ?></p>     <!-- pbe ça ne s'affiche pas dans le navigateur, ds le terminal oui :(  -->
    <p><?php additionner(1,10); ?></p>
    
    <h1><?php saluer("Bonjour", "Atmane", "OUENDADJI") ?></h1>      <!-- pbe ça ne s'affiche pas dans le navigateur, ds le terminal oui :(  -->
    <h1><?php saluer2("Atmane", "OUENDADJI") ?></h1>

    <!-- si qd j'appelle 1 fonct j'oubli 1 argument (bonjour par ex) j'ai 1 msg d'erreur SAUF si je précise 1 argument par défaut voir 
    saluer2. l'astuce est de mettre cet argument à la fin (pas au début sinon génère 1 erreur)  MAIS ce n'est pas la solution car je 
suis obligé d'avoir mon argument à la fin, VOICI LA SOLUTION voir saluer3, c possible depuis php8, ils appelle ça les arguments nommés  -->
    <h1><?php saluer3(prenom: "Atmane3", nom: "OUENDADJI3") ?></h1>  

</body>
</html>