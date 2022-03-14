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
        <table>
            <tr>
                <th>ID ::</th>
                <th>Type :</th>
                <th>Prix :</th>
                <th>Superficie :</th>
                <th>Nombre de pièces :</th>
            </tr>

            <?php
            $pdo = connexionBDD();
            $lesBiens = getLesBiens($pdo);
            foreach ($lesBiens as $unBien) {
                
            }
            ?>
        </table>
        <?php
        include_once'../inc/piedDePage.inc';
        ?>
    </body>
</html>