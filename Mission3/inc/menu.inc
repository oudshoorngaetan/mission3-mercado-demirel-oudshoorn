<nav>
    <?php
    session_start()
    ?>
    <ul>
        <li class="menu"><a href="index.php">Accueil</a></li>
        <li class="menu"><a href="lesBiens.php"> Les biens</a>
            <ul class="sub-menu">
                <li><a href=""> Maisons </a></li>
                <li><a href=""> Appartements </a></li>
                <li><a href=""> Locaux </a></li>
                <li><a href=""> Terrains nus </a></li>
                <li><a href=""> Immeubles </a></li>
            </ul>
        </li>        
        <li class="menu"><a href="recherche.php">Rechercher</a></li>
        <li class="menu"><a href="contact.html">Contact</a></li>
            <?php
            if (isset($_SESSION["connexion"])) {
                if ($_SESSION["connexion"] == 'oui') {
                    echo '<li class = "menu">Menu Agent'
                    . '<ul class="sub-menu">'
                    . '<li><a href="menuPersonnel.php"> Ajout Bien </a></li>'
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