<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/getPasswordHash.php';

$pdo = connexionBDD();
$mdp = getPasswordHash($pdo, 1);
var_dump($mdp);
var_dump(password_verify('azerty', $mdp));