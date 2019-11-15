<?php
	include 'approve_images.php';
	
	$imgName = $_POST['name'];

	$temp = (new app_img)->approve_images($imgName);

?>