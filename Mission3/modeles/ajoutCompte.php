<?php

function ajoutCompte($pdo, $nom, $prenom, $email, $pwdhash, $consentement) {
    $insert = $pdo->prepare("INSERT INTO compte VALUES(null,:nom , :prenom, :email, :pwdhash, :consentement,"
            . " 'utilisateur', CURRENT_DATE, CURRENT_DATE);");
    $bind1 = $insert->bindValue(":nom", $nom, PDO::PARAM_STR);
    $bind2 = $insert->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $bind3 = $insert->bindValue(":email", $email, PDO::PARAM_STR);
    $bind4 = $insert->bindValue(":pwdhash", $pwdhash, PDO::PARAM_STR);
    $bind5 = $insert->bindValue(":consentement", $consentement, PDO::PARAM_BOOL);
    $execute = $insert->execute();
    return $execute;
}
