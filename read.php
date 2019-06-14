<?php

include("conexion.php");

$solicitud = "select * from datos";
$resultado = mysqli_query($conexion, $solicitud);


echo "<table border='1'> <tr><td>nombre</td><td>apellido</td><td>edad</td><td>celular</td><td colspan='2'>acciones</td></tr>";
while ($fila = mysqli_fetch_array($resultado)){
  echo "<tr>";
  echo "<td>". $fila['nombre']."</td>";
  echo "<td>". $fila['apellido']."</td>";
  echo "<td>". $fila['edad']."</td>";
  echo "<td>". $fila['celular']."</td>";
  echo "<td><a href='delete.php?id=".$fila['id']."'>eliminar</a></td>";
  echo "<td><a href='edit.php?id=".$fila['id']."'>modificar</a></td>";
  echo "</tr>";
}

echo "</table>";
 ?>
