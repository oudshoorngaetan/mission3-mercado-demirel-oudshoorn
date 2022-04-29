<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/fonctionModifierBien.php';
$pdo = connexionBDD();
var_dump(modifierBien($pdo,11,"Test12",2,150000,"Aled",550,9,0));