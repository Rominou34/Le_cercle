<?php

	function redirect_to($url)
	{
		header("Location: $url");
	}
	include("db.class.php");
	$bdd = new DB();

	/*
	**************************
	*  AJOUTER UN ARTICLE  *
	**************************
	*/

	if(isset($_POST['ajouter_media'])){
		//TITRE
		$titre = $_POST['titre'];
		if(!empty($_POST['titre'])) {

            // Soit une vidéo, soit une photo a été choisie
            if(!empty($_POST['video']) xor !empty($_FILES['image']['name'])) {

              // Si c'est une photo, on la met sur le serveur
              if(!empty($_FILES['image']['name'])) {
                   // Verifie si l'image est valide
                $target_dir = "../img/img_articles/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $image_name = basename($_FILES["image"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . "\n";
                    $lien_photo = $image_name;
                } else {
                    redirect_to("medias.php?alert=errorImg");
                }

                // Upload de l'image
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    //echo "Upload de l'image réussi\n";
                } else {
                    redirect_to("medias.php?alert=errorUImg");
                }
              } else {
                // Si c'est une vidéo, on récupère l'url
                $video = $_POST['video'];
              }

              $bdd->queryEvent('INSERT INTO medias(titre, image, video) 
					VALUES ("'.$titre.'","'.$lien_photo.'","'.$video.'")');
                
                redirect_to("medias.php?alert=success");
            } else {
                
                redirect_to("medias.php?alert=errorField");
			}
	}
    }
?>	
