<?php 
function getLesBiens($pdo) {
    $insert = $pdo->prepare("SELECT biens.id,ville,type.libelle,"
            . "Prix FROM biens "
            . "JOIN type ON type.id=biens.idType");
    $execute = $insert->execute();
    $lesBiens = $insert->fetchAll();
    return $lesBiens;
}