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
        <table class="biens">
            <thead>
                <tr>
                    <th colspan="4">La liste des biens</th>
                </tr>
            </thead>
            <tr>
                <th>Ref</th>
                <th>Ville</th>
                <th>Type</th>
                <th>Prix</th>
            </tr>
            <?php
            include_once'../modeles/mesFonctionsAccesBDD.php';
            include_once'../modeles/accesBiens.php';
            $pdo = connexionBDD();
            if (count($_POST) != 0) {
                $ville = $_POST['ville'];
                $type = $_POST['type'];
                $min = $_POST['min'];
                $max = $_POST['max'];
                $jardin = $_POST['jardin'];
                include_once'../modeles/requeteRecherche.php';
                $lesBiens = rechercheBiens($pdo, $type, $ville, $min, $max, $jardin);
                foreach ($lesBiens as $unBien) {
                    echo '<tr><th>' . $unBien['ID'] . '</th><th>' . $unBien['ville'] . '</th><th>' . $unBien['libelle'] . '</th><th>'
                    . $unBien['prix'] . '</th></tr>';
                }
            } else {
                $lesBiens = getLesBiens($pdo);
                foreach ($lesBiens as $unBien) {
                    echo '<tr><th>' . $unBien['id'] . '</th><th>' . $unBien['ville'] . '</th><th>' . $unBien['libelle'] . '</th><th>'
                    . $unBien['Prix'] . '</th></tr>';
                }
            }
            ?>
        </table>
        <?php
        include_once'../inc/piedDePage.inc';
        ?>
    </body>
</html>