<?php

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "admin" && $password == "admin"){
		header("location: index.php");
	}
	else{
		echo "Incorrect password or username";
	}
}
?>