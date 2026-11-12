<?php 
require_once "connexion.php";

$id = $_POST["id"];

if (empty($_POST["id"])){
	die("id manquant");
}

$sql= "DELETE FROM etudiant WHERE id=?";
$requete = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($requete, "i" , $id);
if (mysqli_stmt_execute($requete)){
	header("location: formulaire2.html");
	exit;
}

else {
	echo "echec de la suppression (id non trouve) : " . mysqli_stmt_error($requete);
}