<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form action="modificar_proceso.php" method="POST"><br/><br/><br/>

			<?php  
				$id = $_REQUEST['id'];
				include("conexion.php");

				$query = "SELECT * FROM ciudades WHERE idCiudad='$id'";
				$resultado = $conexion->query($query);
				$row = $resultado->fetch_assoc();
			?>
			<input type="text" required placeholder="Ciudad" name="ciudad" value="<?php echo $row['ciudad']?>"><br/><br/>
			<input type="text" required placeholder="Pais" name="pais" value="<?php echo $row['pais']?>"><br/><br/>
			<input type="hidden" name="idCiudad" value="<?php echo $row['idCiudad']?>">
			<input type="submit" value="guardar">
		</form>
	</center>
	
</body>
</html>