<?php

function updateJson($pdo, $id, $json) {
    $insert = $pdo->prepare("UPDATE json SET json=:json where id=:id");
    $bind1 = $insert->bindValue(":id", $id, PDO::PARAM_INT);
    $bind2 = $insert->bindValue(":json", $json, PDO::PARAM_STR);
    $execute = $insert->execute();
    return $execute;
}
