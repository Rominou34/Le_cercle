<?php


require 'db.class.php';

class Media {
  private $id;
  private $url;
  private $titre;
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

  public function getImage() {
    return $this->image;
  }

  public function getVideo() {
    return $this->video;
  }

  public function getDate() {
    return $this->date;
  }

  public function __construct($u = NULL, $ti = NULL, $im = NULL, $vid = NULL) {
    if(!is_null($u) && !is_null($ti) && !is_null($im) && !is_null($vid)) {
      $this->url = $u;
      $this->titre = $ti;
      $this->image = $im;
      $this->video = $vid;
    }
  }

  public static function insertMedia($u, $ti, $im, $vid) {
    $sql = "INSERT INTO medias (url, titre, image, video) VALUES(:url, :titre, :image, :video)";
    $values = array(
      "url" => $u,
      "titre" => $ti,
      "image" => $im,
      "video" => $vid
    );
    $bdd = new DB();
    $msg = $bdd->queryCreate($sql, $values);
    echo('<div class="soft-notif">'.$msg.'</div>');
  }

  public function publier() {
    $this->insertMedia($this->url, $this->titre, $this->image, $this->video);
  }

  public static function deleteArticle(){
      $sql = "DELETE FROM medias WHERE id = :id;";
      $values = array ("id" => $this->id);
      $bdd = new DB();
      $msg = $bdd ->queryDelete($sql, $values);
      echo('<div class="soft-notif">'.$msg.'</div>');
  }

  public static function getArticleByUrl($url) {
    $sql = "SELECT * from medias WHERE url=:url";
    $values = array(
      "url" => $url
    );
    $bdd = new DB();
    return $bdd->queryClass($sql, $values, 'Article');
  }
}

