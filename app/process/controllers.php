<?php 
	class database{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "quartz_tv";

		function connect(){
			mysql_connect($this->host, $this->user, $this->pass);
			mysql_select_db($this->db) or die("Cannot connect to Database :(");
		}
	}

	class session{
	function __construct(){
		session_start();
	}

	function set($username){
		$_SESSION['username'] = $username;
	}

	function check(){
		return isset($_SESSION['username']);
	}

	function destroy(){
		session_destroy();
	}

}

$con = new database;
$session = new session;
$_SESSION["cek"] = "ada";
$con->connect();
 ?>