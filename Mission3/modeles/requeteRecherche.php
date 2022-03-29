<?php

function rechercheBiens($pdo, $type, $ville) {
    $type = (int) $type;
    if ($ville != "" && $type != 0) {
        $insert = $pdo->prepare("SELECT biens.ID,ville,libelle,prix FROM biens JOIN type ON type.id=biens.idType WHERE ville=:ville AND type.ID=:type");
        $bind1 = $insert->bindValue(":ville", $ville, PDO::PARAM_STR);
        $bind2 = $insert->bindValue(":type", $type);
    } else {
        if ($ville != "" && $type == 0) {
            $insert = $pdo->prepare("SELECT biens.ID,ville,libelle,prix FROM biens JOIN type ON type.id=biens.idType WHERE ville=:ville");
            $bind1 = $insert->bindValue(":ville", $ville, PDO::PARAM_STR);
        }
        if ($ville == "" && $type != 0) {
            $insert = $pdo->prepare("SELECT biens.ID,ville,libelle,prix FROM biens JOIN type ON type.id=biens.idType WHERE type.ID=:type");
            $bind2 = $insert->bindValue(":type", $type);
        } else {
            $insert = $pdo->prepare("SELECT biens.ID,ville,libelle,prix FROM biens JOIN type ON type.id=biens.idType");
        }
    }
    $execute = $insert->execute();
    $lesBiens = $insert->fetchAll();
    return $lesBiens;
}
