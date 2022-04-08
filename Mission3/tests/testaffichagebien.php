<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/afficherbiens.php';
$pdo = connexionBDD();
$leBien = getLeBien($pdo, 1);
var_dump($leBien);
