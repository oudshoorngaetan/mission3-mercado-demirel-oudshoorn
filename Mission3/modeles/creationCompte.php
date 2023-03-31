<?php

session_start();

try {
    // Vérification du consentement
    $consentement = $_POST['consentement'];
    if ($consentement != true) {
        $_SESSION["compteCree"] = false;
        header('Location: ../vuescontroleurs/formulaire.php');
        die();
    }
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
} catch (Exception $ex) {
    $_SESSION["compteCree"] = false;
    header('Location: ../vuescontroleurs/formulaire.php');
    die();
}
include_once 'mesFonctionsAccesBDD.php';
include_once 'verifEmail.php';

// Vérification du format du mdp
if (preg_match('@[A-Z]@', $password) && preg_match('@[a-z]@', $password) && preg_match('@[0-9]@', $password)) {
    $password = password_hash($password, PASSWORD_DEFAULT);
} else {
    $_SESSION["compteCree"] = false;
    $_SESSION["erreur"] = "Le mot de passe n'est pas valide";
    header('Location: ../vuescontroleurs/formulaire.php');
    die();
}
    
$connect = connexionBDD();
include_once 'ajoutCompte.php';

// Vérification du format de mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Vérification si mail en double
    if (verifEmail($connect, $email) == 0) {
        try {
            include_once './chiffrement.php';
            $email = encrypt($email, 'S3cur1$4TI0n2LEM4il');
            //echo $email;
            $compte = ajoutCompte($connect, $nom, $prenom, $email, $password, $consentement);
            $_SESSION["compteCree"] = true;
        } catch (Exception $ex) {
            $_SESSION["compteCree"] = false;
        }
        
    } else {
        $_SESSION["compteCree"] = false;
        $_SESSION["erreur"] = "Un compte existe déjà pour ce mail";
    }
} else {
    $_SESSION["compteCree"] = false;
    $_SESSION["erreur"] = "Le mail n'est pas bon";
}
header('Location: ../vuescontroleurs/formulaire.php');
die();
