<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/fonctionAjoutBien.php';
$pdo = connexionBDD();
$ajout = ajoutBien($pdo,'Description d\'un local',3,400000,'Toulouse',270,15);
var_dump($ajout);