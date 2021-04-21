<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Inicio</title>
        <link rel="icon" href="imagenes/corona-recorte.png">
    
        <link rel="stylesheet" href="stylesheets/estilosProductos.css">
    
        <!-- Iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
            
        <!--Materialize-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
        <!-- CSS Estilos de Carrusel -->
        <link rel="stylesheet" href="stylesheets/carrusel.css">
        
        <!-- CSS Estilos -->
        <link rel="stylesheet" href="stylesheets/style.css">
        
        <!--TIPOGRAFIA GOOGLE FONTS-->
    
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        
        <link rel="stylesheet" href="stylesheets/estilosHeader.css">
        
        <script src="javascripts/jquery.min.js"></script>
    
        
        <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
        <link rel="stylesheet" href="stylesheets/styleTalles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="estilosLetra.css">

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
            <li><a href="ventas.php" style="font-size:16px; padding:1px;">>> VENTAS <<</a></li>
                <li><a href="comprar.php" style="font-size:16px; padding:1px;">>> COMPRAR <<</a></li>

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
    <main style="padding-top:100px">
        
    </main>
    <section>
    <h2 class="productosDestacados" style="margin:0; text-align:center;margin-top:12px; margin-bottom:12px ;font-size:18px;">CATEGORIAS</h2>
        <h2 class="productosDestacados" style="margin:0; text-align:center;margin-top:12px; margin-bottom:12px;font-size:20px;">Selecciona una carpeta</h2>

        <div class="caja-talles">
            <div class="caja-talle">
                <a href="productos.php?categoria=limpieza" style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle limpieza" style="font-size: 13px;">LIMPIEZA</p></i></a>
            </div>
            <div class="caja-talle">
                <a href="productos.php?categoria=refrigerados"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle refrigerados" style="font-size: 13px;">REFRIGERADOS</p></i></a>
            </div>
            <div class="caja-talle">
                <a href="productos.php?categoria=almacen"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle almacen" style="font-size: 13px;">ALMACEN</p></i></a>
            </div>
            <div class="caja-talle">
                <a href="productos.php?categoria=galletitas"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle galletitas" style="font-size: 13px;">GALLETITAS</p></i></a>
            </div>
            <div class="caja-talle">
                <a href="productos.php?categoria=golosinas"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle golosinas" style="font-size: 13px;">GOLOSINAS</p></i></a>
            </div>
           
            <div class="caja-talle">
                <a href="productos.php?categoria=bebidas"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle bebidas" style="font-size: 13px;">BEBIDAS</p></i></a>   
            </div>
            <div class="caja-talle">
                <a href="productos.php?categoria=bebidasAlcohol"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle bebidas-alcohol">BEBIDAS/ALCOHOL</p></i></a>
            </div>
            <div class="caja-talle">
                <a href="productos.php?categoria=cigarrillos"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle cigarrillos" style="font-size: 13px;">CIGARRILLOS</p></i></a>
            </div>
            <div class="caja-talle">
                <a href="productos.php?categoria=bazar"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle bazar" style="font-size: 13px;">BAZAR</p></i></a>
            </div>
            <div class="caja-talle">
                <a href="productos.php?categoria=varios"style="color:#333;" type="submit"><i class="fas fa-folder icono-carpeta"><p class="texto-talle varios" style="font-size: 13px;">VARIOS</p></i></a>
            </div>
            </div>
        </div>
    </section>

    
    
    <a href="https://wa.link/5jzkyo" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="javascripts/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="javascripts/scripts.js"></script>

    <script src="javascripts/scriptCarrusel.js"></script>

    <script src="javascripts/headroom.min.js"></script>

    <script src="javascripts/menu.js"></script>

    <script src="javascripts/masonry.js"></script>

</body>
</html>