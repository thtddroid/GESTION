<?php 

require_once "connexion.php";
echo "connexion reussie!!!";
$age=$_POST["age"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$filere=$_POST["filere"];


if (empty($_POST["nom"]) || empty($_POST["age"]) || empty($_POST["prenom"]) || empty($_POST["filere"])){
	die("tout les champs doivent etre rempli");
}


$sql= "INSERT INTO etudiant (age, nom, prenom, filere) VALUES (?,?,?,?)";
$requete = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($requete, "isss", $age,$nom,$prenom,$filere);
	
if (mysqli_stmt_execute($requete)){
	header("location: index.html");
	exit;
}else{
	echo "erreur ajout " . mysqli_stmt_error($requete);
}
?>