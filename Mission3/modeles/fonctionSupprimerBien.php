<?php
function supprimerBien($pdo,$ID){
    $insert = $pdo->prepare("DELETE FROM biens WHERE ID=:id");
    $bind = $insert->bindValue(":id", $ID, PDO::PARAM_INT);
    $execute = $insert->execute();
    return $execute;
}