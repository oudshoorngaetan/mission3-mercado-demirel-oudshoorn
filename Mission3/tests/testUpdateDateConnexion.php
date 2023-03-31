<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/updateDateConnexion.php';
$pdo = connexionBDD();
$id = 1;
var_dump(updateConnexion($pdo, $id));

