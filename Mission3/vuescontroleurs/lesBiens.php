<?php
include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
?>
<table class="biens">
    <thead>
        <tr>
            <td colspan="4">La liste des biens</td>
        </tr>
    </thead>
    <tr class="entete">
        <td>Ref</td>
        <td>Ville</td>
        <td>Type</td>
        <td>Prix</td>
    </tr>
    <?php
    include_once'../modeles/mesFonctionsAccesBDD.php';
    include_once'../modeles/accesBiens.php';
    $pdo = connexionBDD();
    if (count($_POST) != 0) {
        if ($_POST['id'] != 0) {
            $id = $_POST['id'];
            include_once'../modeles/afficherbiens.php';
            include_once'../modeles/typeBiens.php';
            $unBien = getLeBien($pdo, $id);
            $lesTypes = getTypes($pdo);
            foreach ($lesTypes as $unType) {
                if($unType['ID']==$id){
                    $libelle = $unType['libelle'];
                }
            }
            echo '<form method="post" id="bien' . $unBien['ID'] . '" action="bien.php"><input type="hidden" name="bien" value="' . $unBien['ID'] . '"/></form>'
            . '<tr class="survolage" onclick=\'document.getElementById("bien' . $unBien['ID'] . '").submit()\'>'
            . '<td>' . $unBien['ID'] . '</td>'
            . '<td>' . $unBien['ville'] . '</td>'
            . '</td><td>' . $libelle . '</td>'
            . '<td>' . $unBien['prix'] . '</td>'
            . '</tr>';
        } else {
            $ville = $_POST['ville'];
            $type = $_POST['type'];
            $min = $_POST['min'];
            $max = $_POST['max'];
            $jardin = $_POST['jardin'];
            $superficie = $_POST['superficie'];
            $nbpieces = $_POST['nbpieces'];
            include_once'../modeles/requeteRecherche.php';
            $lesBiens = rechercheBiens($pdo, $type, $ville, $min, $max, $jardin, $superficie, $nbpieces);
            foreach ($lesBiens as $unBien) {
                echo '<form method="post" id="bien' . $unBien['ID'] . '" action="bien.php"><input type="hidden" name="bien" value="' . $unBien['ID'] . '"/></form>'
                . '<tr class="survolage" onclick=\'document.getElementById("bien' . $unBien['ID'] . '").submit()\'>'
                . '<td>' . $unBien['ID'] . '</td>'
                . '<td>' . $unBien['ville'] . '</td>'
                . '</td><td>' . $unBien['libelle'] . '</td>'
                . '<td>' . $unBien['prix'] . '</td>'
                . '</tr>';
            }
        }
    } else {
        $lesBiens = getLesBiens($pdo);
        foreach ($lesBiens as $unBien) {
            echo '<form method="post" id="bien' . $unBien['id'] . '" action="bien.php"><input type="hidden" name="bien" value="' . $unBien['id'] . '"/></form>'
            . '<tr class="survolage" onclick=\'document.getElementById("bien' . $unBien['id'] . '").submit()\'>'
            . '<td>' . $unBien['id'] . '</td>'
            . '<td>' . $unBien['ville'] . '</td>'
            . '</td><td>' . $unBien['libelle'] . '</td>'
            . '<td>' . $unBien['Prix'] . '</td>'
            . '</tr>';
        }
    }
    ?>
</table>
    <?php
    include_once'../inc/piedDePage.inc';
    ?>
