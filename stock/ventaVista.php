<?php
    $fechaxD=$_GET['fecha'];
    require_once 'config.php';
    $dbVentas = $pdo->query("SELECT * FROM ventas WHERE fecha='$fechaxD';");
    $total=0;
    $prendas=0;
    while($row = $dbVentas->fetch(PDO::FETCH_ASSOC)) {
    $total = $total + $row['precio'];   
    $prendas++;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Registro Ventas</title>
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

        <link rel="stylesheet" href="stylesheets/ventas.css">

    </head>
<body>
    <header class="header" id="header" >
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="index.html"  class="logo"><img src="imagenes/corona.jpg" alt=""></a>
               <div style="position:absolute; left:60px;">
                <h1 style="margin:0;">Nacho Store Ventas</h1>
               </div>
            </div>
            <div id="" class="navegacion">
            <span class="menu-icon"><a href="#"><p class="palabraMenu"><i class="fas fa-home"></i>Menu</p><i class=" fas fa-bars"></i></a></span>
            
                <ul class="menuNavegacion" style="margin-top:5px;">
                    <li><a href="buzos.php" style="font-size:16px; padding:1px;">BUZOS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">SWEATERS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">CAMPERAS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">PARKAS</a></li>
                    <li><a href="remeras.php" style="font-size:16px;padding:1px;">REMERAS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">JEANS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">JOGGERS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">CHINOS/VESTIR</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">CAMISAS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">ZAPATILLAS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">MUSCULOSAS</a></li>
                    <li><a href="index.html" style="font-size:16px;padding:1px;">JOGGINS</a></li>
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
    <main style="padding-top:105px;">
    </main>
    <?php
                       // include_once "db_empresa.php";
                        $con = mysqli_connect("localhost", "root", "", "img");
                        $query = "SELECT id,precio,talle,fecha,idImg,categoria FROM ventas WHERE fecha='$fechaxD';";
                        $res = mysqli_query($con, $query);
                        $fecha="";
                        while ($row = mysqli_fetch_assoc($res)) {

                            $idImg=$row['idImg'];
                            $categoria=$row['categoria'];

                            if($fecha != $row['fecha']){
                                $fecha = $row['fecha'];
                                echo "<h1 style='margin:0;color:#3a40ec;margin-bottom:7px;margin-top:7px;text-align:center;'>$fecha</h1>";
                            }
                            $query2 = "SELECT nombre,imagen FROM $categoria WHERE id='$idImg';";
                            $respuesta = mysqli_query($con, $query2);
                            while($ro = mysqli_fetch_assoc($respuesta)){
                                ?>
                                <div style="display:flex; justify-content:center">
                                    <div class="registro-ventas">
                                        <div class="caja-interior-img">
                                            <img class="img-venta" src="data:'jpg';base64,<?php echo  base64_encode($ro['imagen']); ?>">
                                        </div>
                                            
                                        <div class="caja-interior-nombre">
                                            <p><?php echo $ro['nombre'] ?></p>
                                        </div>
                                        <div class="caja-interior-talle">
                                            <p>Talle: <?php echo $row['talle'] ?></p>
                                        </div>
                                        <div class="caja-interior-precio">
                                            <p>$<?php echo $row['precio'] ?></p>
                                        </div>
                                        <div class="caja-interior-fecha">
                                            <p><?php echo $row['fecha'] ?></p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <?php
                            }
                        }
                        ?> 
                        <div>
                            <div><p style="margin:0;margin-left:5%; color:red;">Se vendio en total: $<?php echo $total ?></p></div>
                            <div><p style="margin:0;margin-left:5%; color:blue;">Se vendieron <?php echo $prendas ?> prendas</p></div>
                            <div><p style="margin:0;margin-left:5%; color:green;">La ganancia fue de $3300</p></div>
                        </div>
    
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