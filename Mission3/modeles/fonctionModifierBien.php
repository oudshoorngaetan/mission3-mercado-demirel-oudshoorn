<?php

function modifierBien($pdo, $ID, $description, $idtype, $prix, $ville, $superficie, $nbpieces, $jardin) {
    $requete = "UPDATE biens SET ID=:id ";
    if ($description != '') {
        $requete .= " , description=:description";
    }
    if ($idtype != '0') {
        $requete .= " , IDtype=:idtype";
    }
    if ($prix != '') {
        $requete .= " , prix=:prix";
    }
    if ($ville != '') {
        $requete .= " , ville=:ville";
    }
    if ($superficie != '') {
        $requete .= " , superficie=:superficie";
    }
    if ($nbpieces != '') {
        $requete .= " , nbpieces=:nbpieces";
    }
    if ($jardin != '2') {
        $requete .= " , jardin=:jardin";
    }

    $requete .= " WHERE ID=:id";
    $insert = $pdo->prepare($requete);

    if ($description != '') {
        $bind1 = $insert->bindValue(":description", $description, PDO::PARAM_STR);
    }
    if ($idtype != '0') {
        $bind2 = $insert->bindValue(":idtype", $idtype, PDO::PARAM_INT);
    }
    if ($prix != '') {
        $bind3 = $insert->bindValue(":prix", $prix, PDO::PARAM_INT);
    }
    if ($ville != '') {
        $bind4 = $insert->bindValue(":ville", $ville, PDO::PARAM_STR);
    }
    if ($superficie != '') {
        $bind5 = $insert->bindValue(":superficie", $superficie, PDO::PARAM_INT);
    }
    if ($nbpieces != '') {
        $bind6 = $insert->bindValue(":nbpieces", $nbpieces, PDO::PARAM_INT);
    }
    if ($jardin != '2') {
        $bind7 = $insert->bindValue(":jardin", $jardin, PDO::PARAM_INT);
    }
    $bind = $insert->bindValue(":id", $ID, PDO::PARAM_INT);
    $execute = $insert->execute();
    return $execute;
}
