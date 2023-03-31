<?php
// Update le compte
function updateCompte($pdo, $id, $nom, $prenom, $email, $mdp_hash) {
    $requete = 'UPDATE compte SET nom=:nom , prenom=:prenom , email=:email ';
    if ($mdp_hash != "") {
        $requete .= ', password=:mdp ';
    }
    $requete .= 'where ID=:id';
    $insert = $pdo->prepare($requete);
    $bind0 = $insert->bindValue(":id", $id, PDO::PARAM_INT);
    $bind1 = $insert->bindValue(":nom", $nom, PDO::PARAM_STR);
    $bind2 = $insert->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $bind3 = $insert->bindValue(":email", $email, PDO::PARAM_STR);
    if ($mdp_hash != "") {
        $bind4 = $insert->bindValue(":mdp", $mdp_hash, PDO::PARAM_STR);
    }
    $execute = $insert->execute();
    return $execute;
}
