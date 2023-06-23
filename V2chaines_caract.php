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
    // https://www.youtube.com/watch?v=GTlWnub31SQ&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=2
    // ici traitement des chaines de caractères
    // une ligne se termine tjrs par ' ; '
        $chaine = "Ceci est une chaine de caractères";

        // echo $chaine;

        // echo $chaine[3];         // afficher un caractère particulier de la chaine en précisant son index entre []

        //$chaine[0] = "F";                     // je peux modifier 1 caractère de la chaine
        //echo $chaine;

        // echo substr($chaine,0,4);            // extraire une partie de la chaine

        // var_dump(substr($chaine,0,4));       // ici var_dump donne le type

        // ATTENTION - INFO : le mot chaîne contient 7 caractères et NON 6 (le î vaut 2 caractères)

        //echo substr($chaine,-11);             // extraire les caractères en partant de la fin (affiche le mot caractères)

        // echo $chaine = str_replace('Ceci','Cela',$chaine)   // remplacer 1 partie de la chaîne. attention il est case sensitive (MIN et MAJ) 
    
        // str_ireplace = str_replace, la diff la 1ère n'est pas sensible à la casse !!!

        // var_dump(str_contains($chaine,'brouette'));     // est ce que ma chaine contient 1 autre chaine (renvoi true ou false)

        // var_dump(str_contains($chaine,'une'));      // renvoi true

        // var_dump(str_starts_with($chaine,'Ce'));        // ATTENTION sensible à la casse

        // var_dump(str_ends_with($chaine,'res'));
        // var_dump(trim($chaine,'/'));             // trim suppr certains caractères au début et à la fin (ex ?,/...)

        
    
    ?>
    
</body>
</html>