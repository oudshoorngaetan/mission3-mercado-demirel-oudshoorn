<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once'../modeles/ajoutCompte.php';
$pdo = connexionBDD();
$email = "basile.mercado@gmail.com";
$pwd = "azerty";
$pwd = password_hash($pwd, PASSWORD_DEFAULT);
var_dump($pwd);
var_dump(ajoutCompte($pdo,$email,$pwd));