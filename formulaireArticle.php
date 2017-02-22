<?php

require('PierrBack/Article.php');

// Lorsque le formulaire a ete envoye
if(isset($_GET['envoi'])) {
  try {
      $titre = $_POST['titre'];
      $soustitre = $_POST['soustitre'];
      $texte = $_POST['texte'];
      $lien_photo = NULL;
      $video = $_POST['video'];

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

      $article = new Article($url, $titre, $soustitre, $texte, $lien_photo, $video);
      $article->publier();
  } catch (Exception $e) {
    echo('Erreur:'.$e);
  }
}



?>
<form id="inscription_form" method="post" action="?envoi" enctype="multipart/form-data">
  <fieldset>
    <legend>Infos article</legend>
    <input type="text" id="titre" name="titre" value="" tabindex="1" required/>
    <input type="text" id="soustitre" name="soustitre" value="" tabindex="2" required/>
    <textarea type="text" id="texte" name="texte" value="" tabindex="3" required></textarea>
    <input type="file" id="photo" name="photo" tabindex="5"/>
    <input type="text" id="video" name="video" tabindex="6"
  </fieldset>

  <div style="text-align:center;"><input type="submit" name="envoi_ins" value="Envoyer" /></div>
</form>
