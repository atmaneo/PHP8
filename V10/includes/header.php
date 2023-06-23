<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- le header apparait dans toutes les pages, le titre est dynamique grace à 1 variable. Dans chaque
    page la variable $titre est diff. La page articles affiche "Liste des articles", la page index affiche
    "Accueil" ...  -->
    <title><?=$titre ?? "Accueil" ?></title>    <!-- opérateur de fusion/coalescence des nulls. Ici si titre est null affiche "Accueil"-->

</head>
<body>