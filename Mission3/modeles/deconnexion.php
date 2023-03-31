<?php

session_start();
include_once 'mesFonctionsAccesBDD.php';
$pdo = connexionBDD();
if (isset($_SESSION["connexion"])) {
    include_once 'creerTrace.php';
    creerTrace($pdo, $_SESSION["connexion"], 'deconnexion');
    $_SESSION["connexion"] = null;
    $_SESSION["type"] = null;
    $_SESSION['verification'] = null;
    header('Location: ../vuescontroleurs/index.php');
    die();
} else {
    echo 'Redirection';
    header('Location: ../vuescontroleurs/index.php');
    die();
}