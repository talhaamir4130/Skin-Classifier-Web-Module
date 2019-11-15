<?php
/**
 * 
 */
class addImageDB extends dbh
{
	
	public function Add_Images_to_DB($name,$location,$appr)
	{
		$sqlQuery= "INSERT INTO `images`(`name`, `dir_loc`, `approval`) VALUES ('".$name."','".$location."','".$appr."')";
		$this->connect()->query($sqlQuery);
	}
}


?>