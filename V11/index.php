    <?php
    //https://www.youtube.com/watch?v=SdFANLAbsOc&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=12

// ******************* CETTE VERSION DU FICHIER INDEX EST CELUI APRES 09 : 50 ************************
// le début de la vidéo est dans le fichier index.php

    // on inclut le fichier functions.php
        require_once "includes/functions.php"; 
        
    $titre = "Accueil";
    
    // on inclut le header
    include "includes/header.php";

    // on inclut la navbar
    include_once "includes/navbar.php";     // inclut 1 seule fois navbar

    // entre les 2 navbar on inclut le contenu de la page. NE PAS oublier de fermer la balise php et de la rouvrir !!!
    ?>

    <p>Contenu de la page d'accueil. Ici on est en dehors des balises php.<br /> 
    Ce contenu est propre à la page <b>index</b>. Il ne s'affiche pas sur les autres pages !</p>

    <?php

        require_once "includes/connect.php";

        $lastname = "nouv";
        $password = "titi";

        $sql = "SELECT * FROM `users` WHERE `lastname` =:lastname AND `password` =:password";
// 1 - on va préparer la req, on va lui dire attention j'ai 1 req ki arrive et je vais y mettre des infos, pour ça on utilise
// prepare et non query
        $requete = $db->prepare($sql);

// 2 - on injecte les valeurs en utilisant la fonct° bindvalue (c 1 fonct° de PDO) ki nous permet de dire à tel endroit 
// tu vas mettre telle valeur (l'avantage de bindvalue est que va préciser le type de la donnée kon va lui passer) ainsi
// il va protéger/échapper les infos

$requete->bindValue(":lastname", $lastname,PDO::PARAM_STR);
$requete->bindValue(":password", $password,PDO::PARAM_STR);

// 3 - on EXECUTE la req préparée
        $requete->execute();


        $user = $requete->fetchAll();
        var_dump($user);

    // on inclut le footer
    include "includes/footer.php";
