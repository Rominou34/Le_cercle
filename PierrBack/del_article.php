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
	    $image=$bdd->query("SELECT image FROM articles WHERE id='".$num."'");
	    foreach ($image as $img) {
	        $deleted=unlink("../img/img_articles/".$img->image);
	    }
	    $suppr = $bdd->queryEvent("DELETE FROM articles WHERE id='".$num."'");
			if($suppr) {
				redirect_to("articles.php?alert=successDel");
	    } else {
	        redirect_to("articles.php?alert=errorDel");
	    }

		} else {
			redirect_to("articles.php?alert=errorDel");
		}

	}
?>
