<?php
include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
?>
<table class="biens" id="tableBiens">
    <thead>
        <tr>
            <td colspan="4">La liste des biens</td>
        </tr>
    </thead>
    <tr class="entete">
        <td onclick="sortTable(0)" class="sort">Ref</td>
        <td onclick="sortTable(1)" class="sort">Ville</td>
        <td onclick="sortTable(2)" class="sort">Type</td>
        <td onclick="sortTable(3)" class="sort">Prix</td>
    </tr>
    <?php
    include_once'../modeles/mesFonctionsAccesBDD.php';
    include_once'../modeles/accesBiens.php';
    $pdo = connexionBDD();
    if (count($_POST) != 0) {
        if ($_POST['id'] != 0 && isset($_SESSION["connexion"]) && $_SESSION["connexion"] == 'oui') {
            $_SESSION["suppression"] = 'oui';
            $id = $_POST['id'];
            include_once'../modeles/afficherbiens.php';
            include_once'../modeles/typeBiens.php';
            $unBien = getLeBien($pdo, $id);
            $lesTypes = getTypes($pdo);
            foreach ($lesTypes as $unType) {
                if ($unType['ID'] == $unBien['IDType']) {
                    $libelle = $unType['libelle'];
                }
            }
<<<<<<< HEAD
            echo '<form method="post" id="bien' . $id . '" action="../modeles/supprimerBien.php"><input type="hidden" name="id" value="' . $id . '"/></form>'
            . '<tr class="survolage" onclick=\'document.getElementById("bien' . $id . '").submit()\'>'
            . '<td>' . $id . '</td>'
            . '<td id="ville">' . $unBien['ville'] . '</td>'
=======
            echo '<form method="post" id="bien' . $unBien['ID'] . '" action="bien.php"><input type="hidden" name="bien" value="' . $unBien['ID'] . '"/></form>'
            . '<tr class="survolage" onclick=\'document.getElementById("bien' . $unBien['ID'] . '").submit()\'>'
            . '<td>' . $unBien['ID'] . '</td>'
<<<<<<< HEAD
=======
            . '<td id="ville">' . $unBien['ville'] . '</td>'
            . '</td><td>' . $unBien['libelle'] . '</td>'
>>>>>>> 49f9414b8bcaf24348d242c7acfa79e9044b78c8
            . '<td>' . $unBien['ville'] . '</td>'
>>>>>>> c53515c15472d7f3fd3792b787708f6a0f0de4b4
            . '</td><td>' . $libelle . '</td>'
            . '<td>' . $unBien['prix'] . '</td>'
            . '<button onclick=\'document.getElementById("bien' . $id . '").submit()\'>Supprimer</button>'
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
