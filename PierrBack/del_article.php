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

	if(isset($_POST['del_article'])){

		//NUMÉRO COMMANDE
		$num = $_POST['num'];

		if(!empty($num)){

			$bdd->queryEvent("DELETE FROM articles WHERE id='".$num."'");

			redirect_to("articles.php?alert=successDel");

		} else {
			redirect_to("articles.php?alert=errorDel");
		}

	}
?>	