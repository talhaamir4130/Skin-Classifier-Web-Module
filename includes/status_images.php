<?php
class stauts_img extends dbh
{
	public function getAllImages()
	{
		$sqlQuery= "SELECT * from `images`";
		$result = $this->connect()->query($sqlQuery);
		$numRows=$result->num_rows;
		if($numRows>0)
		{
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
	}


	public function getStatus($img_name)
	{
		$sqlQuery= "SELECT * from `images` WHERE `name`='".$img_name."'";
		$result = $this->connect()->query($sqlQuery);
		$numRows=$result->num_rows;
		if($numRows>0)
		{
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
	}

}  

?>