<?php
echo '<body>';
include_once'../inc/menu.inc';
include_once'../inc/head.inc';
if (!isset($_SESSION["connexion"])) {
    if ($_SESSION["connexion"] != 'agent') {
        header('Location: ../vuescontroleurs/index.php');
        die();
    }
}

echo '<h2 class="formulaire">Menu de suppresion d\'Agent Immobilier</h2>'
 . '<form name = "suppression" id = "suppression" method = "post" action = "../modeles/supprimerBien.php">'
 . '<fieldset>'
 . '<legend>Suppression d\'un bien</legend>'
 . '<div id="corpForm">';
if (isset($_SESSION["suppression"]) && $_SESSION["suppression"]=='oui') {
    echo '<p>Le bien a été supprimé</p>';
    $_SESSION["suppression"]=null;
}
include_once '../modeles/getLesID.php';
include_once '../modeles/mesFonctionsAccesBDD.php';
$pdo = connexionBDD();
echo '<label for="id">Références du bien :</label>'
 . '<select id="id" name="id" title="Sélectionner un ID"';
$lesID = getLesID($pdo);
var_dump($lesID);
foreach ($lesID as $unID) {
    echo '<option value="' . $unID['ID'] . '">' . $unID['ID'] . '</option>';
}
echo '</select><br>'
 . '</div>'
 . '<div id="piedForm">'
 . '<input type="submit" name="valid" id="valid" value="Rechercher"/>'
 . '</div>'
 . '</fieldset>'
 . '</form>'
 . '</body>'
 . '</html>';
?>