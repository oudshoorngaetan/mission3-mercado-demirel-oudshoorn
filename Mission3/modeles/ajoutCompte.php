<?php
function ajoutCompte($pdo,$email,$pwdhash) {
    $insert = $pdo->prepare("INSERT INTO compte VALUES(null,:email,:pwdhash");
    $bind1 = $insert->bindValue(":email",$email,  PDO::PARAM_STR);
    $bind2 = $insert->bindValue(":pwdhash",$pwdhash,  PDO::PARAM_STR);
    $execute = $insert->execute();
    return $execute;
}