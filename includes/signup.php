<?php
	session_start();
	include 'dbh.php';
	include 'adduser.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$hashed_password = hash('sha512', $password);


	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 		 $emailErr = "Invalid email format";
 		 echo $emailErr;
		}
	else
	{

		$result = (new addUser)->Add_User($username,$hashed_password,$email);
		$_SESSION["usertype"] = "doctor";
		header('Location: ../index.php');  
	}
	
?>