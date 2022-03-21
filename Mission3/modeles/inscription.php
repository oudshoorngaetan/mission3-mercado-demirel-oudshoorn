<?php
include_once 'mesFonctionsAccesBDD.php';
$email = $_POST['email'];
$mdphash = $_POST['password'];
$pdo = connexionBDD();
$ajout = inscription($pdo, $email, $mdphash);

deconnexionBDD($cnx);