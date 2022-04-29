<?php
function getLesID($pdo) {
    $insert = $pdo->prepare("SELECT ID FROM biens order by ID");
    $execute = $insert->execute();
    $lesBiens = $insert->fetchAll();
    return $lesBiens;
}