<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];

$solicitud = "update datos set nombre='$nombre', apellido='$apellido', edad='$edad', celular='$celular' where id=$id";
$resultado = mysqli_query($conexion, $solicitud);

header("location: read.php");

 ?>
