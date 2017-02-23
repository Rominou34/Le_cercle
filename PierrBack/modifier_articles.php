<?php

	function redirect_to($url)
	{
		header("Location: $url");
	}

  require("Article.php");
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
		//SOUSTITRE
		$soustitre = $_POST['soustitre'];
		//TEXTE
		$textbase = $_POST['texte'];
    $texte = htmlspecialchars($textbase);
		if(!empty($_POST['titre']) && !empty($_POST['soustitre']) && !empty($_POST['texte'])) {

            $article_actuel = Article::getArticlebyId($id);
            var_dump($article_actuel);
            /*
              $bdd->queryEvent('UPDATE articles(titre, soustitre, texte, image, video)
					VALUES ("'.$titre.'","'.$soustitre.'","'.$texte.'","'.$lien_photo.'","'.$video.'")');

                redirect_to("articles.php?alert=success");
            } else {

                redirect_to("articles.php?alert=errorField");*/
			}
/*}*/
?>
