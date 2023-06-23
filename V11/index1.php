    <?php
    //https://www.youtube.com/watch?v=SdFANLAbsOc&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=12

    // ******************* CETTE VERSION DU FICHIER INDEX EST CELUI AVANT 09 : 50 ************************
    
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

        $lastname = "sanssase'; --";    // ceci est injection sql
        // $password = "toto";
        $password = "toto' OR 1=1; --"; // code dans le cas ou je ne connais pas le MDP, mais je veux voir sanssase


        $sql = "SELECT * FROM `users` WHERE `lastname` ='$lastname' AND `password` ='$password'";
        //$sql = "SELECT * FROM `users` WHERE `lastname` ='$sanssase' ; -- AND `password` ='$password'";

        $requete = $db->query($sql);
        $user = $requete->fetchAll();

        var_dump($user);

    // on inclut le footer
    include "includes/footer.php";
