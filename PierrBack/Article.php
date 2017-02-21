<?php

require 'db.class.php';

class Article {
  private $id;
  private $url;
  private $titre;
  private $soustitre;
  private $texte;
  private $image;
  private $video;
  private $date;


  public function getId() {
    return $this->id;
  }

  public function getUrl() {
    return $this->url;
  }

  public function getTitre() {
    return $this->titre;
  }

  public function getSousTitre() {
    return $this->soustitre;
  }

  public function getTexte() {
    return $this->texte;
  }

  public function getImage() {
    return $this->image;
  }

  public function getVideo() {
    return $this->video;
  }

  public function getDate() {
    return $this->date;
  }

  public function __construct($u = NULL, $ti = NULL, $st = NULL, $te = NULL, $im = NULL, $vid = NULL) {
    if(!is_null($u) && !is_null($ti) && !is_null($st) && !is_null($te) && !is_null($im) && !is_null($vid)) {
      $this->url = $u;
      $this->titre = $ti;
      $this->soustitre = $st;
      $this->texte = $te;
      $this->image = $im;
      $this->video = $vid;
    }
  }

  public static function insertArticle($u, $ti, $st, $te, $im, $vid) {
    $sql = "INSERT INTO articles(url, titre, soustitre, texte, image, video) VALUES(:url, :titre, :soustitre, :texte, :image, :video)";
    $values = array(
      "url" => $u,
      "titre" => $ti,
      "soustitre" => $st,
      "texte" => $te,
      "image" => $im,
      "video" => $vid
    );
    $bdd = new DB();
    $msg = $bdd->queryCreate($sql, $values);
    echo('<div class="soft-notif">'.$msg.'</div>');
  }

  public function publier() {
    $this->insertArticle($this->url, $this->titre, $this->soustitre, $this->texte, $this->image, $this->video);
  }

  public static function getArticleByUrl($url) {
    $sql = "SELECT * from articles WHERE url=:url";
    $values = array(
      "url" => $url
    );
    $bdd = new DB();
    return $bdd->queryClass($sql, $values, 'Article');
  }
}
