<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/fonctionSupprimerBien.php';
$pdo = connexionBDD();
$supprimer = supprimerBien($pdo,16);
var_dump($supprimer);