<?php
class Conf{
	static private $databases = array(
		'hostname' => 'localhost',
		'database' => 'magicien',
		'login' => 'root',
		'password' => ''
	);

    static private $debug = True;

    static public function getDebug() {
    	return self::$debug;
    }

	static public function getLogin() {

		return self::$databases['login'];
	}

	static public function getHostname(){
		return self::$databases['hostname'];
	}

	static public function getDatabase(){
		return self::$databases['database'];
	}

	static public function getPassword(){
		return self::$databases['password'];
	}
}

class Model{
	public static $pdo;

	public static function Init(){
		$login = Conf::getLogin();
		$pass = Conf::getPassword();
		$host = Conf::getHostname();
		$dbname = Conf::getDatabase();

		try{

			self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $pass,
								 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $e) {
			echo $e->getMessage();
			die();
		}
	}
}

Model::Init();
?>
