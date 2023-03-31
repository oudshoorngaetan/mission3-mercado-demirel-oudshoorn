<?php

function getJson($pdo, $id){
    $insert = $pdo->prepare("SELECT json from json where id=:id");
    $bind1 = $insert->bindValue(":id", $id, PDO::PARAM_INT);
    $execute = $insert->execute();
    $json = $insert->fetch();
    return $json;
}