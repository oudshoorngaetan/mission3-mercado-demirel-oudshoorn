<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/rechercheBiens.php';
$pdo = connexionBDD();
$lesTypes = getTypes($pdo);
var_dump($lesTypes);