<?php
function verifEmail($pdo, $email) {
    $insert = $pdo->prepare("select count(*) as nb from compte where email = :email");
    $bind1 = $insert->bindValue(":email", $email, PDO::PARAM_STR);
    $execute = $insert->execute();
    $verif = $insert->fetch();
    return $verif['nb'];
}