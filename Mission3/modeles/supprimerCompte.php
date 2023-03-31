<?php

session_start();
// Vérifie si on est connecté et que la vérification du mdp est effectuée
if (!isset($_SESSION["type"]) || !isset($_SESSION['verification']) || !isset($_SESSION["connexion"])) {
    header('Location: ../vuescontroleurs/index.php');
    die();
} else {
    // On vérifie si la vérification est effectuée et si on est un utilisateur
    if ($_SESSION["type"] != 'utilisateur' || $_SESSION['verification'] != true) {
        header('Location: ../vuescontroleurs/index.php');
        die();
    } else {
        include_once '../modeles/mesFonctionsAccesBDD.php';
        include_once './deleteUtilisateur.php';
        $pdo = connexionBDD();
        deleteUtilisateur($pdo, $_SESSION['connexion']);
        include_once './deconnexion.php';
        header('Location: ../vuescontroleurs/index.php');
        
    }
}