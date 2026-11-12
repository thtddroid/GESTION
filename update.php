<?php 

require_once "connexion.php";

$id=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$filere=$_POST["filere"];
$age=$_POST["age"];

if (empty($_POST["id"]) || empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["filere"]) || empty($_POST["age"])){
	die ("Information manquant !!");
}
$sql = "UPDATE etudiant SET nom=?, prenom=?, filere=?, age=? WHERE id =?";
$requete = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($requete, "sssii", $nom,$prenom,$filere,$age,$id);

if (mysqli_stmt_execute($requete) ){
	header ("location: index.html");
	exit;
}
else{
	echo "echec modification ".mysqli_stmt_error($requete);
}