<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
$pdo = connexionBDD();
$lesBiens = affichageBiens($pdo);
var_dump($lesBiens);