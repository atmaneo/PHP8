<?php
if (isset ($_post ['ok'])) {
    $prenom = $_post['prenon'];
    $nom = $_post ['nom'];
    $auteur = "$prenom $nom";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title>Saisie1</title>
        <style>
        label {display: block; width: 60px; float: left;}
        </style>
    </head>
<body>  
    <!--348 CH 6 ecrire un script PHP qui affiche un frm permettant de saisir le prenom et le nom d'un auteur-->  
    <!-- Formulaire de saisie de l'auteur -->
    <form action ="saisie1.php" method ="post">
    <div>
        <b>Prenom et nom du nouvel auteur : </b>
        <br /><label>Prenom</label>
        <input type="text" name="prenon" size="40" maxlength="40" autofocus="autofocus"/>
        <br /><label>Nom</label>
        <input type="text" name="nom" size ="40" maxlength = "40"/>
        <br />
        <input type="submit" name="ok" value= "Enregistrer" />
    </div>
    </form>
</body>
</html>





