<?php

function deleteUtilisateur($pdo, $id){
    $requete = 'DELETE from json where id=:id; '
            . 'DELETE from trace where user=:id; '
            . 'DELETE from compte where id=:id';
    $insert = $pdo->prepare($requete);
    $bind0 = $insert->bindValue(":id", $id, PDO::PARAM_INT);
    $execute = $insert->execute();
    return $execute;
}