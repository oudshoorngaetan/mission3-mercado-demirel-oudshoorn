<?php
session_start();
if (isset($_SESSION['type']) && isset($_SESSION['connexion'])) {
    if ($_SESSION['type'] == 'utilisateur' && !$_SESSION['connexion'] == "") {
        include_once 'getPasswordHash.php';
        include_once 'mesFonctionsAccesBDD.php';
        $mdp = $_POST['password'];
        $pdo = connexionBDD();
        $password = getPasswordHash($pdo, $_SESSION['connexion']);
        if (password_verify($mdp, $password)) {
            $_SESSION['verification'] = true;
            header('Location: ../vuescontroleurs/compte.php');
        } else {
            $_SESSION['verification'] = false;
            header('Location: ../vuescontroleurs/verification.php');
        }
    }
}