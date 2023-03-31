<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/requeteRecherche.php';
$pdo = connexionBDD();
var_dump(rechercheBiens($pdo,3,'Tourcoing',0,365000,1));