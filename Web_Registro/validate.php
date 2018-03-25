<?php


if(isset($_POST['submit'])){
	

	$nombre = $_POST['nombre'];
	$password = $_POST['pass'];
	
	if(($nombre == "admin") && ($password == "admin"))
		header("location: index.php");
		//Entrar en usuarios registrados
	else
		echo "datos incorrectos";
		//datos incorrectos
	
}


?>