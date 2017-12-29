<?php
include_once('../config/Config.php');
class Conexion{
	private $host;
	private $user;
	private $password;
	private $db;
	private $con;
	public function __construct(){
		$this->host = HOST;
		$this->user = USERNAME;
		$this->password = DBPASS;
		$this->db = DATABASE;
		$this->con = mysqli_connect($this->host,$this->user,$this->password,$this->db);
		$this->con->query("SET NAMES 'utf8'");
	}
	public function consultaSimple($sql){
		 mysqli_query($this->con, $sql);
	}
	public function consultaRetorno($sql){
		return mysqli_query($this->con, $sql);
	}
}
