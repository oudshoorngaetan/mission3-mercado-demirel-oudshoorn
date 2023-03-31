<?php

session_start();
include_once 'updateCompte.php';
include_once './mesFonctionsAccesBDD.php';
$pdo = connexionBDD();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
// On vérifie la saisie de chaque champs
if ($nom == "" || $prenom == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../vuescontroleurs/compte.php');
} else {
    if ($password != "") {
        // Si le mot de passe est saisi on vérifie la politique de mdp
        if (preg_match('@[A-Z]@', $password) && preg_match('@[a-z]@', $password) && preg_match('@[0-9]@', $password)) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            // On update le compte si le mot de passe est à modifier
            if ($_SESSION['connexion'] != null && updateCompte($pdo, $_SESSION['connexion'], $nom, $prenom, $email, $password)) {
                $_SESSION['verification'] = null;
                header('Location: ../vuescontroleurs/index.php');
            } else {
                header('Location: ../vuescontroleurs/compte.php');
            }
        } else {
            header('Location: ../vuescontroleurs/compte.php');
        }
    } else {
        // On update le compte si le mot de passe n'est pas à modifier
        if ($_SESSION['connexion'] != null && updateCompte($pdo, $_SESSION['connexion'], $nom, $prenom, $email, $password)) {
            $_SESSION['verification'] = null;
            header('Location: ../vuescontroleurs/index.php');
        }
    }
}

