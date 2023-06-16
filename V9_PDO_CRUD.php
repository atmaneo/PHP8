<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// https://www.youtube.com/watch?v=2YWZZOMSPws&list=PLBq3aRiVuwyzPl8lh6lrdBXBnSpjLKwZi&index=9
// comment se connecter à la BDD, ici on va tt mettre ds le mm fichier, mais la bonne pratique est de séparer le code et de faire des inclusions

// on va définir des constantes d'environnement qui vont contenir les informat de connexion à ma BDD
    define("DBHOST","localhost");       // define permet de créer des constantes. la variable DBHOST sera mon serveur (localhost)
    define("DBUSER","root");            // user c l'utilisateur de ma BDD, sur mon serveur il s'appelle ROOT
    define("DBPASS","");                // sur mon serveur en local il n'y a pas de mdp
    define("DBNAME","tutos-php");       // DBNAME est le nom de ma BDD

// il y a 2 façons de se connecter à 1 BDD : mysqlli (le pbe si je veux changer pour Oracle, PostGreSql je ne pourrais PAS ! il faudra changer tout le code) et PDO (php data object, on est universel on pourra changer)
// pour PDO on va avoir besoin d'1 DSN de connexion, c 1 chaine de caractères qui va indiquer le chemin de la connexion (data source name)    

    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;      // ici le dsn est affecté à la variable $dsn

// on va se connecter à la base en utilisant le try catch car PDO va lever 1 exception (erreur) ki va pouvoir etre gérée par la suite.
// essaye de faire ce kil y a ds try et sinon gère le en faisant ce kil y a dans catch; 
    try{    
        $db = new PDO($dsn,DBUSER,DBPASS);              // on instancie PDO
        $db->exec("SET NAMES utf8");            // execute moi la req sql qui s'appelle SET_NAMES. c 1 req sql qui dit attent, ts les échanges entre mon php et ma BDD vont se faire en uft8
                                                // on s'assure d'envoyer les données en UTF8 (pour avoir les accents en BDD)
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                                                
    }catch(PDOException $e){                    // PDO va lever 1 exception kon va appeler $e
        die($e->getMessage());      // on utilise die pour arreter le php. getMessage est 1 méthode de l'objet PDOException (ici c de la POO)
    } 
                                                // ici on est connecté à la BDD, ça veut dire qu'on va pouvoir la lire, créer, MAJ, suppr
                                                // execution d'1 req ki va nous permettre de récupérer la liste des users
    $sql = "SELECT * from `users`WHERE id=3";

    $requete = $db->query($sql);                // on execute directemt la requete $sql (query)

     // on récupère les données en faisant un fetch (ou fetchAll)
    // $user = $requete->fetch();               // si je fais FETCH, je vais récupérer 1 valeur, le 1er de la BDD

    $user = $requete->fetch();                  // ici je récupères ts les enrg de la BDD            
    //var_dump($user["email"]);

    // AJOUTER UN UTILISATEUR
    /*$sql = "INSERT INTO `users`(`formation_id`, `email`,`roles`,`password`,`lastname`)  
            VALUES (1,'demo@nouvelle-techno.fr','[\"ROLE_ADMIN\"]','toto','AAAAAAAAAA')"; 
            
        $requete = $db->query($sql);            // on execute la requete
*/
    // MODIFIER UN USER
/*
    $sql = "UPDATE `users` SET `lastname` = 'BBBBBB' WHERE `id`= 51";

        $requete = $db->query($sql);            // on execute la requete
*/
        
    // SUPPRIMER UN USER
    /*
    $sql = "DELETE FROM `users` WHERE id = 51"; // info : l'opérateur de comparaison peut être remplacé par <, >

        $requete = $db->query($sql);            // on execute la requete
        */
    // SAVOIR COMBIEN DE LIGNES ONT ETE SUPPRIMEES
    echo $requete->rowCount();                  // m'affiche 1 car j'ai supprimé que le user id = 51

    
    ?>
</body>
</html>