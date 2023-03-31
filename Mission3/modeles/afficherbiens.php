<?php
function getLeBien($pdo,$IDbien){
    $insert = $pdo->prepare("SELECT * FROM biens WHERE ID=:id");
    $bind=$insert->bindValue(":id",$IDbien, PDO::PARAM_INT);
    $execute=$insert->execute();
    $unBien=$insert->fetch();    
    return $unBien;
}