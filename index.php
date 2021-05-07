<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    


    <title>Projet Ampoule</title>

</head>
<body>
    <div>
        <h3>Formulaire </h3>
        <img src="ampoule.png" width="200px" height="200px" alt="ampoule"> 
        
    </div>
        <ul class="menu">
            <li>
                <a href="index.php">Formulaire</a>
                <a href="historique.php">Historique</a>
            </li>
        </ul>
        <section>
            <div class="formulaire">
                <h2> Gestion des ampoules </h2>
                <br>
                <form action="db.php" method="Post">

                    <label> Date de l'intervention:</label>
                    <input type ="date" name="date" required>
                    <br> <br> 

                    <label> Etage du changement:</label>
                    <input type ="number" name="etage"  min="0" max="11" required>
                    <br> <br> 

                    <label> Prix de l'ampoule:</label>
                    <input step ="0.01" type ="number" name="prix" required>
                    <br> <br> 

                    <label> Position de l'ampoule:</label>
                    <select name="position"> 
                        <option value="1"> Devant </option>
                        <option value="2"> A gauche </option>
                        <option value="3"> A droite </option>
                        <option value="4"> Au fond  </option>
                        <br> <br>
                        </select>
                   <br> <input type="submit" value="Envoyer">
                    <br> <br>
               
                </form>

 

</div>
</section>



</body>
</html>