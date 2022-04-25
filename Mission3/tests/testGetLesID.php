<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/getLesID.php';
$pdo = connexionBDD();
$lesID = getLesID($pdo);
var_dump($lesID);