<?php

// Connexion à la base de données

try
{
$bdd = new PDO('mysql:host=localhost;dbname=ampoules;charset=utf8', 'root', ''); // Je me connecte en PDO à ma base de donnée MySql
}

catch (Exception $e) // Si il y a une erreur
{
die('Erreur : ' . $e->getMessage()); // Alors ca me retourne un message m'informant la provenance de cette erreur Exemple : Base 'Connexionn' inconnue | Un n en trop à la fin et se n'est plus la bonne base de donnée
}


    
   // Vérifier si le formulaire est soumis 

     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $date = $_POST['date']; 
     $etage = $_POST['etage']; 
     $position = $_POST['position'];
     $prix = $_POST['prix'];
     
     // afficher le résultat
     echo '<h3>Données transmises à la base de données </h3>'; 
     $bdd->exec("INSERT INTO ampoule(Date_changement, Etage, Position, Prix_ampoule) VALUES('$date','$etage','$position', '$prix')");
   
//   }
header('Location: db.php');
sleep(4);
header('Location: historique.php');
?>
    


           
