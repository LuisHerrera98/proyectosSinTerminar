<?php 
include ("cn.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$ganancia=$_POST['precio']-$_POST['costo'];
$categoria=$_POST['categoria'];


$actualizar = "UPDATE productos SET nombre='$nombre', precio='$precio', cantidad='$cantidad' , ganancia='$ganancia' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);

header("Location:productos.php?categoria=" . $categoria);

?>