<?php

include_once 'config.php';
include ('cn.php');

$id = $_POST['id'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$cantidadFinal = $_POST['cantidadFinal'];





$actualizar = "UPDATE productos SET cantidad='$cantidadFinal' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);

header("Location:productos.php?categoria=" . $categoria);

