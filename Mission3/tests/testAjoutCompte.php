<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once'../modeles/ajoutCompte.php';
$pdo = connexionBDD();
$nom = 'Oudshoorn';
$prenom = 'Gaetan';
$email = "gaetan.oudshoorn@gmail.com";
$pwd = "azerty";
$pwd = password_hash($pwd, PASSWORD_DEFAULT);
var_dump($pdo);
var_dump($nom);
var_dump($prenom);
var_dump($email);
var_dump($pwd);
var_dump(ajoutCompte($pdo, $nom,$prenom,$email, $pwd, 1));