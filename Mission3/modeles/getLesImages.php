<?php

function getLesImages($pdo, $IDbien) {
    $insert = $pdo->prepare("SELECT * FROM images WHERE IDbien=:id order by chemin");
    $bind = $insert->bindValue(":id", $IDbien, PDO::PARAM_INT);
    $execute = $insert->execute();
    $unBien = $insert->fetchAll();
    return $unBien;
}
