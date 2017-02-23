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

	if(isset($_POST['del_media'])){

		//NUMÉRO COMMANDE
		$num = $_POST['num'];

		if(!empty($num)){

			$bdd->queryEvent("DELETE FROM medias WHERE id='".$num."'");

			redirect_to("medias.php?alert=successDel");

		} else {
			redirect_to("medias.php?alert=errorDel");
		}

	}
?>	

