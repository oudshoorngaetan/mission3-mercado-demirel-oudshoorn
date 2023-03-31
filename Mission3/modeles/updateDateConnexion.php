<?php

function updateConnexion($pdo, $id) {
    $insert = $pdo->prepare("update compte set dateLastConn = CURRENT_DATE where id = :id");
    $bind1 = $insert->bindValue(":id", $id, PDO::PARAM_INT);
    $execute = $insert->execute();
    return $execute;
}
