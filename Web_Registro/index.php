<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="testea.css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
</head>
<body>

<h1>Registro de Usuarios</h1>

<div id="wrapper">
  
  <table id="keywords">
    <thead>
      <tr>
        <!--<th>ID usuario</th>-->
        <th>Usuario</th>
        <th>Nº Puzle</th>
        <th>Fecha</th>
        <th>maxVeloX (px/s)</th>
		<th>maxVeloY (px/s)</th>
		<th>fallos</th>
		<th>Tiempo entre Pulsaciones (ms)</th>
		<th>Tiempo Total (seg)</th>
		<th>N1</th>
		<th>N2</th>
		<th>N3</th>
      </tr>
    </thead>
    <tbody>
   
     
   


<?php
	require("ModeloDAO.php");
	$modelo = new ModeloDAO();
	$datos = $modelo->mostrarUsuarios();
	
	for($i=0; $i<count($datos); $i++)
	{
		//$cad = "<tr><td>". $datos[$i][0]. "</td>";
		$cad = "<tr><td>". $datos[$i][0]. "</td>";
		$cad .= "<td>". $datos[$i][1]. "</td>";
		$cad .= "<td>". $datos[$i][2]. "</td>";
		$cad .= "<td>". $datos[$i][3]. "</td>";
		$cad .= "<td>". $datos[$i][4]. "</td>";
		$cad .= "<td>". $datos[$i][5]. "</td>";
		$cad .= "<td>". $datos[$i][6]. "</td>";
		$cad .= "<td>". $datos[$i][7]. "</td>";
		$cad .= "<td>". $datos[$i][8]. "</td>";
		$cad .= "<td>". $datos[$i][9]. "</td>";
		$cad .= "<td>". $datos[$i][10]. "</td></tr>";

		echo "$cad";
	}	
?>

	</tbody>
  </table>
</div> 
<footer>
<p>Antonio Sanz Corbalán<br>
Detección de anomalias de espectro autista en niños a temprana edad</p>

</footer>

<script type="text/javascript">
$(function(){
  $('#keywords').tablesorter(); 
});
</script>
</script>
</body>
</html>