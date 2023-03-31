<nav>
    <?php
    session_start()
    ?>
    <ul>
        <li class="menu"><a href="index.php">Accueil</a></li>
        <li class="menu"><a href="lesBiens.php"> Les biens</a></li>        
        <li class="menu"><a href="recherche.php">Rechercher</a></li>
            <?php
            if (isset($_SESSION["connexion"])) {
                if (isset($_SESSION["type"]) && $_SESSION["type"] == 'agent') {
                    echo '<li class = "menu">Menu Agent'
                    . '<ul class="sub-menu">'
                    . '<li><a href="ajoutBien.php"> Ajout Bien </a></li>'
                    . '<li><a href="modifierBien.php"> Modifier Bien </a></li>'
                    . '<li><a href="supprimerBien.php"> Supprimer Bien </a></li>'
                    . '<li><a href="../modeles/deconnexion.php"> Déconnexion </a></li>'
                    . '</ul>'
                    . '</li>';
                } else {
                    if (isset($_SESSION["type"]) && $_SESSION["type"] == 'utilisateur') {
                        echo '<li class = "menu">Menu Utilisateur'
                        . '<ul class="sub-menu">';
                        if (isset($_SESSION['verification']) && $_SESSION['verification'] == true) {
                            echo '<li><a href="compte.php"> Compte </a></li>';
                        } else {
                            echo '<li><a href="verification.php"> Compte </a></li>';
                        }
                        echo '<li><a href="../modeles/deconnexion.php"> Déconnexion </a></li>'
                        . '</ul>'
                        . '</li>';
                    } else {
                        echo '<li class = "menu"><a href = "formulaire.php">Se connecter</a></li>';
                    }
                }
            } else {
                echo '<li class = "menu"><a href = "formulaire.php">Se connecter</a></li>';
            }
            ?>
    </ul>
</nav>