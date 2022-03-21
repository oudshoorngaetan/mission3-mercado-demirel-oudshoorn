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
        <form method="POST" id="form" action="../modeles/rechercheBiens.php">
            <label for="type" title="Veuillez choisir le type" class="oblig">Types :</label>
            <select id="typee" name="ville" title="Veuillez choisir le type">
                <?php
                include_once '../modeles/mesFonctionsAccesBDD.php';
                include_once '../modeles/rechercheBiens.php';
                $pdo = connexionBDD();
                $lesTypes = getTypes($pdo);
                foreach($lesTypes as $unType) {
                    echo '<option value="' . $unType['ID'] . '">' . $unType['libelle'] . '</option>';
                }
                ?>
            </select>
        </form>
        <?php
        include_once'../inc/piedDePage.inc';
        ?>
    </body>
</html>