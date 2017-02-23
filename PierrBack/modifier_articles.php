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
      $values = array(
        "id" => $id,
        "titre" => $titre,
        "soustitre" => $soustitre,
        "texte" => $textbase,
      );
        $bdd->queryEvent('UPDATE articles
          SET titre = :titre, soustitre = :soustitre, texte = :texte WHERE id = :id', $values);

        redirect_to("articles.php?alert=success");
    } else {

        redirect_to("articles.php?alert=errorField");
			}
?>
