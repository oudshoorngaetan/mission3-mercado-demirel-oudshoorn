<?php
include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
?>
<form method="POST" id="form" action="lesBiens.php">
    <label for="type" title="Veuillez choisir le type" class="oblig">Types :</label>
    <input type="radio" name="type" id="type0" value=0 checked="checked"/>
    <label for="type0" title="aucun">Aucun</label>
    <?php
    include_once '../modeles/mesFonctionsAccesBDD.php';
    include_once '../modeles/typeBiens.php';
    $pdo = connexionBDD();
    $lesTypes = getTypes($pdo);
    foreach ($lesTypes as $unType) {
        echo '<input type="radio" name="type" id="type' . $unType['ID'] . '" value="' . $unType['ID'] . '"/><label for="type' . $unType['ID'] . '" title="' . $unType['libelle'] . '">' . $unType['libelle'] . '</label>';
    }
    deconnexionBDD($pdo);
    ?>
    <br>
    <label for="ville" title="Veuillez choisir la ville" class="oblig">Villes :</label>
    <input type="ville" name="ville" id="ville" title="Veuillez choisir la ville"/><br/>
    <span>Min</span>
    <input type="number" value="0" name="min" id="min">
    <span>Max</span>
    <input type="number" value="" name="max" id="max"><br/>

    <label for="jardin" title="Voulez-vous un jardin ou non ?">Jardin:</label>
    <label for="jardin1" title="peu importe">Peu Importe</label>
    <input type="radio" name="jardin" id="jardin1" value="2" checked="checked">
    <label for="jardin0" title="Non">NON</label>
    <input type="radio" name="jardin" id="jardin0" value="0" >
    <label for="jardin1" title="OUI">OUI</label>
    <input type="radio" name="jardin" id="jardin1" value="1">
    <input type="submit" name="valid" id="valid" value="Rechercher"/>
</form>
<?php
include_once'../inc/piedDePage.inc';
?>
