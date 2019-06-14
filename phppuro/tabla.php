<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
	<center>
		<table>
			<thead>
				<tr>
					<th><a href="formulario.php">Nuevo Ciudad</a></th>
					<th>Lista de Usuarios</th>
				</tr>				
			</thead>
			<tbody>
				<tr>
					<td>ID</td>
					<td>Ciudad</td>
					<td>Pais</td>
					<td colspan="2"> operaciones</td>
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
							<td><a href="modificar.php?id=<?php echo $row['idCiudad']?>">modificar</a></td>
							<td><a href="eliminar.php?id=<?php echo $row['idCiudad']?>">eliminar</a></td>
						</tr>
					<?php
					}

				?>
			</tbody>
		</table>
	</center>

</body>
</html>
