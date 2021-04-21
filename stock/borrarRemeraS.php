<?php

include_once 'config.php';
include ('cn.php');

$id = $_POST['id'];
$talle = $_POST['talle'];
$cantidad = $_POST['cantidad'];
$cantidadFinal = $_POST['cantidadFinal'];
if($cantidad == 1){
    $sql = 'DELETE FROM remeras WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->execute([
    'id' => $id
]);

header("Location:remerasLista.php?talle=" . $talle);
}else{

    $actualizar = "UPDATE remeras SET cantidad='$cantidadFinal' WHERE id='$id'";
    $resultado=mysqli_query($conexion,$actualizar);

    header("Location:remerasLista.php?talle=" . $talle);
}

 