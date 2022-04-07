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

function Login($pdo, $email, $mdphash) {
    $query = $pdo->prepare("SELECT COUNT(email) FROM ");
    $email = $_POST['email'];
    $mdphash = $_POST['password'];
    password_hash($mdphash, PASSWORD_DEFAULT);
    $bind1 = $query->bindValue(":email", $email, PDO::PARAM_STR);
    $bind2 = $query->bindValue(":pswd", $mdphash, PDO::PARAM_STR);
    $execute = $query->execute();
    return $execute;
}
