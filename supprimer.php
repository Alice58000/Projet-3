<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   

    <title>Projet Ampoule</title>

</head>
<body>
    <div>
        <h3>Historique </h3>
        <img src="ampoule.png" width="200px" height="200px" alt="ampoule"> 
        
    </div>
    <ul class="menu">
        <li>
            <a href="index.php">Formulaire</a>
            <a href="historique.php">Historique</a>
        </li>
    </ul>


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

?>
<!--     
   // Vérifier si le formulaire est soumis 

     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */ -->

       <script type="text/javascript" language="javascript">
  if (confirm("Vous désirez vraiment supprimer?")) {
    alert("oui")
  }
  else {
    alert("non")
  }
</script>


 <?php
       echo ("<script LANGUAGE='JavaScript'>
       window.alert('La suppression a bien fonctionné');
       window.location.href='historique.php';
       </script>");
   ?>
   <?php
   //Tu recuperes l'id du contact
   $id = $_GET["id"];
   //Requete SQL pour supprimer le contact dans la base
       $bdd->exec("DELETE FROM ampoule WHERE id = '$id'" );

       

   //Et la tu rediriges vers ta page  pour rafraichir la liste
?>
