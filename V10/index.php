    <?php
    // https://www.youtube.com/watch?v=-_CKbVev_qA&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=10
    // imagions ke je veux 1 navBar sur ttes mes pages
    
    // on inclut le fichier functions.php
    // include_once "includes/functions.php";    // on peut mettre ce code ou ...
        require "includes/functions.php";       // ... ce code. met 1 erreur fatale et stop l'exécution
        require_once "includes/functions.php"; // mme si je mets @require, il enlève le warning mais pas l'erreur fatale
        @require_once "includes/functions.php"; // ... reste, le code est bloqué. Conseils : utiliser require_once
    // on définit le titre
    $titre = "Accueil";
    
    // on inclut le header
    include "includes/header.php";

    // on inclut la navbar
    include_once "includes/navbar.php";     // inclut 1 seule fois navbar
    include_once "includes/navbar.php";

    // entre les 2 navbar on inclut le contenu de la page. NE PAS oublier de fermer la balise php et de la rouvrir !!!
    ?>

    <p>Contenu de la page d'accueil. Ici on est en dehors des balises php.<br /> 
    Ce contenu est propre à la page <b>index</b>. Il ne s'affiche pas sur les autres pages !</p>

    <?php
    verifForm();

    // on inclut le footer
    include "includes/footer.php";
