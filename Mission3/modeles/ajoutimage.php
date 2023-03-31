<?php
$pdo = connexionBDD();

function ajoutImage($pdo, $nom_img, $id_bien, $chemin_img){
    $insert = $pdo->prepare("INSERT INTO images VALUES (:nom_img, :id_bien, :chemin_img");
    $bind1=$insert->bindValue(":nom_img", $nom_img, PDO::PARAM_STR);
    $bind2=$insert->bindValue(":id_bien", $id_bien, PDO::PARAM_INT);
    $bind3=$insert->bindValue(":chemin_img", $chemin_img, PDO::PARAM_STR);
    $execute = $insert->execute();    
    return $execute;
}

