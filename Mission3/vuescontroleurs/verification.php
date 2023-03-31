<?php

include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
if (!isset($_SESSION["type"])) {
    header('Location: ../vuescontroleurs/index.php');
    die();
} else {
    if ($_SESSION["type"] != 'utilisateur') {
        header('Location: ../vuescontroleurs/index.php');
        die();
    }
}
?>
<form method="POST" id="form" action="../modeles/verification.php">
    <fieldset>
        <legend>Verification : Veuillez entrer le mot de passe à nouveau</legend>
        <div id='corpForm'>
            <div class="mdp">
                <label for="password">Mot de Passe</label><br/>
                <input type="password" name="password" id="password" required>          
            </div>
        </div>
        <div id="piedForm">
            <input type="submit" name="valid" id="valid" value="Envoyer"/>
        </div>
    </fieldset>   
</form>
<?php
include_once'../inc/piedDePage.inc';
?>
