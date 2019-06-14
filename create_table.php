<?php
  include("conexion.php");


$solicitud = "CREATE TABLE datos (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar (15),
  apellido varchar (15),
  edad int,
  celular int,
  PRIMARY KEY(id))";

$resultado = mysqli_query($conexion, $solicitud);



 ?>
