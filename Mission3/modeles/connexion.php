<?php

include_once 'mesFonctionsAccesBDD.php';
$email = $_POST['email'];
$password = $_POST['password'];
$connect = connexionBDD();
$query = $connect->prepare('SELECT ID, email, password, type FROM compte');
$query->execute();
$resultats = $query->fetchAll();

foreach ($resultats as $resultat) {
    include_once '../modeles/chiffrement.php';
    if (decrypt($resultat['email'], 'S3cur1$4TI0n2LEM4il') == $email && password_verify($password, $resultat['password'])) {
        session_start();
        $_SESSION["type"] = $resultat['type'];
        $_SESSION["connexion"] = $resultat['ID'];
        include_once 'updateDateConnexion.php';
        include_once 'creerTrace.php';
        creerTrace($connect, $resultat['ID'], 'connexion');
        updateConnexion($connect, $resultat['ID']);
        header('Location: ../vuescontroleurs/index.php');
        die();
    } else {
        echo 'erreur';
    }
}
session_start();
$_SESSION["connexion"] = false;
header('Location: ../vuescontroleurs/formulaire.php');
die();
