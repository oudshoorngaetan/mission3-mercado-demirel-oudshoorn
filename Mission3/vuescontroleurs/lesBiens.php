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
            $lesBiens = getLesBiens($pdo);
            foreach ($lesBiens as $unBien) {
                echo '<tr><th>' . $unBien['id'] . '</th><th>' . $unBien['ville'] . '</th><th>' . $unBien['libelle'] . '</th><th>'
                . $unBien['Prix'] . '</th></tr>';
            }
            ?>
        </table>
        <?php
        include_once'../inc/piedDePage.inc';
        ?>
    </body>
</html>