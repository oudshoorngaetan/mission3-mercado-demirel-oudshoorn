<?php

function connexionBDD() {
    $bdd = 'mysql:host=localhost;dbname=laforetbdd';
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