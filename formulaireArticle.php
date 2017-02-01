<?php

require('Article.php');

// Lorsque le formulaire a ete envoye
if(isset($_GET['envoi'])) {
  try {
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $liens = $_POST['liens'];
    $lien_photo = NULL;

    // Verifie si l'image est valide
    $target_dir = "img/img_articles/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . "\n";
        $lien_photo = $target_file;
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }

    // Upload de l'image
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        echo "Upload de l'image réussi\n";
    } else {
        echo "Echec lors de l'upload\n";
    }

    $url = strtolower($titre);
    $url = str_replace(" ", "-", $url);
    echo($url);

    $article = new Article($url, $titre, $texte, $lien_photo);
    $article->publier();
  } catch (Exception $e) {
    echo('Erreur:'.$e);
  }
}



?>
<form id="inscription_form" method="post" action="?envoi" enctype="multipart/form-data">
  <fieldset>
    <legend>Vos coordonnées</legend>
    <input type="text" id="titre" name="titre" value="" tabindex="1" />
    <textarea type="text" id="texte" name="texte" value="" tabindex="2"></textarea>
    <input type="text" id="liens" name="liens" value="" tabindex="3" />
    <input type="file" id="photo" name="photo" tabindex="4"/>
  </fieldset>

  <div style="text-align:center;"><input type="submit" name="envoi_ins" value="Envoyer" /></div>
</form>
