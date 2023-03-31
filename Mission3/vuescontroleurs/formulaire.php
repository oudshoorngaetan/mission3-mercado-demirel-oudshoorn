<?php
include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
?>
<script src="form.js" type="javascript"></script>
<?php
if (isset($_SESSION["compteCree"])) {
    if ($_SESSION["compteCree"]) {
        $_SESSION["compteCree"] = null;
        echo "<p>Compte créé</p>";
    } else {
        if (!$_SESSION["compteCree"]) {
            $_SESSION["compteCree"] = null;
            echo "<p class=\"rouge\">Erreur dans la création de compte</p>"
            . "<p class=\"rouge\">" . $_SESSION["erreur"] . "</p>";
            $_SESSION["erreur"] = null;
        }
    }
}
if (isset($_SESSION["connexion"])) {
    if (!$_SESSION["connexion"]) {
        $_SESSION["connexion"] = null;
        echo "<p class=\"rouge\">Connexion impossible, vérifier l'e-mail et le mot de passe</p>";
    }
}
if (isset($_SESSION["type"])) {
    if ($_SESSION["type"] != null) {
        header('Location: ../vuescontroleurs/index.php');
        die();
    }
}
?>
<form method="POST" id="form" action="../modeles/connexion.php">
    <fieldset>
        <legend>Connexion</legend>
        <div id='corpForm'>
            <div class="mail">
                <label for="mail">Email</label><br/>
                <input type="text" name="email" for="email" id="email" required><br/>
            </div>
            <div class="mdp">
                <label for="password">Mot de Passe</label><br/>
                <input type="password" name="password" id="password" required>          
            </div>
        </div>
        <div id="piedForm">
            <input type="submit" name="valid" id="valid" value="Envoyer"/>
            <a href="creerCompte.php">Créer compte</a>
        </div>
    </fieldset>   
</form>
<?php
include_once'../inc/piedDePage.inc';
?>
