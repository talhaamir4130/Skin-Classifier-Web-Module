<?php
	include 'dbh.php';
	include 'add_images_db.php';


	if(isset($_POST['submit']))
	{


		$total = count($_FILES['file']['name']);

		for( $i=0 ; $i < $total ; $i++ ) {


		$file = $_FILES['file'];



		$filename = $_FILES['file']['name'][$i];
		//echo $filename.'<br>';
		$fileTmpName = $_FILES['file']['tmp_name'][$i];
		//echo $fileTmpName;
		$fileSize = $_FILES['file']['size'][$i];
		$fileError = $_FILES['file']['error'][$i];
		$fileType = $_FILES['file']['type'][$i];

		
		$filename_2=$filename;

		$fileExt = explode('.', $filename);


		$fileActualExt = 	strtolower(end($fileExt));
		$fileName_2 = array_shift(explode('.', $filename_2));
		echo $fileName_2;
		
		$Allow = array('jpg','jpeg','png');

		if (in_array($fileActualExt, $Allow) )
		{
			if ($fileError===0 && $fileSize < 9999999) 
			{

				$fileNameNew = $fileName_2.".".$fileActualExt;

				$fileDestination = '../img/skin_pics/'.$fileNameNew;
				
				$add_image = (new addImageDB)->Add_Images_to_DB($fileNameNew,$fileDestination,'Pending');

				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: ../gallery.php?uploadsucess");

			}
			else
			{
				echo "error";
			}
		}
		else
		{
			echo "Wrong input file type";
		}

		}

	}


?>