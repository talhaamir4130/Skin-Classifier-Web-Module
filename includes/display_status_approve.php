<?php 
	include 'dbh.php';
	include 'status_images.php';

	$img_name=$_POST['name'];

	$data = (new stauts_img)->getStatus($img_name);

	foreach ($data as $item) {
		$staus = $item['approval'];
		echo $staus;
	}

?>