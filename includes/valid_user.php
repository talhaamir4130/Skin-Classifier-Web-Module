<?php
    session_start();
	include 'dbh.php';
    include 'user.php';
    include 'viewuser.php';

    $user = new ViewUser();

    $user_name = $_POST["u"];
    $pass_word = $_POST["p"];
 
    //echo $user_name."</br>";
 

    $hashed_password = hash('sha512', $pass_word);
    
    //echo $hashed_password."</br>";

    $usertype = $user->get_user_type($user_name,$hashed_password);


    if($usertype=="admin")
    {
        $_SESSION["usertype"] = $usertype;
    	header("Location: ../gallery.php");
  		exit();
    }
    if($usertype=="doctor")
    {
        $_SESSION["usertype"] = $usertype;
        header("Location: ../gallery.php");
        exit();
    }
    else 
    {
    	echo "wrong inpt";
    }
?>