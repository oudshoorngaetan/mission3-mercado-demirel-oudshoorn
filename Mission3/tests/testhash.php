<?php
include_once 'mesFonctionsAccesBDD.php';
$email = $_POST['email'];
$password = $_POST['password'];
$connect = connexionBDD();
$query = $connect->prepare('SELECT * FROM compte');
$query->execute();
$resultats = $query->fetchAll();

foreach ($resultats as $resultat){
    if($resultat['username']== $username && password_verify($password,$resultat['password'])){
        echo 'vous êtes connecté';
    } else {
        echo 'erreur';
    }
}
?>