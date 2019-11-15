<?php
	include 'dbh.php';
class app_img extends dbh
{
	public function approve_images($imag_name)
	{
		$sqlQuery= "UPDATE `images` SET `approval`='Approved' WHERE `name`='".$imag_name."'";
		$run = $this->connect()->query($sqlQuery);
		return $run;
	}
}
	
?>