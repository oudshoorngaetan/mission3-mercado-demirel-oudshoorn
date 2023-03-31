<?php

function setJson($pdo, $id, $json) {
    $insert = $pdo->prepare("INSERT INTO json VALUES(:id, :json);");
    $bind1 = $insert->bindValue(":id", $id, PDO::PARAM_INT);
    $bind2 = $insert->bindValue(":json", $json, PDO::PARAM_STR);
    $execute = $insert->execute();
    return $execute;
}
