<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/fonctionSupprimerBien.php';
$pdo = connexionBDD();
$supprimer = supprimerBien($pdo,14);
var_dump($supprimer);