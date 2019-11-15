<?php
class ViewUser extends User
{
	function showAllUsers()
	{
		$datas = $this->getAllUsers();
		foreach ($datas as $data) {
			echo $data['username']."<br>";
			echo $data['password']."<br>";
		}
	}

	public function get_user_type($username,$password)
	{
		$datas = $this->getAllUsers();
		foreach ($datas as $data) {

			//echo "username in DB : ".$data['username']."</br>";
			//echo "password in  DB : ".$data['password']."</br>";			

			if($data['username']==$username && $data['password']==$password)
			{

				//echo $data['type']."</br>";
				return $data['type'];
			}
		}
		return "noMatch";
	}
} 
?>