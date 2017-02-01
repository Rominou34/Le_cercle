
<link rel=stylesheet type="text/css" href="style.css">

<?php
  require ('Article.php');

  if(isset($_GET['url'])) {
    $url = $_GET['url'];
    $article = Article::getArticleByUrl($url);
  }
?>

<div class="toto">


<h1>
  <?php echo($article->getTitre()); ?>
</h1>
<p>
  <?php echo($article->getTexte()); ?>
</p>
<img src="<?php echo($article->getPhoto()); ?>"/>
</div>
