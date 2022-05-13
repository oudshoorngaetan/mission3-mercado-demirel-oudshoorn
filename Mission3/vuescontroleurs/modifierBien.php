<body>
    <?php
    include_once'../inc/menu.inc';
    include_once'../inc/head.inc';
    if (!isset($_SESSION["connexion"])) {
        if ($_SESSION["connexion"] != 'oui') {
            header('Location: ../vuescontroleurs/index.php');
            die();
        }
    }
    ?>
    <h2 class='formulaire'>Menu de modification d'Agent Immobilier</h2>
    <?php
    echo '<form name="modification" id="modification" method="post" action="../modeles/modifierBien.php">'
    . '<fieldset>'
    . '<legend>Modification d\'un bien</legend>'
    . '<div id="corpForm">';
    include_once '../modeles/getLesID.php';
    include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();
    echo '<label for="id">Références des biens :</label>'
    . '<select id="id" name="id" title="Sélectionner un ID">';
    $lesID = getLesID($pdo);
    var_dump($lesID);
    foreach ($lesID as $unID) {
        echo '<option value="' . $unID['ID'] . '">' . $unID['ID'] . '</option>';
    }
    echo '</select><br>';
    ?>
    <label for="description">Description du Bien :</label><br>
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
    <label for="prix" title="Prix"> Prix :</label> 
    <input type="number" name="prix" id="prix"><br/>
    <label for="ville" title="ville"> Ville :</label> 
    <input type="text" name="ville" id="ville"><br/>
    <label for="superficie" title="Superficie"> Superficie :</label> 
    <input type="number" name="superficie" id="superficie"><br/>
    <label for="nbpieces" title="Nombre de pièces"> Nombre de pièces :</label> 
    <input type="number" name="nbpieces" id="nbpieces"><br/>
    <label for="jardin" title="Jardin">Jardin :</label>
    <label for="jardin0" title="Non">NON</label>
    <input type="radio" name="jardin" id="jardin0" value="0">
    <label for="jardin1" title="OUI">OUI</label>
    <input type="radio" name="jardin" id="jardin1" value="1">
    <label for="jardin2" title="Pas de modification">Pas de modification</label>
    <input type="radio" name="jardin" id="jardin1" value="2" checked="checked">
    </div>
    <div id="piedForm">
        <input type="submit" name="valid" id="valid" value="Modifier"/>
    </div>
</fieldset>
</form>
</body>
</html>