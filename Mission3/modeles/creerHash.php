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
        include_once '../modeles/getUtilisateur.php';
        $pdo = connexionBDD();
        $utilisateur = getUtilisateur($pdo, $_SESSION['connexion']);
        $id = $_SESSION['connexion'];
        $array = Array(
            "id" => $id,
            "nom" => $utilisateur['nom'],
            "prenom" => $utilisateur['prenom'],
            "email" => $utilisateur['email']
        );
        $json = json_encode($array);
        $file = 'informationsHash' . $id . '.json';
        $hash = hash('sha512', $json);
        header("Content-Type: application/download");
        header("Content-disposition: " . $file);
        header("Content-disposition: filename=" . $file);
        // Update de la BDD
        /*
          if (getJson($pdo, $id) == null) {
          setJson($pdo, $id, $json);
          } else {
          updateJson($pdo, $id, $json);
          }
          file_put_contents('../json/informations' . $id . '.json', $json);
         */
        print $hash;
    }
}
