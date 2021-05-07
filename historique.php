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

<table> 
    <tr>
        <th>Date de changement</th>
        <th>Etage</th>
        <th>Position</th>
        <th>Prix des ampoules</th>
        <!-- <th>Supprimer</th>
        <th>Modifier</th> -->

    </tr>
    

    <?php


$sql = "SELECT * FROM ampoule";
    foreach ($bdd -> query($sql) as $row) {
        echo "<tr>";

        echo '<td>'. $row ["Date_changement"]   . '</td>';
        echo '<td>' . $row ["Etage"] . '</td>' ;
        echo '<td>' . $row ["Position"]  . '</td>';
        echo '<td>' . $row ["Prix_ampoule"]  . '</td>';
        echo  '<td> <a href="supprimer.php?id='. $row ["id"] .'">Suppprimer</a> </td>';
        echo  '<td> <a href="modifier.php?id='. $row ["id"] .'">Modifier</a> </td>';

        // echo '<td> Modifier </td>';
        echo "<br>";
        echo "</tr>";
        
    } ; 
    ?>
   



    
    
</table>
</body>
</html>
