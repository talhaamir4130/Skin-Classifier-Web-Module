<?php
class remove_img extends dbh
{
	public function remove_image($name)
	{
		$sqlQuery= "DELETE FROM `images` WHERE name='".$name."'";
		$this->connect()->query($sqlQuery);
	}
		
}	
?>