<?php

	function redirect_to($url)
	{
		header("Location: $url");
	}

	include("db.class.php");
	$bdd = new DB();

	/*
	****************************
	*  SUPPRIMER UNE COMMANDE  *
	****************************
	*/

	if(isset($_POST['del_commande'])){

		//NUMÉRO COMMANDE
		$num = $_POST['num'];

		if(!empty($num)){
	 
            $commande = $bdd->queryOne('SELECT * FROM commande WHERE num = "'.$num.'"');

			$bdd->queryEvent("DELETE FROM commande_calendrier WHERE id='".$num."'");

			$bdd->queryEvent("DELETE FROM preparation_calendrier WHERE id='".$num."'");

			$bdd->queryEvent("DELETE FROM commande WHERE num='".$num."'");

			$bdd->queryEvent("DELETE FROM patient WHERE id='".$commande->patient_id."'");

			redirect_to("index.php?alert=successDel");

		} else {
			redirect_to("index.php?alert=errorDel");
		}

	}
?>	