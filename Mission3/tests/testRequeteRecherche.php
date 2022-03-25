<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/requeteRecherche.php';
$pdo = connexionBDD();
var_dump(rechercheBiens($pdo,1,''));