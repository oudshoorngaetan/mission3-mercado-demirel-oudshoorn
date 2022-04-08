<?php
include_once'../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/getLesImages.php';
$pdo = connexionBDD();
var_dump(getLesImages($pdo,1));