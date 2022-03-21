<?php
function getVilles($pdo) {
    $insert = $pdo->prepare("SELECT DISTINCT ville FROM biens");
    $execute = $insert->execute();
    $lesBiens = $insert->fetchAll();
    return $lesBiens;
}

function getTypes($pdo) {
    $insert = $pdo->prepare("SELECT * FROM type");
    $execute = $insert->execute();
    $lesBiens = $insert->fetchAll();
    return $lesBiens;
}