<?php
class Database {
	public $user = "COMP20030";
	public $password = "password";
	public $host = "localhost";
	public $database = "COMP20030";

	public $connection = null;
	public $statement = null;

	public function __construct() {

	}

	public function connect() {
		$this -> connection = mysqli_connect($this -> host, $this -> user, $this -> password, $this -> database);
		if($this -> connection -> connect_error) {
			die("Connection failed: " . $this -> connection -> connect_error);
		}
	}

	public function close() {
		$this -> connection -> close();
		if($this -> statement != null) { $this -> statement -> close(); }
		$this -> connection = null;
		$this -> statement = null;
	}

	public function prepare($query) {
		return $this -> statement = $this -> connection -> prepare($query);
	}
}
?>
