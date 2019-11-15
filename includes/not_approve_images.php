<?php
	include 'dbh.php';
class not_app_img extends dbh
{
	public function not_approve_images($imag_name)
	{
		$sqlQuery= "UPDATE `images` SET `approval`='Not Approved' WHERE `name`='".$imag_name."'";
		$run = $this->connect()->query($sqlQuery);
		return $run;
	}
}
	
?>