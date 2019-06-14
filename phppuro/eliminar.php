<?php
	include("conexion.php");

	$idCiudad = $_REQUEST['id'];

	$query = "DELETE  from ciudades WHERE idCiudad='$idCiudad'";

	$resultado = $conexion->query($query);

	if($resultado)
		header("location: tabla.php");
	else
		echo "error";
?>