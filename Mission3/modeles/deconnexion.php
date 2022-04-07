<?php

session_start();
if (isset($_SESSION["connexion"])) {
    $_SESSION["connexion"] = null;
    header('Location: ../vuescontroleurs/index.php');
    die();
} else {
    echo 'Redirection';
    header('Location: ../vuescontroleurs/index.php');
    die();
}