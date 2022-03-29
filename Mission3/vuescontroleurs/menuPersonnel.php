<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Menu Agent Immobilier</h1>
        <?php        
        echo '<p> Connecté en tant que User</p>';
        ?>
        <p> Ajout bien </p>        
        <p> Description du bien </p>
        <input type="text" name="description" id="description"><br/>
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
            <p> Prix </p>
        <input type="number" name="prix" id="prix"><br/>
        <p> Ville </p>
        <input type="text" name="ville" id="ville"><br/>
        <p> Superficie </p>
        <input type="number" name="superficie" id="superficie">
        <p> Nombre de pièces </p>
        <input type="number" name="nbpieces" id="nbpieces">
        <button type='submit' class="btnValider" name="submit" value="envoyer">AJOUTER</button>
    </body>
</html>
