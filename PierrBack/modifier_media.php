<?php

	function redirect_to($url)
	{
		header("Location: $url");
	}

  require("db.class.php");
	$bdd = new DB();

	/*
	**************************
	*  AJOUTER UN ARTICLE  *
	**************************
	*/

    // ID
    $id = $_GET['id'];
		//TITRE
		$titre = $_POST['titre'];
		if(!empty($_POST['titre'])) {
      $values = array(
        "id" => $id,
        "titre" => $titre,
      );
        $bdd->queryEvent('UPDATE medias
          SET titre = :titre WHERE id = :id', $values);

        redirect_to("medias.php?alert=successEdit");
    } else {

        redirect_to("medias.php?alert=errorEdit");
			}
?>

