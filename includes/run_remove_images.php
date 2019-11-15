<?php
	include 'dbh.php';
	include 'remove_images.php';
	include 'status_images.php';


	echo $_POST['name'];

	$result = (new remove_img)->remove_image($_POST['name']);

	$data = (new stauts_img)->getStatus($_POST['name']);

	foreach ($data as $item) {
			$LOC = $item['dir_loc'];
	}
	
	unlink('../img/skin_pics/'.DIRECTORY_SEPARATOR.$_POST['name']);


?>