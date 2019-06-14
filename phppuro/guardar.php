<?php
	include("conexion.php");

	$ciudad = $_POST['ciudad'];
	$pais = $_POST['pais'];

	$query = "INSERT INTO ciudades(ciudad,pais) VALUES('$ciudad','$pais')";

	$resultado = $conexion->query($query);

	if($resultado)
		header("location: formulario.php");
?>