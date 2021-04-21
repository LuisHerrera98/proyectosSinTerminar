<?php

$categoria = $_GET['categoria'];
?>
<?php
    date_default_timezone_set('UTC');
    setlocale (LC_TIME, "es_RA");
    $hora = date("l d \of-F-Y");
    if($hora){
        $hora = str_replace("Monday","Lunes",$hora);
        $hora = str_replace("-"," ",$hora);
        $hora = str_replace("of","de",$hora);
    }
    if($hora){
        $hora = str_replace("Tuesday","Martes",$hora);
    }
    if($hora){
        $hora = str_replace("Wednesday","Miercoles",$hora);
    }
    if($hora){
        $hora = str_replace("Thursday","Jueves",$hora);
    }
    if($hora){
        $hora = str_replace("Friday","viernes",$hora);
    }
    if($hora){
        $hora = str_replace("Saturday","Sabado",$hora);
    }
    if($hora){
        $hora = str_replace("Sunday","Domingo",$hora);
    }
    if($hora){
        $hora = str_replace("January","Enero",$hora);
    }
    if($hora){
        $hora = str_replace("February","Febrero",$hora);
    }
    if($hora){
        $hora = str_replace("March","Marzo",$hora);
    }
    if($hora){
        $hora = str_replace("April","Abril",$hora);
    }
    if($hora){
        $hora = str_replace("May","Mayo",$hora);
    }
    if($hora){
        $hora = str_replace("June","Junio",$hora);
    }
    if($hora){
        $hora = str_replace("July","Julio",$hora);
    }
    if($hora){
        $hora = str_replace("August","Agosto",$hora);
    }
    if($hora){
        $hora = str_replace("September","Septiembre",$hora);
    }
    if($hora){
        $hora = str_replace("October","Octubre",$hora);
    }
    if($hora){
        $hora = str_replace("November","Noviembre",$hora);
    }
    if($hora){
        $hora = str_replace("December","Diciembre",$hora);
    }
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo $categoria ?></title>
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
    <main style="padding-top:95px;">
    </main>
    <section>
        <h2 class="productosDestacados" style="margin:0; text-align:center;margin-top:12px; margin-bottom:12px;"> <?php echo $categoria ?></h2>
    <div style="width:100%; display:flex; justify-content:center">
        <a href="productosAgregar.php?categoria=<?php echo $categoria ?>"><button class="boton-agregar">Agregar</button></a>
    </div>

    <div class="caja-productos">
                         <?php
                       // include_once "db_empresa.php";
                        $con = mysqli_connect("localhost", "root", "", "almacen");
                        $query = "SELECT id,nombre,precio,tipo,imagen,cantidad,ganancia FROM productos WHERE categoria='$categoria';";
                        $res = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <article class="caja-producto"> 
                                <div class="figure">  
                                    <img src="data:'';base64,<?php echo  base64_encode($row['imagen']); ?>">
                                    <div style="position:absolute; border-radius:50px;color:white;background-color:black; top:2px;left:2px;margin:0; font-size:14px;width:26px;height:26px; display:flex; justify-content:center; align-items:center;"><p style="margin:0; text-align:center; font-family:Arial, Helvetica, sans-serif;"><?php echo $row['cantidad']; ?></p></div>
                                    <div style="position:absolute; border-radius:50px;color:white;background-color:black; top:2px;right:3px;margin:0; font-size:14px;width:26px;height:26px; display:flex; justify-content:center; align-items:center;"><p style="margin:0; text-align:center; font-family:Arial, Helvetica, sans-serif;">
                                    <form action="productosEditar.php" method="post">
                                        <input type="hidden" value="<?php echo $row['precio']-$row['ganancia']?>" name="costo">       

                                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">

                                        <input type="hidden" value="<?php echo $categoria; ?>" name="categoria">

                                        <input type="hidden" value="<?php echo $row['nombre']; ?>" name="nombre">

                                        <input type="hidden" value="<?php echo $row['precio']; ?>" name="precio">

                                        <input type="hidden" value="<?php echo $row['cantidad']; ?>" name="cantidad">



                                        <button type="submit" style="color:wheat;background-color:black;border:none;border-radius:10px;text-align:center;">
                                        <i class="fas fa-pen" style="padding:0;font-size:13px"></i></button>
                                    </form>
                                </div>
                                </div>
                            <div class="caja-detalle-producto" style="margin-top:0; padding-left:3px; padding-right:3px;">
                                    <p class="nombre-producto" name="nombre" style="margin-top:0px; font-size:14px"><?php echo strtoupper($row['nombre']); ?></p>
                                    <hr>
                                <div style="display:flex;">
                                    <h4 class="precio-producto" name="precio" style="margin-left-8px;">$<?php echo $row['precio']; ?></h4>
                
                                </div>
                                    
                                <div style="display:flex; justify-content:space-around; width:100%;">
                                    <form action="productosBorrar.php" method="post" style="width:45%;" enctype="multipart/form-data">

                                    <input type="text" value="<?php echo $row['precio']; ?>" name="precio" style="display:none;">

                                    <input type="hidden" value="<?php echo $row['ganancia']?>" name="ganancia">

                                    <input type="text" value="<?php echo $row['nombre']; ?>" name="nombre" style="display:none;">

                                    <input type="text" value="<?php echo $categoria ?>" name="categoria" style="display:none;">


                                    <input type="datetime" value="<?php echo $hora ?>" name="fecha" style="display:none;">

                                    <input type="text" value="<?php echo $row['id']; ?>" name="id" style="display:none;">


                                    <input type="hidden" name="cantidad" value="<?php echo $row['cantidad']; ?>">

                                    <input type="hidden" name="cantidadFinal" value="<?php echo $row['cantidad']-1; ?>">

                                    <button type="submit" style="height:20px; font-size:15px; color:white;background-color:black; border:none; border-radius:5px;width:100%;">Borrar</button>
                                        
                                    </form>
                                    <form action="productosAumentar.php" method="post" style="width:45%;">

                                        
                                    <input type="text" value="<?php echo $row['id']; ?>" name="id" style="display:none;">
                                        <input type="text" value="<?php echo $categoria ?>" name="categoria" style="display:none;">
                                        <input type="hidden" name="cantidad" value="<?php echo $row['cantidad']; ?>">
                                        <input type="hidden" name="cantidadFinal" value="<?php echo $row['cantidad']+1; ?>">

                
<button type="submit" style="height:20px; font-size:15px;color:white;background-color:black; border:none; border-radius:5px;width:100%; ">Aumenta</button>

                                    </form>
                                </div>
                                    
                            </div>
                            </a>
                    </article>
                        <?php
                        }
                        ?>     
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