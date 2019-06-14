<?php
include("conexion.php");

$id = $_GET['id'];

$solicitud = "select * from datos where id=$id";
$resultado = mysqli_query($conexion, $solicitud);

$fila = mysqli_fetch_array($resultado);

?>

<form method="POST" action="update.php">

  Nombre: <input type="text" name="nombre" value=<?php echo $fila['nombre'];?>><br>
  Apellido: <input type="text" name="apellido" value=<?php echo $fila['apellido'];?>><br>
  Edad: <input type="text" name="edad" value=<?php echo $fila['edad'];?>><br>
  Celular: <input type="text" name="celular" value=<?php echo $fila['celular'];?>><br>
  <input type="hidden" name="id" value=<?php echo $fila['id'];?>><br>
  <input type="submit" name="enviar" value="modificar">

</form>
