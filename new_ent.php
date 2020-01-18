<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>Suivi de stages</title>
</head>
<body>

<form action="new_ent.php" method="post">   
    <p>    
        <label for="nom_ent"></label><input  placeholder="Nom Entreprise" type="text" name="nom_ent" id="nom_ent" require><br />
        <label for="id_ent"></label><input placeholder="ID Entreprise" type="number" name="id_ent" id="id_ent" required><br />  
        
        <input type="submit" value="Enregister">   
    </p>
</form>

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Test;charset=utf8', 't', 't');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$new_entreprise = 'INSERT INTO Entreprise (id_entreprise, nom_entreprise) VALUES(?, ?)';
$query = $bdd->prepare($new_entreprise);
$query->execute(array($_POST['id_ent'], $_POST['nom_ent']));

?>

</body>
</html>
