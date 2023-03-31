<?php

function getPasswordHash($pdo, $ID) {
    $insert = $pdo->prepare("SELECT password FROM compte WHERE ID=:id");
    $bind = $insert->bindValue(":id", $ID, PDO::PARAM_INT);
    $execute = $insert->execute();
    $unEmail = $insert->fetch();
    return $unEmail['password'];
}
