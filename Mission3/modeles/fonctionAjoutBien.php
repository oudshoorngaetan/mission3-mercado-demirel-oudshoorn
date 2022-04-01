<?php

function ajoutBien($pdo,$description,$idtype,$prix,$ville,$superficie,$nbpieces){
    $insert = $pdo->prepare("INSERT INTO biens VALUES(null,:description,:idtype,:prix,:ville,:superficie,:nbpieces");
    $bind1 = $insert->bindValue(":description", $description, PDO::PARAM_STR);
    $bind2 = $insert->bindValue(":idtype", $idtype, PDO::PARAM_INT);
    $bind3 = $insert->bindValue(":prix", $prix, PDO::PARAM_INT);
    $bind4 = $insert->bindValue(":ville", $ville, PDO::PARAM_STR);
    $bind5 = $insert->bindValue(":superficie", $superficie, PDO::PARAM_INT);
    $bind6 = $insert->bindValue(":nbpieces", $nbpieces, PDO::PARAM_INT);
    $execute = $insert->execute();
    return $execute;
}