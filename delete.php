<?php

include("conexion.php");

$id = $_GET['id'];

$solicitud = "delete from datos where id=$id";
$resultado = mysqli_query($conexion, $solicitud);

header("location: read.php");

 ?>
