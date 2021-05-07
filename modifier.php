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
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}


catch (Exception $e) // Si il y a une erreur
{
die('Erreur : ' . $e->getMessage()); // Alors ca me retourne un message m'informant la provenance de cette erreur Exemple : Base 'Connexionn' inconnue | Un n en trop à la fin et se n'est plus la bonne base de donnée
}
?>

    
 
   <?php
        if(isset($_POST["etage"]) && isset($_POST["prix"]) && isset($_POST["position"]) && isset($_POST["date"]) && isset($_POST["id"])) {
            $etage=$_POST["etage"];
            $prix=$_POST["prix"];
            $date=$_POST["date"];
            $position=$_POST["position"];
            $id=$_POST["id"];

            $sql = "UPDATE ampoule SET Etage='{$etage}', Prix_ampoule='{$prix}' , Position='{$position}' , Date_changement='{$date}' WHERE id='{$id}'";
            $h = $bdd->exec($sql);

            header('Location: historique.php');
        }
     else {
         if(!isset($_GET['id']))
         echo "il manque un argument";
     }
     
?>
  
    <form action="modifier.php" method="Post">

<label> Date de l'intervention:</label>
 <input type ="date" name="date" required >
 <br> <br> 

 <label> Etage du changement:</label>
 <input type ="number" name="etage"  min="0" max="11" required>
 <br> <br> 

 <label> Prix de l'ampoule:</label>
 <input type ="number" name="prix" required>
 <br> <br> 

 <label> Position de l'ampoule:</label>
 <select name="position"> 
     <option value="1"> Devant </option>
     <option value="2"> A gauche </option>
     <option value="3"> A droite </option>
    <option value="4"> Au fond  </option>
    <br> <br>

   </select>
   <input type="hidden" name="id" value="<?php if(isset($_GET["id"])) echo $_GET["id"];?>">
 <br> <input type="submit" value="Modifier" >

 <br> <br>

 </form>
 <script type="text/javascript" language="javascript">
  if (confirm("Vous désirez vraiment modifier?")) {
    alert("oui")
  }
  else {
    alert("non")
  }
</script>
 

