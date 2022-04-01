<?php
include_once 'mesFonctionsAccesBDD.php';
$email = $_POST['email'];
$password = $_POST['password'];
$connect = connexionBDD();
$query = $connect->prepare('SELECT * FROM compte');
$query->execute();
$resultats = $query->fetchAll();

foreach ($resultats as $resultat){
    if($resultat['email']== $email && password_verify($password,$resultat['password'])){
        session_start();
        $_SESSION["connexion"]='oui';
        header('Location: ../vuescontroleurs/index.php');
        die();
    } else {
        echo 'erreur';
    }
}