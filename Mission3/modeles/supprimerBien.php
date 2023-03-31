<?php
session_start();
if(!isset($_SESSION["connexion"])) {
    if ($_SESSION["connexion"] != 'oui') {
        header('Location: ../vuescontroleurs/index.php');
        die();
    }
} else {
    
    include_once 'mesFonctionsAccesBDD.php';
    include_once 'fonctionSupprimerBien.php';
    $pdo = connexionBDD();
    $ID = (int) $_POST['id'];
    var_dump($ID);
    if(supprimerBien($pdo,$ID)){
        header('Location: ../vuescontroleurs/supprimerBien.php');
        die();
    } else {
        echo 'Erreur';
    }
}