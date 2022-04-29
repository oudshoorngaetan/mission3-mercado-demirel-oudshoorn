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
    <h2 class='formulaire'>Menu d'ajout Agent Immobilier</h2>
    <form name="ajout" id="ajout" method="post" action="../modeles/ajoutBien.php">
        <fieldset>
            <legend>Ajout d'un bien</legend>
            <div id="corpForm">
                <label for="description">Description du Bien</label><br>
                <textarea id="description" name="description" rows="4" cols="50" value="" required></textarea><br/>
                <label for="type" title="Veuillez choisir le type" class="oblig">Types :</label>
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
                <br/>
                <label for="prix" title="Prix"> Prix :</label> 
                <input type="number" name="prix" id="prix" required><br/>
                <label for="ville" title="ville"> Ville :</label> 
                <input type="text" name="ville" id="ville" required><br/>
                <label for="superficie" title="Superficie"> Superficie :</label> 
                <input type="number" name="superficie" id="superficie" required><br/>
                <label for="nbpieces" title="Nombre de pièces"> Nombre de pièces :</label> 
                <input type="number" name="nbpieces" id="nbpieces" required><br/>
                <label for="jardin" title="Jardin">Jardin ?</label>
                <label for="jardin0" title="Non">NON</label>
                <input type="radio" name="jardin" id="jardin0" value="0" checked="checked">
                <label for="jardin1" title="OUI">OUI</label>
                <input type="radio" name="jardin" id="jardin1" value="1">
            </div>
            <div id="piedForm">
                <input type="submit" name="valid" id="valid" value="Ajouter"/>
            </div>
        </fieldset>
    </form>
</body>
</html>
