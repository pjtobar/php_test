<?php
	include("conexion.php");

	$ciudad = $_POST['ciudad'];
	$pais = $_POST['pais'];
	$idCiudad = $_POST['idCiudad'];

	$query = "UPDATE  ciudades SET ciudad='$ciudad',pais='$pais' WHERE idCiudad='$idCiudad'";

	$resultado = $conexion->query($query);

	if($resultado)
		header("location: tabla.php");
	else
		echo "error";
?>