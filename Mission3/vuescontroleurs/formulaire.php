<!--<link rel="stylesheet" type="text/css" src="style.css"-->
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
<script src="form.js" type="javascript"></script>
<form method="POST" id="form" action="../modeles/inscription.php">
    <fieldset>
        <div clas="mail">
            <label for="mail">Email</label><br/>
            <input type="text" name="email" for="email" id="email" required><br/> <!-- c'est pr l'email -->
            <span id="errorMAIL"></span><br/>
        </div>
        <div class="mdp">
            <label for="password">Mot de Passe</label><br/>
            <input type="password" name="password" id="password" 
                   required pattern="(?=.*\d)(?=.*[a-z](?=.*[A-Z]).{12,}" 
                   title="doit contenir au moins 12 caractères, une majuscule
                   , ue minuscule, un chiffre"> <!-- c'est pr le mot de passe -->
            <span id="errorPWD"></span><br/>
        </div>
        <br/>
        <button type='submit' class="btnValider" name="submit" value="envoyer">ENVOYER</button>
    </fieldset>
    <script>
        let monForm = document.getElementById('form');
        monForm.addEventListener('submit', function (e) {

            let monLogin = document.getElementById('email');            

            let monMDP = document.getElementById('password');
            let monErreurPwd = document.getElementById('errorPWD');
            monErreurPwd.style.color = 'red';
            let maRegEx = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{12,}$/;
            if (maRegEx.test(monMDP.value.trim()) === false) {
                monErreurPwd.innerHTML = "Le mot de pass doit comporter au moins 12 caractères, \n\n\
une majuscule, une minuscule et un caractère spécial*";
                e.preventDefault();
            } else {
                monErreurPwd.innerHTML = "";
            }
        };
    </script>
    <?php
        include_once'../inc/piedDePage.inc';
        ?>
</form>
