<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    session_start();
    include_once'../inc/head.inc';
    if (!isset($_SESSION["connexion"])) {
        if ($_SESSION["connexion"] != 'oui') {
            header('Location: ../vuescontroleurs/index.php');
            die();
        }
    }
    ?>
    <body>
        <h1>Menu d'ajout Agent Immobilier</h1>
        <?php
        echo '<p> Connecté en tant qu\'Agent</p>';
        ?>
        <span> Ajout bien </span> <br/>    
        <form name="ajout" id="ajout" method="post" action="../modeles/ajoutBien.php">
            <label for="description">Description du Bien</label><br>
            <textarea id="description" name="description" rows="4" cols="50" required>
            </textarea><br/>
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
            <span> Prix </span> 
            <input type="number" name="prix" id="prix" required><br/>
            <span> Ville </span> 
            <input type="text" name="ville" id="ville" required><br/>
            <span> Superficie </span> 
            <input type="number" name="superficie" id="superficie" required><br/>
            <span> Nombre de pièces </span> 
            <input type="number" name="nbpieces" id="nbpieces" required>
            <input type="submit" name="valid" id="valid" value="Ajouter"/>
        </form>
    </body>
</html>
