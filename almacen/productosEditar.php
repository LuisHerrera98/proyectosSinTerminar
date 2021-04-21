<?php
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad=$_POST['cantidad'];
$costo=$_POST['costo'];
$categoria=$_POST['categoria'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Editar Producto</title>


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
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
</head>
<body>
<header class="header" id="header" >
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="index.php"  class="logo"><img src="imagenes/corona.jpg" alt=""></a>
               <div style="position:absolute; left:60px;">
                <h1 style="margin:0;">Stock Almacen</h1>
               </div>
            </div>
            <div id="" class="navegacion">
            <span class="menu-icon"><a href="#"><p class="palabraMenu"><i class="fas fa-home"></i>Menu</p><i class=" fas fa-bars"></i></a></span>
            
            <ul class="menuNavegacion" style="margin-top:5px;">
            <li><a href="ventas.php" style="font-size:16px; padding:1px;">VENTAS</a></li>

<li><a href="productos.php?categoria=limpieza" style="font-size:16px; padding:1px;">LIMPIEZA</a></li>

<li><a href="productos.php?categoria=refrigerados" style="font-size:16px;padding:1px;">REFRIGERADOS</a></li>

<li><a href="productos.php?categoria=almacen" style="font-size:16px;padding:1px;">ALMACEN</a></li>

<li><a href="productos.php?categoria=galletitas" style="font-size:16px;padding:1px;">GALLETITAS</a></li>

<li><a href="productos.php?categoria=golosinas" style="font-size:16px;padding:1px;">GOLOSINAS</a></li>

<li><a href="productos.php?categoria=bebidas" style="font-size:16px;padding:1px;">BEBIDAS</a></li>

<li><a href="productos.php?categoria=bebidasAlcohol" style="font-size:16px;padding:1px;">BEBIDAS/ALCOHOL</a></li>

<li><a href="productos.php?categoria=cigarrillos" style="font-size:16px;padding:1px;">CIGARRILLOS</a></li>

<li><a href="productos.php?categoria=bazar" style="font-size:16px;padding:1px;">BAZAR</a></li>

<li><a href="productos.php?categoria=varios" style="font-size:16px;padding:1px;">VARIOS</a></li>

</ul>
            </div>
    
        </div>
    
    </header>
    <header class="header-compu" id="heade">
    <div class="menuSuperior">
        <div class="logo-nombre">
            <img src="imagenes/corona.jpg" alt="">
            <h6>NachoStore</h6>
        </div>
        <div class="caja-input">
            <input type="text" placeholder="Buscar" >
        </div>
        <div class="menuSuperiorDerecho">
                <a href="registro.html">Crear Cuenta</a>
                <a href="login.html">Iniciar Sesion</a>
    
    </div>
    </div class="navegacionMenuInferior">
         <ul class="listaNavegacion">
            <a href="index.html"><li>Inicio</li></a>
            <a href="productos.html"><li>Productos</li></a>
            <a href="contacto.html"><li>Contacto</li></a>
            <a href="comoComprar.html"><li>Como Comprar</li></a>
             <div class="cajitaDelCarrito">
                 <a href="carrito.html"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </ul>
    <div>
    
    </div>
    
    </header>
    <main>
        <div class="logoSuperior" style="padding-top:100px;">
        </div>
    </main>
    <h1 style="margin-top: 12px;margin-bottom:5px;text-align: center;">EDITAR PRODUCTO</h1>
    <form action="productosGuardar.php" method="POST" enctype="multipart/form-data" class="formularioPerris">

        <input type="hidden" name="id" id="id" class="input-crear" value="<?php echo $id ?>">

        <input type="hidden" name="categoria" id="id" class="input-crear" value="<?php echo $categoria ?>">

        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" id="nombre" class="input-crear" value="<?php echo $nombre ?>">

        <br id="br-nombre">
        <label for="nombre">Ingrese el costo</label>
        <input type="text" name="costo" id="costo" class="input-crear" value="<?php echo $costo ?>">
        
        <br id="br-nombre">
        <label for="nombre">Ingrese el precio</label>
        <input type="text" name="precio" id="precio" class="input-crear" value="<?php echo $precio ?>" >

        <br id="br-nombre">
        <label for="nombre">Ingrese la cantidad</label>
        <input type="text" name="cantidad" id="precio" class="input-crear" value="<?php echo $cantidad ?>">
        
        <hr>
        <button type="submit" style="margin-top:5px;" name="guardar">Guardar</button>
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