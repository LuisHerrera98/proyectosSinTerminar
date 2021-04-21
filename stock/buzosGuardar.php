<?php 
include ("cn.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];


$actualizar = "UPDATE buzos SET nombre='$nombre', precio='$precio', cantidad='$cantidad' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);

header("Location:buzos.php");

?>