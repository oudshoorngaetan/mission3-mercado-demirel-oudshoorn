<?php

function creerTrace($pdo, $id, $operation) {
    $insert = $pdo->prepare("insert into trace values(null, :id, current_timestamp, :operation)");
    $bind1 = $insert->bindValue(":id", $id, PDO::PARAM_INT);
    $bind1 = $insert->bindValue(":operation", $operation, PDO::PARAM_STR);
    $execute = $insert->execute();
    return $execute;
}