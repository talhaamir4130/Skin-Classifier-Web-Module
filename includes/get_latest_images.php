<?php
	include 'dbh.php';
	include 'status_images.php';

	$files = scandir('../img/skin_pics/', SCANDIR_SORT_DESCENDING);

	$dataArray= array();

	$i=0;
	while ($i <= 15) {
		
		$data = (new stauts_img)->getStatus($files[$i]);
		$dataArray[$i]=$data;
		$i++;
	}
	echo json_encode($dataArray);
	//echo json_encode($files);

?>