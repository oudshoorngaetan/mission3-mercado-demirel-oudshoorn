<?php

function getUtilisateur($pdo, $ID) {
    $insert = $pdo->prepare("SELECT nom, prenom, email FROM compte WHERE ID=:id");
    $bind = $insert->bindValue(":id", $ID, PDO::PARAM_INT);
    $execute = $insert->execute();
    $unUtilisateur = $insert->fetch();
    return $unUtilisateur;
}
