<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/accesBiens.php';
$pdo = connexionBDD();
$lesBiens = getLesBiens($pdo);
var_dump($lesBiens);