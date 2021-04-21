<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Productos</title>
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

        <link rel="stylesheet" href="stylesheets/estilosFinales.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    </head>
<body>
<header class="header" id="header" >
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="index.php"  class="logo"><img src="imagenes/corona.jpg" alt=""></a>
               <div style="position:absolute; left:60px;">
                <h1 style="margin:0;">Nacho Store</h1>
               </div>
            </div>
            <div id="" class="navegacion">
            <span class="menu-icon"><a href="#"><p class="palabraMenu"><i class="fas fa-home"></i>Menu</p><i class=" fas fa-bars"></i></a></span>
            <ul class="menuNavegacion" style="margin-top:5px;">
                    <li class="liPerri"><a href="#" style="font-size:16px; padding:1px;">Productos</a></li>
                    <div class="navProductos" style="width:100%; background-color:aliceblue; position:absolute; border-radius:3px; display:none">
                        <ul class="menuNavegacion" style="margin-top:5px; color:black; border-radius:5px;"> 

                            <li class="li-productos"><a href="productos.php?categoria=todo">Ver Todo</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=buzos">BUZOS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=sweaters">SWEATERS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=camperas">CAMPERAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=parkas">PARKAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=remeras">REMERAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=jeans">JEANS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=joggers">JOGGERS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=chinos">CHINOS/VESTIR</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=camisas">CAMISAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=zapatillas">ZAPATILLAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=musculosas">MUSCULOSAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=joggins">JOGGINS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=conjuntos">CONJUNTOS</a></li>

                        </ul>

                    </div>
                    <li><a href="#" style="font-size:16px; padding:1px;">Contacto</a></li>
                    
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
        
    </div class="navegacionMenuInferior">
         <ul class="listaNavegacion">
            <a href="index.php"><li>Inicio</li></a>
            <a href="productos.php"><li>Productos</li></a>
            <a href="contacto.php"><li>Contacto</li></a>
            <a href="ayuda.php"><li>Ayuda</li></a>
        </ul>
    <div>
    
    </div>
    
    </header>
    <main class="main-final">
        <div style="padding-top:95px;"></div>
        <div class="container3">
            <div class="row">
                <div class="col s12 div-final">
                    <div class="tituloYflechas">
                        <i class="fas fa-long-arrow-alt-left"></i>
                        <h1 class="center-align titulo">Categorías Principales</h1>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    

                    <div class="carousel center-align tamañoCarrusel">
                    <div class="carousel-item">
                            <h2 class="subtitulo">Remeras</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoria.php?categoria=remeras"><img src="imagenesCarrusel/remera2.jpeg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Camisas</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoria.php?categoria=camisas"><img src="imagenesCarrusel/camisa1.jpeg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Camperas</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoria.php?categoria=camperas"><img src="imagenesCarrusel/campera1.jpeg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Buzos</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoria.php?categoria=buzos"><img src="imagenesCarrusel/buzo1.jpeg" alt=""></a>
                        </div>


                        <div class="carousel-item">
                            <h2 class="subtitulo">Sacos</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoria.php?categoria=sacos"><img src="imagenesCarrusel/saco1.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Chalecos</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoria.php?categoria=chalecos"><img src="imagenesCarrusel/chaleco1.jpg" alt=""></a>
                        </div>


                        <div class="carousel-item">
                            <h2 class="subtitulo">Jeans</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoria.php?categoria=jeans"><img src="imagenesCarrusel/jean1.jpeg" alt=""></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
    <section>
        <h2 class="productosDestacados">Productos Destacados</h2>
        
        <div class="caja-productos">
        <?php
    // include_once "db_empresa.php";
    $con = mysqli_connect("localhost", "root", "", "nachostore");
    $query = "SELECT id,nombre,precio,imagen,categoria FROM productos";
    
    $res = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
                    <article class="caja-producto"> 
                        <a href="productoEditar.php?id=<?php echo $row['id']?>">
                            <div class="figure">  
                            <img src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
                            </div>
                            <div class="caja-detalle-producto">
                                <p class="nombre-producto" name="nombre"><?php echo $row['nombre'] ?></p>
                                <hr>
                                <h4 class="precio-producto">$<?php echo $row['precio'] ?></h4>  
                            </div>
                        </a>
                    </article>
                    <?php
                        }
                    ?>   
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="lista">
                <nav class="centrar">
                    <h4>NAVEGACIÓN</h4>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Tabla de talles</a></li>
                        <li><a href="#">Como comprar</a></li>
                    </ul>
                </nav>
    
                <nav class="medios-pago centrar">
                    <h4>MEDIOS DE PAGO</h4>
                    <a href="#"><img src="imagenes/medios-pago.png" alt=""></a>
                </nav>
    
                <nav class="contactanos centrar">
                    <h4>CONTACTANOS</h4>
                    <ul>
                        <li><a href="#">2216497631 / WhatsApp 2216497631 / Mayoristas 2216497631</a></li>
                        <li><a href="#">luchoherrerafernandez@gmail.com</a></li>
                        <li><a href="#">Calle Falsa 1234</a></li>
                    </ul>
                </nav>
            </div>
            <div class="seguinos">
                <h4>Seguinos</h4>
                <hr class="linea">
                <a href="#"><img src="imagenes/facebook.png" alt=""></a>
                <a href="#"><img src="imagenes/instagram-bosquejado.png" alt=""></a>
            </div>
        </div>
    </footer>
    
    <a href="https://wa.link/5jzkyo" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="javascripts/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="javascripts/scripts.js"></script>

    <script src="javascripts/scriptCarrusel.js"></script>

    <script src="javascripts/headroom.min.js"></script>

    <script src="javascripts/menu.js"></script>

    <script src="javascripts/masonry.js"></script>

    <script src="javascripts/productos.js"></script>

    

</body>
</html>