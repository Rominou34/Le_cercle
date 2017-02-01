<?php

require_once('conf.php');

class Article {
  private $id;
  private $url;
  private $titre;
  private $texte;
  private $photo;

  public function getId() {
    return $this->id;
  }

  public function getUrl() {
    return $this->url;
  }

  public function getTitre() {
    return $this->titre;
  }

  public function getTexte() {
    return $this->texte;
  }

  public function getPhoto() {
    return $this->photo;
  }

  public function __construct($u = NULL, $ti = NULL, $te = NULL, $p = NULL) {
    if(!is_null($u) && !is_null($ti) && !is_null($te) && !is_null($p)) {
      $this->url = $u;
      $this->titre = $ti;
      $this->texte = $te;
      $this->photo = $p;
    }
  }

  public static function insertArticle($u, $ti, $te, $p) {
    try {
      $sql = "INSERT INTO articles(url, titre, texte, photo) VALUES(:url, :titre, :texte, :photo)";
      $req_prep = Model::$pdo->prepare($sql);
      $values = array(
        "url" => $u,
        "titre" => $ti,
        "texte" => $te,
        "photo" => $p
      );
      $req_prep->execute($values);
    } catch (Exception $e) {
      if(Conf::getDebug()) {
        echo($e->getMessage());
      } else {
        echo("Une erreur est survenue");
      }
    }
  }

  public function publier() {
    $this->insertArticle($this->url, $this->titre, $this->texte, $this->photo);
  }

  public static function getArticleByUrl($url) {
    $sql = "SELECT * from articles WHERE url=:url";
    $req_prep = Model::$pdo->prepare($sql);
    $values = array(
      "url" => $url
    );
    $req_prep->execute($values);
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Article');
    return $req_prep->fetch();
  }
}
