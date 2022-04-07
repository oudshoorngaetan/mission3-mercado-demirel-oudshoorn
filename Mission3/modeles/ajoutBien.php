<?php
session_start();
if(!isset($_SESSION["connexion"])) {
    if ($_SESSION["connexion"] != 'oui') {
        header('Location: ../vuescontroleurs/index.php');
        die();
    }
} else {
    include_once 'mesFonctionsAccesBDD.php';
    include_once 'fonctionAjoutBien.php';
    $pdo = connexionBDD();
    $description = $_POST['description'];
    $idtype = $_POST['type'];
    $prix = $_POST['prix'];
    $ville = $_POST['ville'];
    $superficie = $_POST['superficie'];
    $nbpieces = $_POST['nbpieces'];
    $jardin = $_POST['jardin'];
    if(ajoutBien($pdo,$description,$idtype,$prix,$ville,$superficie,$nbpieces,$jardin)){
        header('Location: ../vuescontroleurs/menuPersonnel.php');
        die();
    }
    else {
        echo 'Erreur de saisie';
    }
}