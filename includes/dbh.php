<?php
class dbh
{
	private $servername;
	private $dbname;
	private $username;
	private $password;

	protected function connect()
	{
		$this->servername= "localhost";
		$this->dbname="lesions";
		$this->username = "talha";
		$this->password = "abc";

		$conn = new mysqli($this->servername, $this->username, $this->password ,$this->dbname); 
		return $conn;
	}
}
?>