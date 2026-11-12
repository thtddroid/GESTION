
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<a href="index.html" class="retour">Retour a Acceuil</a>

<h1>Liste des etudiants</h1>

<div class="table-container">
 <table>
 <thead>
 <tr>
   <th>id</th>
   <th>nom</th>
   <th>prenom</th>
   <th>age</th>
   <th>filiere</th>
  </tr>
  </thead>
<?php
require_once "connexion.php";

$sql= "SELECT * FROM etudiant";
$requete = mysqli_query($conn, $sql);
?>
<tbody>
<?php
while ($etudiant = mysqli_fetch_assoc($requete)){?>
	<tr>
	  <td><?= $etudiant["id"]?></td>
	  <td><?= htmlspecialchars($etudiant["nom"])?></td>
	  <td><?= htmlspecialchars($etudiant["prenom"])?></td>
	  <td><?= htmlspecialchars($etudiant["age"])?></td>
	  <td><?= htmlspecialchars($etudiant["filere"])?></td>
	</tr>
<?php
} 
?>
</tbody>
</table>
</div>
</body>
</html>