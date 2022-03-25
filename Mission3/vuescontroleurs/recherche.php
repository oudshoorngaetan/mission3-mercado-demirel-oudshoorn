<!DOCTYPE html>
<html lang="fr">
    <?php
    include_once'../inc/head.inc';
    ?>
    <body>
        <?php
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
            <input type="ville" name="ville" id="ville" title="Veuillez choisir la ville"/>
            <input type="submit" name="valid" id="valid" value="Rechercher"/>
        </form>
        <?php
        include_once'../inc/piedDePage.inc';
        ?>
    </body>
</html>