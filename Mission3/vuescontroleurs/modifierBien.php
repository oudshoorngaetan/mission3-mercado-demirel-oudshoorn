<?php
session_start();
include_once'../inc/head.inc';
if (!isset($_SESSION["connexion"])) {
    if ($_SESSION["connexion"] != 'oui') {
        header('Location: ../vuescontroleurs/index.php');
        die();
    }
}
?>
<body>
    <h1>Menu d'ajout Agent Immobilier</h1>
    <?php
    echo '<p> Connecté en tant qu\'Agent</p>'
        . '<span> Modification d\'un bien </span><br>'
        . '<form name="ajout" id="ajout" method="post" action="../modeles/modifierBien.php">';
    include_once '../modeles/getLesID.php';
    include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();
    echo '<label for="id">Références des biens</label>'
        . '<select id="id" name="id" title="Sélectionner un ID"';
    $lesID = getLesID($pdo);
    var_dump($lesID);
    foreach($lesID as $unID) {
        echo '<option value="'.$unID['ID'].'">'.$unID['ID'].'</option>';
    }
    echo '</select><br>';
    ?>
    <label for="description">Description du Bien</label><br>
    <textarea id="description" name="description" rows="4" cols="50" value=""></textarea><br/>
    <label for="type" title="Veuillez choisir le type" class="oblig">Types :</label>
    <?php
    include_once '../modeles/mesFonctionsAccesBDD.php';
    include_once '../modeles/typeBiens.php';
    $pdo = connexionBDD();
    $lesTypes = getTypes($pdo);
    foreach ($lesTypes as $unType) {
        echo '<input type="radio" name="type" id="type' . $unType['ID'] . '" value="' . $unType['ID'] . '"/>'
                . '<label for="type' . $unType['ID'] . '" title="' . $unType['libelle'] . '">' . $unType['libelle'] . '</label>';
    }
    echo '<input type="radio" name="type" id="type0" value="0" checked="checked"/>'
            . '<label for="type0" title="Pas de modification du type">Pas de modification</label>';
    deconnexionBDD($pdo);
    ?>
    <br/>
    <span> Prix </span> 
    <input type="number" name="prix" id="prix"><br/>
    <span> Ville </span> 
    <input type="text" name="ville" id="ville"><br/>
    <span> Superficie </span> 
    <input type="number" name="superficie" id="superficie"><br/>
    <span> Nombre de pièces </span> 
    <input type="number" name="nbpieces" id="nbpieces"><br/>
    <label for="jardin" title="Jardin">Jardin ?</label>
    <label for="jardin0" title="Non">NON</label>
    <input type="radio" name="jardin" id="jardin0" value="0">
    <label for="jardin1" title="OUI">OUI</label>
    <input type="radio" name="jardin" id="jardin1" value="1">
    <label for="jardin2" title="Pas de modification">Pas de modification</label>
    <input type="radio" name="jardin" id="jardin1" value="2" checked="checked">
    <input type="submit" name="valid" id="valid" value="Ajouter"/>
</form>
</body>
</html>