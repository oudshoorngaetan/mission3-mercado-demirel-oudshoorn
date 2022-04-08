<?php
function getLeBien($pdo,$leBien){
    $insert = $pdo->prepare("SELECT * FROM biens WHERE ID=:id");
    $bind=$insert->bindValue(":id",$leBien, PDO::PARAM_INT);
    $execute=$insert->execute();
    $unBien=$insert->fetchAll();    
    return $unBien;
}
