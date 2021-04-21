<?php

include_once 'config.php';
include ('cn.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$cantidadFinal = $_POST['cantidadFinal'];
$ganancia = $_POST['ganancia'];

$query = "INSERT INTO ventas (nombre , precio , fecha , idImg , categoria, ganancia) values ('" . $nombre . "','" . $precio . "','" . $fecha . "','" . $id . "' ,'" . $categoria . "','" . $ganancia . "');
                            ";
$res = mysqli_query($conexion, $query);


if($cantidad == 1){
    $sql = 'DELETE FROM productos WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->execute([
    'id' => $id
]);

header("Location:productos.php?categoria=" . $categoria);
}else{

    $actualizar = "UPDATE productos SET cantidad='$cantidadFinal' WHERE id='$id'";
    $resultado=mysqli_query($conexion,$actualizar);

    header("Location:productos.php?categoria=" . $categoria);
}