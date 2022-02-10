<?php

$nom = filter_input(INPUT_POST, "nom");
$mail = filter_input(INPUT_POST, "mail");
$sujet = filter_input(INPUT_POST, "sujet");
$message = filter_input(INPUT_POST, "message");

include_once "../config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD
    , Config::UTILISATEUR, Config::MOTDEPASSE);
//préparation de la requête
$requete = $pdo->prepare("insert into contact (NomPrenom,mail,sujet,message) values (:nom,:mail,:sujet,:message)");
$requete->bindParam(":nom", $nom);
$requete->bindParam(":mail", $mail);
$requete->bindParam(":sujet", $sujet);
$requete->bindParam(":message", $message);
$requete->execute();



