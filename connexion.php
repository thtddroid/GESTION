<?php

$host="localhost";
$usr ="root";
$pass="";
$db  ="gestion_etudiant";
$port=3307;

$conn=mysqli_connect($host, $usr, $pass, $db, $port);
if (!$conn){
	die("echec connexion " . mysqli_connect_error());
}

