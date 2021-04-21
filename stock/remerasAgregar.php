
<?php 

$talle=$_GET['talle']

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Agregar Remera</title>


    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
        
    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!-- CSS Estilos de Carrusel -->
    <link rel="stylesheet" href="carrusel.css">
    
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="stylesheets/style.css">
    
    <!--TIPOGRAFIA GOOGLE FONTS--> 
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

    <!--CSS DEL REGISTRO PERRIS-->
    <link rel="stylesheet" href="stylesheets/styleRegistro.css">

     <!--CSS DEL EFECTO DEL HEADER-->
     <link rel="stylesheet" href="stylesheets/estilosHeader.css">

     <!--CSS DE LOS INPUT PARA CARGAR IMAGENES-->
     <link rel="stylesheet" href="stylesheets/inputFile.css">
     
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <main>
        <div class="logoSuperior" style="padding-top:12px;">
            <a href="/" class="logo-centro">
                <img src="imagenes/corona-recorte.png" alt="">
                <h1 class="nombrePrincipal">Nacho Store</h1>
            </a>
        </div>
    </main>
    <?php
                if (isset($_REQUEST['guardar'])) {
                    if (isset($_FILES['foto']['name'])) {
                        $tipoArchivo = $_FILES['foto']['type'];
                        $permitido=array("image/png","image/jpeg");
                        if( in_array($tipoArchivo,$permitido) ==false ){
                            die("Archivo no permitido");
                        }
                        $nombreArchivo = $_FILES['foto']['name'];
                        $tamanoArchivo = $_FILES['foto']['size'];
                        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
                        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                        //include_once "db_empresa.php";
                        $con = mysqli_connect("localhost", "root", "", "img");
                        $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                        $query = "INSERT INTO remeras (nombre  ,precio            ,imagen                 ,tipo,cantidad,talle) values 
                                                         ('" . $_POST['nombre'] . "','" . $_POST['precio'] . "','" . $binariosImagen . "','" . $tipoArchivo . "','" . $_POST['cantidad'] . "','" . $_POST['talle'] . "');
                            ";
                        $res = mysqli_query($con, $query);
                        header("Location:remerasLista.php?talle=" . $talle);
                    }
                }
                ?>
    <h1 style="margin-top: 12px;margin-bottom:5px;text-align: center;">AGREGAR REMERA</h1>
    <form method="POST" enctype="multipart/form-data" class="formularioPerris">
        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" id="nombre" class="input-crear">
        
        <br id="br-nombre">
        <label for="nombre">Ingrese el precio</label>
        <input type="text" name="precio" id="precio" class="input-crear">

        <br id="br-nombre">
        <label for="nombre">Ingrese la cantidad</label>
        <input type="number" name="cantidad" id="cantidad" class="input-crear">

        <input type="hidden" name="talle" value="<?php echo$talle ?>">
        
        <br id="br-descuento">
        <label for="imagen">Carga la imagen "Principal"</label>
            <div class="botones-input-file" id="primer-button">Subir imagen <i class="fas fa-file-upload"></i>
            <input class="subir-imagen-principal" type="file" name="foto" id="img-principal">
            </div> 
        <hr>
        <button type="submit" style="margin-top:5px;" name="guardar">Crear Producto</button>
    </form>


    <script src="javascripts/jquery.min.js"></script>

    <script src="javascripts/scriptCarrusel.js"></script>

    <script src="javascripts/scripts.js"></script>

    <script src="javascripts/headroom.min.js"></script>

    <script src="javascripts/jquery.min.js"></script>

    <script src="javascripts/menu.js"></script>

    <script src="javascripts/cargarImagenes.js"></script>

    <script src="javascripts/validacionVistaCrearProducto.js"></script>
</body>
</html>

