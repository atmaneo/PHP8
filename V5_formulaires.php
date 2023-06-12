<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <!--Débuter en PHP - Utiliser les formulaires en méthode GET (PHP8)
     https://www.youtube.com/watch?v=h2Edgd7QSoc&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=5
     on enlève l'attribut action ajouté par défaut car le fichier sera traité ici -->

    <form method="get">      <!-- métode qui nous permet de transmettre nos informations de frm directement par l'intermédiaire de l'URL 
                             (de l'adresse de la page) et non pas de façon cachée. a ne pas utiliser avec des info "confidentielles"-->
            
        <div>
            <label for="nombre1">Nombre 1 :</label>
            <input type="number" id="nombre1" name="nb1">   <!-- toujours mettre l'attribut name dans les champs de vos frms-->
        </div>
            <label for="nombre2">Nombre 2 :</label>
            <input type="number" id="nombre2" name="nb2"> 
        <div>

            <button type="submit">Calculer</button>
        </div>
    </form>
<?php
    $total = $_GET["nb1"] + $_GET["nb2"];
    echo "<p>Total : $total</p>";
    // l'idée du GET c kil va aller lire directement le contenu de notre url.
    // on a 1 frm avec des champs, on récupère avec get la valeur des chps
    

?>


</body>
</html>