<?php

include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
?>
<script src="form.js" type="javascript"></script>
<form method="POST" id="form" action="../modeles/creationCompte.php">
    <fieldset>
        <legend>Création de compte</legend>
        <div id='corpForm'>
            <div class="nom">
                <label for="nom">Nom</label><br/>
                <input type="text" name="nom" for="nom" id="nom" required><br/>
            </div>
            <div class="prenom">
                <label for="prenom">Prénom</label><br/>
                <input type="text" name="prenom" for="prenom" id="prenom" required><br/>
            </div>
            <div class="email">
                <label for="email">Email</label><br/>
                <input type="email" name="email" for="email" id="email" required><br/>
            </div>
            <div class="mdp">
                <label for="password">Mot de Passe</label><br/>
                <input type="password" name="password" id="password" 
                       title="Au moins 8 caractères : Minuscule, Majuscule, Chiffre"
                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>          
            </div>
            <div class="consentement">
                <input type="checkbox" name="consentement" id="consentement" value=true required/>
                <label for="consentement" title="consentement">Accepter la <a href="politique.php" target="_blank">politique de protection des données</a></label>
            </div>
        </div>
        <div id="piedForm">
            <input type="submit" name="valid" id="valid" value="Envoyer"/>
            <a href="formulaire.php">Se connecter</a>
        </div>
    </fieldset>   
</form>
<?php

include_once'../inc/piedDePage.inc';
?>
