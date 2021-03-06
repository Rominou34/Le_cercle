<?php
class DB {

	private $host = 'localhost';
	private $userName = 'root';
	private $password = '';
	private $dataBase = 'magicien';
	private $bdd;

	// private $host = '10.0.216.66';
	// private $userName = 'qgandcom';
	// private $password = '10Qgandcom';
	// private $dataBase = 'site_qgandcom';
	// private $bdd;

	public function __construct($host = null, $userName = null, $password = null, $dataBase = null){
		if ($host != null) {
			$this->host = $host;
			$this->userName = $userName;
			$this->password = $password;
			$this->dataBase = $dataBase;
		}

		try {
			$this->bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->dataBase, $this->userName, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
		} catch(PDOException $e){
			die('<center><h1>Impossible de se connecter à la base</h1></center>');
		}
	}

	public function query($sql, $data = array()){
		$req = $this->bdd->prepare($sql);
		$req->execute($data);
		return $req->fetchAll(PDO::FETCH_OBJ);
	}

	public function queryOne($sql, $data = array()){
		$req = $this->bdd->prepare($sql);
		$req->execute($data);
		return $req->fetch(PDO::FETCH_OBJ);
	}

	public function queryCount($sql, $data = array()){
		$req=$this->bdd->prepare($sql);
		$req->execute($data);
		return $count = $req->rowCount();
	}

	public function queryEvent($sql, $data = array()){
		$req = $this->bdd->prepare($sql);
		$req->execute($data);
		return $req;
	}

	public function queryClass($sql, $data = array(), $class){
		$req = $this->bdd->prepare($sql);
		$req->execute($data);
		$req->setFetchMode(PDO::FETCH_CLASS, $class);
		return $req->fetch();
	}
}

?>
