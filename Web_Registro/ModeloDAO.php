<?php

class ModeloDAO{
	
	private $mysqli;
	
	function __construct(){
		require("Database.php");
		$db = Database::getInstance();
		$this->mysqli = $db->getConnection();
	}
	
		
	
	//Mostrar usuarios
	function mostrarUsuarios(){
		$sentencia = "SELECT username, puzle, fecha, maxVeloX, maxVeloY, fallos, diffTime, timeTotal, N1, N2, N3 FROM datos";
		$result = $this->mysqli->query($sentencia) or trigger_error($this->mysqli->error);
		$i=0;
		$resultado = array();
		while($row = $result->fetch_array()) {
			$resultado[]= $row; 
			$i++;
		}
		return $resultado;
	}
	

}

?>