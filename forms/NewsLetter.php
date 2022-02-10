<?php

$mail = filter_input(INPUT_POST, "email");

include_once "../config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD
    , Config::UTILISATEUR, Config::MOTDEPASSE);
//préparation de la requête
$requete = $pdo->prepare("insert into newsletter (mail) values (:email)");
$requete->bindParam(":email", $mail);
$requete->execute();

echo "Félicitation";

header("location: ../index.html");



