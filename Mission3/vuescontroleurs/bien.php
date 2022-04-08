<?php

include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
$leBien = $_POST["bien"];
if ($leBien != 0) {
    include_once '../modeles/mesFonctionsAccesBDD.php';
    include_once '../modeles/afficherbiens.php';
    $pdo = connexionBDD();
    $LEBien = getLeBien($pdo, $leBien);
    var_dump($LEBien);
}
include_once'../inc/piedDePage.inc';
?>
