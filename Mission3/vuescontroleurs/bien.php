<?php

include_once'../inc/head.inc';
include_once'../inc/entete.inc';
include_once'../inc/menu.inc';
if(isset($_POST["bien"])) {
    $IDBien = $_POST["bien"];
}
else {
    $IDBien = 0;
    echo '<p>Aucun bien sélectionné</p>';
}
if ($IDBien != 0) {
    include_once '../modeles/mesFonctionsAccesBDD.php';
    include_once '../modeles/afficherbiens.php';
    include_once '../modeles/getLesImages.php';
    $pdo = connexionBDD();
    $LEBien = getLeBien($pdo, $IDBien);
    $lesImages = getLesImages($pdo, $IDBien);
    if(isset($lesImages[0])){
    echo '<button  id="pdf" type="button" onclick="printToPDF()">
                Télécharger fiche pdf
          </button>
        <article>
		<section class="ligne">
			<img src="' . $lesImages[0]['chemin'] . '" style="width:100%" alt="' . $lesImages[0]['nom'] . '">
			<section class="colonne">
				<h2>Description</h2>
				<p>' . $LEBien['Description'] . '</p>
			</section>
		</section>
		<h2 class="titre_image">Images du bien</h2>
                <div class="slideshow-container">';
                    foreach ($lesImages as $uneImage) {
                        if(substr($uneImage['nom'],-1)!="1") {
                            echo '<div class="mySlides fade">'
                        . '<img src="' . $uneImage['chemin'] . '" style="width:100%" alt="' . $uneImage['nom'] . '">'
                        . '</div>';
                        }
                    }

           echo '</div>
                    <a class="prev" onclick="plusSlides(-1)"></a>
                    <a class="next" onclick="plusSlides(1)"></a>
                </div>
                <br>
                <div style="text-align:center">';
                    $i = 0;
                    for($i ; $i<count($lesImages)-1 ; $i++){
                        echo '<span class="dot" onclick="currentSlide(' . $i . ')"></span>';
                    }
                echo '</div>
                <script src="../javascript/slide.js"></script>
                </article>';
    } else {
        echo 'Erreur d\'affichage';
    }
}
include_once'../inc/piedDePage.inc';
?>
