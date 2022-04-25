<nav>
    <?php
    session_start()
    ?>
    <ul>
        <li class="menu"><a href="index.php">Accueil</a></li>
        <li class="menu"><a href="lesBiens.php"> Les biens</a></li>        
        <li class="menu"><a href="recherche.php">Rechercher</a></li>
        <li class="menu"><a href="contact.html">Contact</a></li>
            <?php
            if (isset($_SESSION["connexion"])) {
                if ($_SESSION["connexion"] == 'oui') {
                    echo '<li class = "menu">Menu Agent'
                    . '<ul class="sub-menu">'
                    . '<li><a href="ajoutBien.php"> Ajout Bien </a></li>'
                    . '<li><a href="modifierBien.php"> Modifier Bien </a></li>'
                    . '<li><a href="../modeles/deconnexion.php"> Déconnexion </a></li>'
                    . '</ul>'
                    . '</li>';
                } else {
                    echo '<li class = "menu"><a href = "formulaire.php">Se connecter</a></li>';
                }
            } else {
                echo '<li class = "menu"><a href = "formulaire.php">Se connecter</a></li>';
            }
            ?>
    </ul>
</nav>