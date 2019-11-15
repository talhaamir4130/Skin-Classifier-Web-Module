<?php
	include 'not_approve_images.php';
	
	$imgName = $_POST['name'];

	echo $imgName;
	$temp = (new not_app_img)->not_approve_images($imgName);

?>