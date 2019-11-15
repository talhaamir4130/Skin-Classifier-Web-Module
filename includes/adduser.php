<?php

class addUser extends dbh
{
	public function Add_User($username,$password,$email)
	{
		$sqlQuery= "INSERT INTO `users`(`type`, `username`, `password`, `email`) VALUES ('doctor','".$username."','".$password."','".$email."')";
		$result = $this->connect()->query($sqlQuery);
		return $result;
	}
}


?>