<?php
include_once'../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/afficherbiens.php';
$pdo = connexionBDD();
$ID = 1;
var_dump(getLeBien($pdo,$ID));