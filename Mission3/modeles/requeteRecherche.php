<?php

function rechercheBiens($pdo, $type, $ville, $min, $max, $jardin, $superficie, $nbpieces) {
    $requete = "SELECT biens.ID,ville,libelle,prix FROM biens JOIN type ON type.id=biens.idType WHERE 1=1";
    if($type!=0){
        $requete.=" AND type.ID=:type";        
    }
    if($ville!=""){
        $requete.=" AND ville=:ville";
    }
    if($min!="" && $max!=""){
        $requete.=" AND prix BETWEEN :min AND :max";
    }
    if($jardin!=2){
        $requete.=" AND jardin=:jardin";
    }
    if ($superficie!="") {
        $requete.=" AND superficie>=:superficie";
    }
    if ($nbpieces!="") {
        $requete.=" AND nbpieces>=:nbpieces";
    }
    
    $insert = $pdo->prepare($requete);
    
    if($type!=0){
      $bind = $insert->bindValue(":type",$type,  PDO::PARAM_INT);  
    }
    if($ville!=""){
      $bind1 = $insert->bindValue(":ville",$ville,  PDO::PARAM_STR);  
    }
    if($min!="" && $max!=""){
      $bind2 = $insert->bindValue(":min",$min,  PDO::PARAM_INT);
      $bind3 = $insert->bindValue(":max",$max,  PDO::PARAM_INT);
    }
    if($jardin!=2){
       $bind4 = $insert->bindValue(":jardin",$jardin,  PDO::PARAM_INT); 
    } 
    if ($superficie!="") {
        $bind5 = $insert->bindValue(":superficie",$superficie,  PDO::PARAM_INT); 
    }
    if ($nbpieces!="") {
        $bind6 = $insert->bindValue(":nbpieces",$nbpieces,  PDO::PARAM_INT); 
    }
    $execute = $insert->execute();
    $lesBiens = $insert->fetchAll();
    return $lesBiens;
}
