<?php

 include("PierrBack/db.class.php");
 $bdd = new DB();

// liste des événements
 $json = array();
 // requête qui récupère les événements
 $requete = $bdd->queryEvent("SELECT * FROM commande_calendrier ORDER BY id");
 
 // envoi du résultat au success
 echo json_encode($requete->fetchAll(PDO::FETCH_ASSOC));
 
?>