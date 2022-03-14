<?php

function connexionBDD() {
    $bdd = 'mysql:host=localhost;dbname=newsletter';
    $user = 'root';
    $password = '';
    try {

        $ObjConnexion = new PDO($bdd, $user, $password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $ObjConnexion;
}

function deconnexionBDD($cnx) {
    $cnx = null;
}

function getLesBiens($pdo) {
    $insert = $pdo->prepare("SELECT biens.id,ville,type.libelle,"
            . "Prix,Superficie,NBpieces FROM biens"
            . "JOIN type ON type.id=biens.idType");
    $execute = $insert->execute();
    $lesBiens = $insert->fetchAll();
    return $lesBiens;
}

