
<link rel=stylesheet type="text/css" href="css/style.css">

<?php
  require ('PierrBack/Article.php');

  if(isset($_GET['url'])) {
    $url = $_GET['url'];
    $article = Article::getArticleByUrl($url);
  }
?>

<div class="toto">


<h1>
  <?php echo($article->getTitre()); ?>
</h1>
<h2>
  <?php echo($article->getSousTitre()); ?>
</h2>
<p>
  <?php echo($article->getTexte()); ?>
</p>
<img class="img-article" src="img/img_articles/<?php echo($article->getImage()); ?>"/>
<iframe width="560" height="315" src="<?php echo($article->getVideo()); ?>" frameborder="0" allowfullscreen></iframe>
</div>
