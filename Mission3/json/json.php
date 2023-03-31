<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/afficherbiens.php';
include_once '../modeles/accesBiens.php';
$pdo = null;
$pdo = connexionBDD();
$leBien = getLeBien($pdo, 1);

$json = array("bonjour" => "HoHoHo");
$jsonEncode = json_encode($json);
echo $jsonEncode .'<br>';

$jsonBien = array("ville" => $leBien['ville'], "superficie" => $leBien['superficie'].'m2', "nbpieces" => $leBien['nbpieces']);
echo json_encode($jsonBien).'<br>';

$jsonLesBiens = array();
$jsonAffichage = array();
foreach(getLesBiens($pdo) as $unBien){
    $json = array("id" => $unBien['id'], "ville" => $unBien['ville'], "type" => $unBien['libelle']);
    array_push($jsonLesBiens, $json);
}
array_push($jsonAffichage, array("lesBiens" => $jsonLesBiens));
echo json_encode($jsonAffichage);