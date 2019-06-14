<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form action="guardar.php" method="POST"><br/><br/><br/>
			<input type="text" required placeholder="Ciudad" name="ciudad"><br/><br/>
			<input type="text" required placeholder="Pais" name="pais"><br/><br/>
			<input type="submit" value="guardar">
		</form>
	</center>

	<br>
	<center>
		<table>
			
			<tbody>
				<tr>
					<td>ID</td>
					<td>Ciudad</td>
					<td>Pais</td>
					<td>modificar</td>
					<td>Eliminar</td>
				</tr>
				<?php  
					include("conexion.php");

					$query = "SELECT * FROM ciudades";
					$resultado = $conexion->query($query);

					foreach($resultado as $row) {
						?>
						<tr>
							<td><?php echo $row['idCiudad']?></td>
							<td><?php echo $row['ciudad']?></td>
							<td><?php echo $row['pais']?></td>
							<td><a href="#">modificar</a></td>
							<td><a href="#">eliminar</a></td>
						</tr>
					<?php
					}

				?>
			</tbody>
		</table>
	</center>
</body>
</html>