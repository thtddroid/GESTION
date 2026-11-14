<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "gestion_etudiant",
    3307
);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données");
}

$conn->set_charset("utf8mb4");
?>