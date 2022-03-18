<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Club" content="Présentation"> 
        <title> Accueil </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> 
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
        <script src="../javascript/PDF.js" defer></script> 
    </head>
    <body>
        <header class="accueil">	
            <picture class="logo">
                <img src="img/accueil1_2.png" alt="logo">
            </picture>		
            <h1 class="index"> La vie,<br>la maison </h1>
        </header>
        <?php
        include_once'inc/menu.inc';
        ?>
        <article class="intro">
            <h2> LaForêt </h2>
            <p> LaForêt est un réseau d'agence immobilières crée en 1981 d'abord en tant que <br>
                agence indépendante puis en tant que franchise à partir de 1991. <br>
                Elle comptas plus de 700 agences franchisées partout en France aujourd'hui <br>
                Voir même au Portugal et au Luxembourg </p>
        </article>
        <?php
        include_once'inc/piedDePage.inc';
        ?>
    </body>
</html>
