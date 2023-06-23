<?php
    // https://www.youtube.com/watch?v=-_CKbVev_qA&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=10
    // imagions ke je veux 1 navBar sur ttes mes pages
    
    // on définit le titre
    $titre = "Liste des articles";

    // on inclut le header
    include "includes/header.php";

    // on inclut la navbar
    include "includes/navbar.php";

    // entre les 2 navbar on inclut le contenu de la page. NE PAS oublier de fermer la balise php et de la rouvrir !!!
    ?>

    <p>Contenu de la page articles. Ici on est en dehors des balises php.<br /> 
    Ce contenu est propre à la page <b>articles</b>. Il ne s'affiche pas sur les autres pages !</p>

    <?php

    // on inclut le footer
    include "includes/footer.php";
