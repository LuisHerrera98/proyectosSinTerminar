<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Crear Producto</title>


    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
        
    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    
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
        <div class="logoSuperior" style="padding-top:5px;">
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
            $con = mysqli_connect("localhost", "root", "", "nachostore");
            $binariosImagen = mysqli_escape_string($con, $binariosImagen);
            $query = "INSERT INTO productos (nombre ,precio ,imagen ,categoria ,tipo) values 
                                                         ('" . $_POST['nombre'] . "','" . $_POST['precio'] . "','" . $binariosImagen . "','" . $_POST['categoria'] . "','" . $tipoArchivo . "');
                            ";
                        $res = mysqli_query($con, $query);
                        header("Location:creado.php");
                    }
                }
                ?>
    <h1 style="margin-top: 12px;text-align: center;">CREAR UN PRODUCTO</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="formularioPerris">
        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" id="nombre" class="input-crear">

        <br id="br-nombre">
        <label for="nombre">Ingrese el precio</label>
        <input type="number" name="precio" id="precio" class="input-crear">
        
        <br id="br-descuento">
        <label for="categoria">Elija una categoria</label>
        <select style="display: block;" name="categoria" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UNA CATEGORIA</option>
            <option value="remeras">REMERA</option> 
            <option value="camisas">CAMISA</option> 
            <option value="camperas">CAMPERA</option>
            <option value="buzos">BUZO</option>
            <option value="conjuntos">CONJUNTOS</option>
            <option value="sacos">SACO</option>
            <option value="chalecos">CHALECO</option>
            <option value="musculosas">MUSCULOSA</option>
            <option value="jeans">JEAN</option>
            <option value="bermudas">BERMUDA</option>
            <option value="pantalons">PANTALON</option>
            <option value="short de baños">SHORT DE BAÑO</option>
            <option value="ropa interior">ROPA INTERIOR</option>
            <option value="calzados">CALZADO</option>
          </select>
          
        <br id="br-talle">
        <label for="imagen">Carga la imagen "Principal"</label>
        <br>
            <div class="botones-input-file" id="primer-button">Subir imagen <i class="fas fa-file-upload"></i>
            <input class="subir-imagen-principal" type="file" name="foto" id="img-principal">
            </div>
        <br>
        <hr>
        <button type="submit" name="guardar">Crear Producto</button>
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

