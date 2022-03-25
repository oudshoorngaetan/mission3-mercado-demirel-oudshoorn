<?php
function getTypes($pdo) {
    $insert = $pdo->prepare("SELECT * FROM type");
    $execute = $insert->execute();
    $lesBiens = $insert->fetchAll();
    return $lesBiens;
}