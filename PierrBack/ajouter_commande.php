<?php

	function redirect_to($url)
	{
		header("Location: $url");
	}
	include("db.class.php");
	$bdd = new DB();

	/*
	**************************
	*  AJOUTER UN EVENEMENT  *
	**************************
	*/

	if(isset($_POST['ajouter_commande'])){
		//NOM
		$nom = $_POST['nom'];
		//LIEU
		$lieu = $_POST['lieu'];
		//DESCRIPTION
		$descbase = $_POST['desc'];
        $desc = htmlspecialchars($descbase);
		//PRIX
		$prix = $_POST['prix'];
		//DATE
		$oldDate = $_POST['date'];
		$date = date("Y-m-d", strtotime($oldDate));

		$date = new DateTime("$date");
		$date = $date->format('Y-m-d 00:00:00');


		if(!empty($nom) && !empty($lieu) && !empty($desc) && !empty($prix) && !empty($date)){

				
				$bdd->queryEvent('INSERT INTO commande(date_livraison,patient_id,prix_produit_id,id_praticien,description) 
					VALUES ("'.$date.'","'.$lieu.'","'.$nom.'","'.$prix.'","'.$desc.'")');
	 
	            $commande_num = $bdd->queryOne('SELECT num FROM commande WHERE date_livraison = "'.$date.'" AND patient_id = "'.$lieu.'" AND prix_produit_id = "'.$nom.'"');
				
				$bdd->queryEvent('INSERT INTO commande_calendrier(id,title,start,end,commande_num) 
					VALUES ("'.$commande_num->num.'","'.$nom.'","'.$date.'","'.$date.'","'.$commande_num->num.'")');

				redirect_to("index.php?alert=success");

			
			}else {
			redirect_to("index.php?alert=errorField");
		}

	}
?>	