<?php

include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
// Vérifie si on est connecté et que la vérification du mdp est effectuée
if (!isset($_SESSION["type"]) || !isset($_SESSION['verification']) || !isset($_SESSION["connexion"])) {
    header('Location: ../vuescontroleurs/index.php');
    die();
} else {
    // On vérifie si la vérification est effectuée et si on est un utilisateur
    if ($_SESSION["type"] != 'utilisateur' || $_SESSION['verification'] != true) {
        header('Location: ../vuescontroleurs/index.php');
        die();
    }
}
include_once '../modeles/mesFonctionsAccesBDD.php';
include_once '../modeles/getUtilisateur.php';
include_once '../modeles/chiffrement.php';
$pdo = connexionBDD();
$utilisateur = getUtilisateur($pdo, $_SESSION['connexion']);

echo '<form method="POST" id="form" action="../modeles/modifierCompte.php">'
 . '<fieldset>'
 . '<legend>Modification des données personnelles</legend>'
 . "<div id='corpForm'>"
 . '<div class = "nom">'
 . '<label for = "nom">Nom</label><br/>'
 . '<input type = "text" name = "nom" for = "nom" id = "nom" value="' . $utilisateur['nom'] . '" required><br/>'
 . '</div>'
 . '<div class = "prenom">'
 . '<label for = "prenom">Prénom</label><br/>'
 . '<input type = "text" name = "prenom" for = "prenom" id = "prenom" value="' . $utilisateur['prenom'] . '" required><br/>'
 . '</div>'
 . '<div class = "email">'
 . '<label for = "email">Email</label><br/>'
 . '<input type = "email" name = "email" for = "email" id = "email" value="' . decrypt($utilisateur['email'], 'S3cur1$4TI0n2LEM4il') . '" required><br/>'
 . '</div>'
 . '<div class = "mdp">'
 . '<label for = "password">Mot de Passe : ne rien saisir si aucun changement</label><br/>'
 . '<input type = "password" name = "password" id = "password"'
 . 'title = "Au moins 8 caractères : Minuscule, Majuscule, Chiffre"'
 . 'pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">'
 . '</div>'
 . '</div>'
 . '<div id = "piedForm">'
 . '<input type = "submit" name = "valid" id = "valid" value = "Modifier"/>'
 . '<a href="../modeles/creerJson.php">Télécharger les données</a>'
 . '<a href="../modeles/creerHash.php">Télécharger le hash</a>'
 . '<a href="../modeles/supprimerCompte.php" '
 . 'onclick="return confirm(\'Voulez-vous vraiment supprimer le compte?\');">'
 . 'Supprimer le compte et toutes les données'
 . '</a>'
 . '</div>'
 . '</fieldset>'
 . '</form>';

include_once'../inc/piedDePage.inc';
?>
