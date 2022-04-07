<?php
include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
?>
<script src="form.js" type="javascript"></script>
<form method="POST" id="form" action="../modeles/connexion.php">
    <fieldset>
        <div clas="mail">
            <label for="mail">Email</label><br/>
            <input type="text" name="email" for="email" id="email" required><br/>
        </div>
        <div class="mdp">
            <label for="password">Mot de Passe</label><br/>
            <input type="password" name="password" id="password" required>          
        </div>
        <br/>
        <button type='submit' class="btnValider" name="submit" value="envoyer">ENVOYER</button>
    </fieldset>   
</form>
<?php
include_once'../inc/piedDePage.inc';
?>
