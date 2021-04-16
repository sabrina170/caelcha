<?php
    if(!isset($_SESSION)) { 
        session_start();

        $sid = $_SESSION['sid'] = session_id();
    }
    include 'Global/correo.php';
    include 'Global/conexion.php';
    include 'carrito.php';
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cael Web</title>
    <link  rel="icon" type="image/png" href="static/img/logoweb/fenix.png"/>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"/>
  
    <script type="text/javascript" src="https://checkout.culqi.com/js/v3"></script>

    <!-- Google Fonts -->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'/>
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700'/>
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext'/>

    <link rel="stylesheet" href="static/css/estilo.css">
    <link rel="stylesheet" href="static/css/toastr.min.css">
    <link rel="stylesheet" href="md/css/mdb.min.css" />
    <meta name="author" content="Syahrizaldev">
    <link rel="stylesheet" href="nav/style.css">


</head>
<style>
  body {
    background-image: linear-gradient(rgba(6, 63, 109, 0.8),
      rgba(6, 63, 109, 0.8) ), url(static/img/fondo1.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>


<body>
<header class="header">
    <nav class="navbar" >
      <div class="burger" id="burger">
        <span class="burger-open " >
        <i class="fas fa-bars fa-2x" style="color: white;"></i>
        </span>
        <span class="burger-close" >
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
          style="background-color: white;">
            <path fill="#252a32" fill-rule="evenodd" d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z" />
          </svg>
        </span>
        
      </div>
      <a class="navbar-brand" style="color: white;font-family: Audrey;">
      <img
        src="static/img/Cael.png"
        height="50"
        alt=""
        
        loading="lazy"
      />
      <p style="margin-top: 20px;">Tienda</p>
    </a>

      <ul class="menu" id="menu">
      <a href="index.php" ><img src="static/img/Cael1.png" height="60px"></a>
      <br>
        <li class="menu-item"><a href="conocenos.php" class="menu-link">CONOCENOS</a></li>
        <li class="menu-item"><a href="galeria.php" class="menu-link">GALERIA</a></li>
        <li class="menu-item"><a href="tienda.php" class="menu-link">TIENDA</a></li>
        <li class="menu-item"><a href="contactanos.php" class="menu-link">CONTACTANOS</a></li>
        <br>
        
        <br><br><br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">
          <a style="color: #212a40" href="#!" role="button">
          <i class="fab fa-twitter fa-2x"></i></a>
          <a style="color: #212a40" href="#!" role="button">
          <i class="fab fa-facebook-f fa-2x"></i></a>
          <a style="color: #212a40" href="#!" role="button">
          <i class="fab fa-instagram fa-2x"></i></a>
        </th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>

		</ul>
   
    
	</nav>
</header>

<br><br><br>
<div class="container  py-5">

    <!--Section: Content-->
    <section class="text-center">
        <?php
            $sql = $pdo->prepare('SELECT * FROM tblproductos');
            $sql->execute();
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); ?>
        <!--Grid row-->
        <div class="row">
            <?php
                foreach ($resultado as $producto) { ?>

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" width="100" height="300" src="<?php echo $producto['Imagen']; ?>"
                                alt="Card image cap">
                                <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body">
                                <p class="mb-1"><a href="" class="font-weight-bold black-text " style="font-family: Audrey;" ><?php echo $producto['Nombre']; ?></a></p>
                                <p class="card-text font-weight-bold" style="text-align: center; font-family: Audrey; color: black ;font-size: 15px;" >
                                        <?php
                                            $desc = $producto['Descripcion'];
                                            echo str_replace("/", "<br>", $desc); ?> 
                                </p>
                                <h5 class="mb-1" style="font-family: Audrey;">
                                <small class="mr-1">
                                <strong>S/ <?php echo $producto['Precio']; ?></strong> 
                                </small>
                                <a style="font-family: Audrey; text-decoration: line-through; color: grey; font-size: 15px;">S/ 299.00</a>
                               </h5>
                                <br>
                                <button type="button" class="font-weight-bold" style="font-family: Audrey; color: black ;font-size: 15px;" onClick='mostrarDetalles(<?php echo $producto['ID']; ?>)' style="border-radius: 20px;" data-toggle="modal" data-target="#modalQuickView">Detalles</button>

                            </div>

                        </div>
                        <!-- Card -->
                    </div>
            <?php
                } ?>
          <!--Grid column-->
        </div>
        <!--Grid row-->
       
    </section>
    <!--Section: Content-->
</div>

   

    <!-- Modal: modalQuickView -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="modalQuickView" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <h3 class="font-weight-bold mb-3 text-center">
                    <img src="static/img/Cael1.png" width="140" height="40" class="d-inline-block align-top" alt="" loading="lazy"/>
                </h3>
                <hr/>
                <div class="row">
                  <div class="col-lg-7">
                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                      data-ride="carousel">
                      <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt="First slide" id="modalQuickView_img_producto">
                          </div>
                          
                        </div>
                        <!-- <ol class="carousel-indicators">
                          <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                            <img src="" width="60">
                          </li>
                        </ol> -->
                    </div>
                    <!--/.Carousel Wrapper-->
                  </div>
                  <br>
                  <div class="col-lg-5">
                        <br>
                      <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4" id="modalQuickView_nombre_producto"></h2>
                      <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">Oferta</span>
                      <span class="badge badge-success product mb-4 ml-2">SALE</span>

                      <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                        <span class="black-text font-weight-bold">
                          <strong id="modalQuickView_precio_producto">S/ - </strong>
                        </span>
                        <span class="grey-text">
                          <small>
                            <s id="modalQuickView_precio_old_producto">S/ - </s>
                          </small>
                        </span>
                      </h3>
                  
                    <div class="font-weight-normal">
                        <p class="ml-xl-0 ml-4" id="modalQuickView_descripcion_producto" style="text-align: center;"></p>
                    </div>
                    <div class="card-body">
                      <div class="text-center">
                           <!-- Button trigger modal -->
                          <button type="button" class="btn" style="background-color:  black;color: white; border-radius: 30px;" data-dismiss="modal" data-toggle="modal" data-target="#fullHeightModalRight">
                          Personaliza tu camisa
                          </button>
                      </div>
                    </div>
                    <!-- /.Add to Cart -->
                  </div>
                </div>
                 
            </div>
            
          </div>
        </div>
    </div>

            <!-- Full HeightModalRight -->
            <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="fullHeightModalRight" aria-hidden="true">
      
                <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
                <div class="modal-dialog modal-full-height modal-right modal-dialog-scrollable" role="document">

                    <div class="modal-content">
                        <div class="modal-header text-center" style="background-color: #212a40; color: white;">
                            <h5  id="myModalLabel"><strong>MEDIDAS PERSONALES</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" style="color: white;" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <br/>

                    <div class="text-center">
                        <img src="static/img/fenix.png"  width="100" height="100" alt="Responsive image" class="">
                    </div>

                    <div class="modal-body" style="background-image: url(static/img/tapiz.png);">
                        <!--contedino del formulario-->
                        <div class="d-flex justify-content-between">
                            <label for="exampleForm2">Altura: </label>
                            <small><span id="demo9"></span> cm.</small>
                        </div>
                        
                        <input type="range" min="150" max="220" value="185" class="custom-range" id="myRange9">

                        <div class="d-flex justify-content-between">
                            <label for="exampleForm2">Peso: </label>
                            <small><span id="demo10"></span> kg.</small>
                        </div>

                        <input type="range" min="20" max="120" value="70" class="custom-range" id="myRange10">

                        <div class="d-flex justify-content-between">
                            <label for="exampleForm2">Años: </label>
                            <small><span id="demo11"></span> años.</small>
                        </div>

                        <input type="range" min="30.5" max="42.5" value="36.5" class="custom-range" id="myRange11">

                        <div class="d-flex justify-content-between">
                            <label for="exampleForm2">Talla de calzado: </label>
                            <small><span id="demo12"></span> EU.</small>
                        </div>

                        <input type="range" min="30.5" max="42.5" value="36.5" class="custom-range" id="myRange12">
                        <!-- Default inline 1-->
                        <br/>
                        <br/>
                        
                        <div class="text-center">
                                <div class="form-check form-check">
                                    <label for="exampleForm2" style="color:#212a40 ;"><strong>Talla de camisa de uso habitual:</strong></label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="checkbox" type="radio" name="rdo"  value="S" checked> S </input>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="checkbox" type="radio" name="rdo"  value="M"> M </input>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="checkbox" type="radio" name="rdo" value="L"> L </input>
                                </div>

                                <div class="form-check form-check">
                                    <label for="exampleForm2" style="color:#212a40 ;"><strong>¿Desea poner una inicial a la manga?</strong></label>
                                </div>
                                

                                <div class="wrapper">
                                    <div class="radio_tabs">
                                        
                                        <label class="radio_wrap" data-radio="radio_2" style="margin-right: 5px;">
                                            <input type="radio" name="sports" class="input">
                                            <span class="radio_mark"> Si </span>
                                        </label>
                                        <label class="radio_wrap" data-radio="radio_3">
                                            <input type="radio" name="sports" class="input" checked>
                                            <span class="radio_mark"> No </span>
                                        </label>

                                    </div>

                                    <div class="content">
                                        <div class="radio_content radio_2">
                                            <input type="text" class="form-control" placeholder="Escriba la Inicial">
                                        </div>
                                        <div class="radio_content radio_3">
                                            <p>No</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" id="fullHeightModalRight_button" class="btn" style="background-color:  black ;color: white; border-radius: 30px;" name="submit" data-dismiss="modal" data-toggle="modal" data-target="#customModalSizeShirt">ACEPTAR</button>
                                </div>

                        </div>
                        
                    </div>
           
                </div>
            
            </div>

    </div>
    
    <!-- Full Height Modal Right -->
    <!-- modal de personalizar camisa-->

    <div class="modal fade bd-example-modal-xl" id="customModalSizeShirt" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable">
       
          <div class="modal-content " style="background-image: url(static/img/tapiz.png);">
                <div class="modal-header text-center" style="background-color: #212a40; color: white;">
                    <h5 class="modal-title" id="exampleModalPopoversLabel"><strong>PERSONALIZA TU CAMISA</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
              <div class="row justify-content-center">
                  <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                            
                                <div class="text-center">
                                    <br/>
                                    <div class="container_img_camisa" style="width: 100%" style="position: relative; text-align: center;">
                                        <img src="-" id="imgcamisa" class="img-thumbnail" style="width: 100%;">
                                        
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    
                                </div>
                                <div class="text-center" style="padding:30px;">
                                    <strong id="customModalSizeShirt_desc"></strong>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <br>
                                <div>                  
                                    <div class="form-group">
                                        <button id="tallas" class="btn" style="margin-right:50px;"></button>
                                    </div>

                                            <div class="form-group hover_A">
                                                <label for="customRange1">A.- CONTORNO DE PECHO</label>
                                                <div><small><span class="hover_text_A" id="demo"></span> cm.</small></div>
                                                <input type="range" class="custom-range" id="rangeContornoPecho">
                                            </div>
                                            <div class="form-group">
                                                <label for="formControlRange">B.- CINTURA</label>
                                                <div><small><span id="demo1"></span> cm.</small></div>
                                                <input type="range" class="custom-range" id="rangeCintura">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formControlRange">C.- ANCHURA DE HOMBROS</label>
                                                <div><small><span id="demo2"></span> cm.</small></div>
                                                <input type="range" class="custom-range" id="rangeAnchuraHombro">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="formControlRange">D.- LONGITUD DE MANGA</label>
                                                <div><small><span id="demo3"></span> cm.</small></div>
                                                <input type="range" class="custom-range" id="rangeLongitudManga">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="formControlRange">E.- CUELLO</label>
                                                <div><small><span id="demo5"></span> cm.</small></div>
                                                <input type="range" class="custom-range" id="rangeCuello">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="formControlRange">F.- TALLE DELANTERO</label>
                                                <div><small><span id="demo6"></span> cm.</small></div>
                                                <input type="range" class="custom-range" id="rangeTalleDelantero">
                                                
                                            </div>
                       
                                </div>

                                <div class="modal-footer justify-content-center">
                                    <form action="" method="post" id='form_agregar_producto'>
                                        <input type="hidden" name="id"       id="id_producto" value=""/>
                                        <input type="hidden" name="nombre"   id="nombre"      value=""/>
                                        <input type="hidden" name="precio"   id="precio"      value=""/>
                                        <input type="hidden" name="cantidad" id="cantidad"    value=""/>

                                        <input type="hidden" name="contorno_pecho"      id="contorno_pecho"  value=""/>
                                        <input type="hidden" name="cintura"             id="cintura"         value=""/>
                                        <input type="hidden" name="anchura_hombros"     id="anchura_hombros" value=""/>
                                        <input type="hidden" name="longitud_manga"      id="longitud_manga"  value=""/>
                                        <input type="hidden" name="cuello"              id="cuello"          value=""/>
                                        <input type="hidden" name="talle_delantero"     id="talle_delantero" value=""/>

                                        <input type="hidden" name="talla_general"   id="talla_general" value="">

                                        <button class="btn btn_agregar_carrito" name="btnAccion" type="submit" value="Agregar" style="background-color:  black ;color: white; border-radius: 30px;">Agregar al carrito <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i></button>
                                    </form>
                                    <button type="button" class="btn" data-dismiss="modal" style="border-radius: 20px;">No, Gracias</button>
                               </div>
                          </div>
                        
                        </div>     
                  </div>
              </div>
            </div>
          </div>
      
      </div>
    </div>

<!-- fin de  modal de personalizar camisa-->
<!-- modal lista de productos -->
<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content" style="background-image: url(static/img/tapiz.png);">
            <!--Header-->
            <div class="modal-header" style="background-color: #212a40; color: white;">
                <h5 class="heading lead"><strong>TU LISTA</strong></h5>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: white;">&times;</span>
                  </button>
            </div>
            <!--Section: Content-->
            <div class="modal-body">

                  <div class="table-responsive table-borderless  mb-4">
                        <?php if(!empty($_SESSION['CARRITO'])) { ?>
                            <table class="table product-table mb-0">
                                <thead  style="background-color: black; color: white;">
                                    <tr>
                                        <th></th>
                                        <th class="text-center">
                                            <strong>PRODUCTO</strong>
                                        </th>
                                        <th class="text-center">
                                            <strong>PRECIO S/</strong>
                                        </th>
                                        <th class="text-center">
                                            <strong>CANTIDAD</strong>
                                        </th>
                                        <th class="text-center">
                                            <strong>MONTO S/</strong>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="tbdoy_carrito">
                            
                                    <?php 
                                        $total = 0;
                                        foreach($_SESSION['CARRITO'] as $indice=>$producto ) { ?>
                                            <tr>
                                                <?php
                                                    foreach ($resultado as $producto_local) {
                                                        if($producto_local['ID'] == $producto['ID']) { ?>
                                                            <td>
                                                                <img src="<?php echo $producto_local['Imagen'];?>" alt="" width="90" height="70">
                                                            </td>
                                                        <?php
                                                        }
                                                    } ?> 
                                                <td>
                                                    <strong><?php echo $producto['NOMBRE'];?></strong> 
                                                    <input type="text" name='nombre_producto_carrito[]' value="<?php echo $producto['NOMBRE']; ?>" disabled hidden/>
                                                </td>
                                                <td>
                                                    <input type="number" name='precio_producto_carrito[]' id="pre"  class="monto input form-control" value="<?php echo $producto['PRECIO']; ?>" disabled />
                                                </td>
                                                <td>
                                                    <input type="number" name='cantidad_producto_carrito[]' id="cant" value="<?php echo $producto['CANTIDAD']; ?>" class="monto input form-control" />
                                                </td>
                                                <td>
                                                    <input type="text" class="monto total form-control" value="<?php echo $producto['PRECIO']; ?>"  disabled />

                                                    <input type="text" name='contorno_pecho_carrito[]'  value="<?php echo $producto['contorno_pecho']; ?>"  disabled hidden/>
                                                    <input type="text" name='cintura_carrito[]'         value="<?php echo $producto['cintura']; ?>"  disabled hidden/>
                                                    <input type="text" name='anchura_hombros_carrito[]' value="<?php echo $producto['anchura_hombros']; ?>"  disabled hidden/>
                                                    <input type="text" name='longitud_manga_carrito[]'  value="<?php echo $producto['longitud_manga']; ?>"  disabled hidden/>
                                                    <input type="text" name='cuello_carrito[]'          value="<?php echo $producto['cuello']; ?>"  disabled hidden/>
                                                    <input type="text" name='talle_delantero_carrito[]' value="<?php echo $producto['talle_delantero']; ?>"  disabled hidden/>

                                                    <input type="text" name='talla_general_carrito[]'   value="<?php echo $producto['talla_general']; ?>"  disabled hidden/>
                                                </td>
                                                <td>
                                                    <form action="" method="post">
                                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>" />
                                                        <button class="btn" style="border-radius: 20px;" type="submit" name="btnAccion" value="Eliminar"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            
                                            <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>
                                            
                                        <?php 
                                        } ?>
                                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">   
                                            <tr>            
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4 class="mt-2">
                                                        <strong>Total</strong>
                                                    </h4>
                                                </td>
                                                <td >
                                                    <input type="text" class="monto totales form-control" id="monto" name="monto" value="<?php echo $total?>" disabled />   
                                                </td>
                                            </tr>
                                        
                                            <?php 
                                                $tot = number_format($total);
                                                // echo number_format($total,2);                                          
                                            ?>

                                </tbody>       
                            </table>

                            <script>
                                // generamos un evento click y keyup para cada elemento input con la clase .input
                                var input = document.querySelectorAll(".input");
                                input.forEach(function(e) {
                                    e.addEventListener("click",multiplica);
                                    e.addEventListener("keyup",multiplica);
                                });
                              
                                // funcion que genera la multiplicacion
                                function multiplica() {
                          
                                    // nos posicionamos en el tr del producto
                                    var tr = this.closest("tr");
                                    var total = 1;
                          
                                    // recorremos todos los elementos del tr que tienen la clase .input
                                    var inputs = tr.querySelectorAll(".input");
                                    inputs.forEach(function(e) {
                                        total *= e.value;
                                    });
                          
                                    // mostramos el total con dos decimales
                                    tr.querySelector(".total").value=total.toFixed(2);
                          
                                    // indicamos que calcule el total
                                    calcularTotal(this.closest("table"));
                                }
                            
                                // funcion que calcula la suma total de los productos
                                function calcularTotal(e) {
                                    var total = 0;
                                
                                    // obtenemos todos los totales y los sumamos
                                    var totales = e.querySelectorAll(".total");
                                    totales.forEach(function(e) {
                                        total += parseFloat(e.value);
                                    });
                            
                                    // mostramos la suma total con dos decimales
                                    e.getElementsByClassName("totales")[0].value=total.toFixed(2);
                                }

                            </script>

                            <div class="modal-footer justify-content-center">
                                <button class="btn" type="submit" style="background-color:  black ;color: white; border-radius: 30px;" data-toggle="modal" name="submit" data-target="#fullHeightModalTop" data-dismiss="modal">Pagar</a>
                                <button type="button" class="btn" data-dismiss="modal" style="border-radius: 20px;">No, Gracias</button>
                            </div>

                            </form>

                        <?php } else { 
                            $tot = ""; ?>
                            <strong>No hay productos agregados al carrito</strong> 
                        <?php } ?>

                        <?php 
                            
                            //$_SESSION['totCart'] = $tot; 
                            //$dni_comp = '72042683';
                            //$direccion = 'Francisco Lazo';
                            //$departamento = 'Lima';
                            //$provincia = 'Lima';
                            //$nombre_comp = 'Sabrina Pomajulca';
                            //$correo_comp = 'admin@gmail.com'; ?>

                  </div>
                  
           </div>
                                
        </div> 
     </div>
    

</div>
 


<div class="modal fade top" id="fullHeightModalTop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class="modal-dialog modal-full-top modal-top" role="document">


          <div class="modal-content" style="background-image: url(static/img/tapiz.png);">
            <div class="modal-header" style="background-color: #212a40; color: white;">
                <h5 class="modal-title w-100" id="myModalLabel"><strong>REGISTRE SUS DATOS</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                  <!-- Material input -->
                    <!-- Grid row -->
                  <!-- Default form contact -->
                <form class="text-center" action="#!">
                      
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control  mb-4" placeholder="Nombres" id='cliente_nombres'>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control  mb-4" placeholder="Apellidos" id='cliente_apellidos'>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <input type="number" class="form-control  mb-4" placeholder="DNI" id='cliente_dni'>
                          </div>
                          <div class="col">
                            <input type="number" class="form-control  mb-4" placeholder="Telefono/Celular" id='cliente_telefono'>
                          </div>
                        </div>

                        <input type="email" class="form-control mb-4" placeholder="Email" id='cliente_email'>

                        <input type="text" class="form-control mb-4" placeholder="Dirección" id='cliente_direccion'>

                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control  mb-4" placeholder="Cód. Postal" id='cliente_cod_postal'>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control  mb-4" placeholder="Distrito" id='cliente_distrito'>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control  mb-4" placeholder="Provincia" id='cliente_provincia'>
                          </div>
                        </div>

                        <!-- Copy -->
                        <div class="justify-content-center">
                            <strong>Recodar que su pedido llegará en las 15 dias hábiles y nuestro repartidor se comunicará con usted.</strong> 
                        </div>

                        <br/>
                        
                </form>
                <!-- Default form contact -->

                <div class="modal-footer justify-content-center">
                 <button class="btn" type="submit" style="background-color:  black ;color: white; border-radius: 30px;"
                  data-toggle="modal" name="prePago"  id="buyButton" title="Procesar con el Pago">Proceder con el pago</a>
                  <button type="button" class="btn" data-dismiss="modal" style="border-radius: 20px;">No, Gracias</button>
              
                </div>
            </div>
          </div>
        </div>
</div>

    
<script  src="nav/script.js"></script>
    <script type="text/javascript" src="md/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="static/js/toastr.min.js"></script>

    <script>
        /* by default hide all radio_content div elements except first element */
        $(".content .radio_content").hide();

		/* when any radio element is clicked, Get the attribute value of that clicked radio element and show the radio_content div element which matches the attribute value and hide the remaining tab content div elements */
		$(".radio_wrap").click(function(){
			var current_raido = $(this).attr("data-radio");
			$(".content .radio_content").hide();
			$("."+current_raido).show();
		});
    </script>

    <script>

        var contorno_pecho_array    = [];
        var cintura_array           = [];
        var anchura_hombros_array   = [];
        var longitud_manga_array    = [];
        var cuello_array            = [];
        var talle_delantero_array   = [];

        var talla_general_array = [];

        var producto_nombre_general_array   = [];
        var producto_precio_general_array   = [];
        var producto_cantidad_general_array = [];


        function mostrarDetalles(id_producto) {

            $.ajax({ 
                url: 'tiendaController.php',
                data: { 
                    action: 'detallesProducto',
                    id_producto: id_producto
                },
                dataType: "json",
                type: 'POST',
                success: function(output) {
                    $('#modalQuickView_nombre_producto').text(output.Nombre);
                    $('#modalQuickView_img_producto').attr("src", output.Imagen);
                    $('#modalQuickView_precio_producto').text("S/ "+output.Precio);
                    $('#modalQuickView_precio_old_producto').text("S/ "+"299.00");
                    $('#modalQuickView_descripcion_producto').text("");
                    output.Descripcion.split('/').forEach( function(valor, indice, array) {
                        let block = "<p>"+ valor +"</p>";   
                        $('#modalQuickView_descripcion_producto').append(block);
                    });

                    $("#fullHeightModalRight_button").removeAttr('onclick');
                    $("#fullHeightModalRight_button").attr('onclick', 'personalizarCamisa('+output.ID+')');

                    $("#id_producto").val(output.ID);
                    $("#nombre").val(output.Nombre);
                    $("#precio").val(output.Precio);
                    $("#cantidad").val('1');

                }
            });
        }

        function personalizarCamisa(id_producto) {

            let val_size = $('input[name="rdo"]:checked').val();

            if(val_size == 'S') {

                cambioimgS();

                $('#customModalSizeShirt_desc').text('Las medidas en la imagen son las standares para la talla "S"');

                $('#tallas').text("S");
                $("#tallas").attr('onclick', 'cambioimgS()');

                $('#rangeContornoPecho').attr({
                    min:    "100", 
                    max:    "104"
                });

                $('#rangeContornoPecho').val("102");
                $('#demo').text("102");

                $('#rangeCintura').attr({
                    min:    "89", 
                    max:    "93"
                });

                $('#rangeCintura').val("91");
                $('#demo1').text("91");

                $('#rangeAnchuraHombro').attr({
                    min:    "43", 
                    max:    "45"
                });

                $('#rangeAnchuraHombro').val("44");
                $('#demo2').text("44");

                $('#rangeLongitudManga').attr({
                    min:    "67", 
                    max:    "69"
                });

                $('#rangeLongitudManga').val("68");
                $('#demo3').text("68");

                $('#rangeCuello').attr({
                    min:    "39",
                    max:    "41"
                });

                $('#rangeCuello').val("40");
                $('#demo5').text("40");

                $('#rangeTalleDelantero').attr({
                    min:    "73", 
                    max:    "75"
                });

                $('#rangeTalleDelantero').val("74");
                $('#demo6').text("74");

            } else if(val_size == 'M') {

                cambioimgM();

                $('#customModalSizeShirt_desc').text('Las medidas en la imagen son las standares para la talla "M"');

                $('#tallas').text("M");
                $("#tallas").attr('onclick', 'cambioimgM()');

                $('#rangeContornoPecho').attr({
                    min:    "104", 
                    max:    "108",
                    value:  "106"
                });
                $('#rangeContornoPecho').val("106");
                $('#demo').text("106");

                $('#rangeCintura').attr({
                    min:    "94", 
                    max:    "98",
                    value:  "96"
                });
                $('#rangeCintura').val("96");
                $('#demo1').text("96");

                $('#rangeAnchuraHombro').attr({
                    min:    "44.5", 
                    max:    "46.5"
                });
                $('#rangeAnchuraHombro').val("45.5");
                $('#demo2').text("45.5");

                $('#rangeLongitudManga').attr({
                    min:    "68", 
                    max:    "70"
                });
                $('#rangeLongitudManga').val("69");
                $('#demo3').text("69");

                $('#rangeCuello').attr({
                    min:    "40",
                    max:    "42"
                });
                $('#rangeCuello').val("41");
                $('#demo5').text("41");

                $('#rangeTalleDelantero').attr({
                    min:    "74", 
                    max:    "76"
                });
                $('#rangeTalleDelantero').val("75");
                $('#demo6').text("75");

            } else if(val_size == 'L') {

                cambioimgL();

                $('#customModalSizeShirt_desc').text('Las medidas en la imagen son las standares para la talla "L"');

                $('#tallas').text("L");
                $("#tallas").attr('onclick', 'cambioimgL()');

                $('#rangeContornoPecho').attr({
                    min:    "108", 
                    max:    "112"
                });
                $('#rangeContornoPecho').val("110");
                $('#demo').text("110");

                $('#rangeCintura').attr({
                    min:    "99", 
                    max:    "103"
                });
                $('#rangeCintura').val("101");
                $('#demo1').text("101");

                $('#rangeAnchuraHombro').attr({
                    min:    "46", 
                    max:    "48"
                });
                $('#rangeAnchuraHombro').val("47");
                $('#demo2').text("47");

                $('#rangeLongitudManga').attr({
                    min:    "69", 
                    max:    "71"
                });
                $('#rangeLongitudManga').val("70");
                $('#demo3').text("70");

                $('#rangeCuello').attr({
                    min:    "41",
                    max:    "43"
                });
                $('#rangeCuello').val("42");
                $('#demo5').text("42");

                $('#rangeTalleDelantero').attr({
                    min:    "75", 
                    max:    "77"
                });
                $('#rangeTalleDelantero').val("76");
                $('#demo6').text("76");

            }

        }

        $(".btn_agregar_carrito").on( "click", function() {

            $('#contorno_pecho').val( $('#rangeContornoPecho').val()  );
            $('#cintura').val(        $('#rangeCintura').val() );
            $('#anchura_hombros').val($('#rangeAnchuraHombro').val() );
            $('#longitud_manga').val( $('#rangeLongitudManga').val() );
            $('#cuello').val(         $('#rangeCuello').val() );
            $('#talle_delantero').val($('#rangeTalleDelantero').val() );

            $('#talla_general').val( $('#tallas').text() );

            //document.getElementById("form_agregar_producto").submit();
        });
        
    </script>

    <script>
    
    Culqi.publicKey = 'pk_live_89635677df530d7b';
    var monto_final_pago = 0;
    var monto_final_pago_correo = 0;

    $('#buyButton').on('click', function(e) {

        if($('#cliente_nombres').val() == ""){
            showMessage('warning', 'Nombres requeridos');
            return;
        }

        if($('#cliente_apellidos').val() == ""){
            showMessage('warning', 'Apellidos requeridos');
            return;
        }

        if($('#cliente_dni').val() == ""){
            showMessage('warning', 'DNI requerido');
            return;
        }

        if($('#cliente_telefono').val() == ""){
            showMessage('warning', 'Teléfono requerido');
            return;
        }

        if($('#cliente_email').val() == ""){
            showMessage('warning', 'Correo requerido');
            return;
        }

        if(!validateEmail($('#cliente_email').val())){
            showMessage("warning", "El correo ingresado no es válido");         
            return;
        }

        if($('#cliente_direccion').val() == ""){
            showMessage('warning', 'Dirección requerida');
            return;
        }

        if($('#cliente_cod_postal').val() == ""){
            showMessage('warning', 'Código postal requerido');
            return;
        }

        if($('#cliente_distrito').val() == ""){
            showMessage('warning', 'Distrito requerido');
            return;
        }

        if($('#cliente_provincia').val() == ""){
            showMessage('warning', 'Provincia requerida');
            return;
        }

        contorno_pecho_array    = [];
        cintura_array           = [];
        anchura_hombros_array   = [];
        longitud_manga_array    = [];
        cuello_array            = [];
        talle_delantero_array   = [];

        talla_general_array = [];

        producto_nombre_general_array   = [];
        producto_precio_general_array   = [];
        producto_cantidad_general_array = [];

        $("input[name='nombre_producto_carrito[]']").each(function() {
            producto_nombre_general_array.push($(this).val());
        });

        $("input[name='precio_producto_carrito[]']").each(function() {
            producto_precio_general_array.push($(this).val());
        });

        $("input[name='cantidad_producto_carrito[]']").each(function() {
            producto_cantidad_general_array.push($(this).val());
        });

        $("input[name='contorno_pecho_carrito[]']").each(function() {
            contorno_pecho_array.push($(this).val());
        });

        $("input[name='cintura_carrito[]']").each(function() {
            cintura_array.push($(this).val());
        });
        
        $("input[name='anchura_hombros_carrito[]']").each(function() {
            anchura_hombros_array.push($(this).val());
        });

        $("input[name='longitud_manga_carrito[]']").each(function() {
            longitud_manga_array.push($(this).val());
        });

        $("input[name='cuello_carrito[]']").each(function() {
            cuello_array.push($(this).val());
        });
        
        $("input[name='talle_delantero_carrito[]']").each(function() {
            talle_delantero_array.push($(this).val());
        });

        $("input[name='talla_general_carrito[]']").each(function() {
            talla_general_array.push($(this).val());
        });

        // Abre el formulario con la configuración en Culqi.settings
        let monto_total = $('#monto').val();
        
        monto_final_pago = 0;
        monto_final_pago_correo = monto_total;
        //showMessage("warning", "El producto ya ha sido agregado al carrito");
        //return;

        if(monto_total.includes(".")) {

            monto_final_pago = parseFloat(monto_total.replace(".", ""));
            //alert(monto_final_pago);
            //return;
         }else {

            monto_final_pago = parseFloat(monto_total + "00");
            //alert(monto_final_pago);
            //return;
        }

        

        Culqi.settings({
            title: 'Tienda en Linea ',
            currency: 'PEN',
            description: 'Pago de productos',
            amount: monto_final_pago,
            metadata:{
                order_id: "<?php echo $sid; ?>"
            }
        });


        Culqi.open();
        e.preventDefault();
    });

    function pdf() {
        window.location.assign("./?pagado=si");
    }

    function compraCompletada() {
        window.location.assign("./compraCompleta.php");
    }

    function culqi() {

        $('#buyButton').html('Procesando... <i class="fas fa-circle-notch fa-spin fa-1x"></i>');
        $('#buyButton').prop('disabled', true);

      if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
        var email = Culqi.token.email;

        var data = { 
            id:'<?php echo $sid; ?>', 
            producto:'Pago de productos', 
            precio: monto_final_pago, 
            token: token, 
            customer_id: $('#cliente_dni').val()+"_"+"<?php echo $sid; ?>",
            address: $('#cliente_direccion').val(),
            address_city: $('#cliente_distrito').val()+" - "+$('#cliente_provincia').val(),
            first_name: $('#cliente_nombres').val(),
            email: $('#cliente_email').val() 
        };

        var url = "./plugins/proceso.php";

        $.post(url,data,function(res) {
            
            //alert(' Tu pago se Realizó con ' + res + '. Agradecemos tu preferencia.');
            
            if (res=="exito") {
                //pdf();
                $.ajax({ 
                        url: 'tiendaController.php',
                        data: { 
                            action: 'enviarEmail',
                            cliente: $('#cliente_nombres').val() + " " +$('#cliente_apellidos').val() ,
                            dni: $('#cliente_dni').val(),
                            correo: $('#cliente_email').val(),
                            telefono: $('#cliente_telefono').val(),
                            direccion: $('#cliente_direccion').val(),
                            contorno_pecho_array: contorno_pecho_array,
                            cintura_array: cintura_array,
                            anchura_hombros_array: anchura_hombros_array,
                            longitud_manga_array: longitud_manga_array,
                            cuello_array: cuello_array,
                            talle_delantero_array: talle_delantero_array,
                            talla_general_array: talla_general_array,
                            producto_nombre_general_array: producto_nombre_general_array,
                            producto_precio_general_array: producto_precio_general_array,
                            producto_cantidad_general_array: producto_cantidad_general_array,
                            monto_pagado: monto_final_pago_correo
                        },
                        dataType: "json",
                        type: 'POST',
                        success: function(output) {
                            console.log("response 1: ");
                            console.log(output);
                            window.location.assign("./compraCompleta.php");
                            $('#buyButton').html('Proceder con el pago');
                            $('#buyButton').prop('disabled', false);
                        },
                        error: function(error){
                            console.log("response 2: ");
                            console.log(error);
                            window.location.assign("./compraCompleta.php");
                            $('#buyButton').html('Proceder con el pago');
                            $('#buyButton').prop('disabled', false);
                        }
                    });
                

            } else {
                showMessage("error", 'Ha ocurrido un problema. No se logró realizar el pago.');
                $('#buyButton').html('Proceder con el pago');
                $('#buyButton').prop('disabled', false);
                //alert("No se logró realizar el pago.");
            }
        });
        //En esta linea de codigo debemos enviar el "Culqi.token.id"
        //hacia tu servidor con Ajax
      } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        //alert(Culqi.error.user_message);
      }
    };
  </script>


<script>
  var slider9 = document.getElementById("myRange9");
  var output9 = document.getElementById("demo9");

  var slider10 = document.getElementById("myRange10");
  var output10 = document.getElementById("demo10");

  var slider11 = document.getElementById("myRange11");
  var output11 = document.getElementById("demo11");

  var slider12 = document.getElementById("myRange12");
  var output12 = document.getElementById("demo12");

  output9.innerHTML = slider9.value;
  slider9.oninput = function() {
      output9.innerHTML = this.value;             
  }
  output10.innerHTML = slider10.value;
  slider10.oninput = function() {
      output10.innerHTML = this.value;             
  }
  output11.innerHTML = slider11.value;
  slider11.oninput = function() {
      output11.innerHTML = this.value;             
  }
  output12.innerHTML = slider12.value;
  slider12.oninput = function() {
      output12.innerHTML = this.value;             
  }
</script>
<script>
  var slider = document.getElementById("rangeContornoPecho");
  var output = document.getElementById("demo");
  var slider1 = document.getElementById("rangeCintura");
  var output1 = document.getElementById("demo1");
  var slider2 = document.getElementById("rangeAnchuraHombro");
  var output2 = document.getElementById("demo2");
  var slider3 = document.getElementById("rangeLongitudManga");
  var output3 = document.getElementById("demo3");
  //var slider4 = document.getElementById("myRange4");
  //var output4 = document.getElementById("demo4");
  var slider5 = document.getElementById("rangeCuello");
  var output5 = document.getElementById("demo5");
  var slider6 = document.getElementById("rangeTalleDelantero");
  var output6 = document.getElementById("demo6");
  //var slider7 = document.getElementById("myRange7");
  //var output7 = document.getElementById("demo7");

  output.innerHTML = slider.value;
  slider.oninput = function() { // contorno de pecho

      output.innerHTML = this.value;

      var contornoPecho  = this.value;
      var cintura        = document.getElementById("rangeCintura").value;
      var anchuraHombro  = document.getElementById("rangeAnchuraHombro").value;
      var longitudManga  = document.getElementById("rangeLongitudManga").value;
      var cuello         = document.getElementById("rangeCuello").value;
      var talleDelantero = document.getElementById("rangeTalleDelantero").value;
      
      document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+contornoPecho+"cin"+cintura+"hom"+anchuraHombro+"man"+longitudManga+"cue"+cuello+"delan"+talleDelantero+".png";    
  }
  
  output1.innerHTML = slider1.value;
  slider1.oninput = function() { // cintura

      output1.innerHTML = this.value;

      var contornoPecho  = document.getElementById("rangeContornoPecho").value;
      var cintura        = this.value;
      var anchuraHombro  = document.getElementById("rangeAnchuraHombro").value;
      var longitudManga  = document.getElementById("rangeLongitudManga").value;
      var cuello         = document.getElementById("rangeCuello").value;
      var talleDelantero = document.getElementById("rangeTalleDelantero").value;
      
      document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+contornoPecho+"cin"+cintura+"hom"+anchuraHombro+"man"+longitudManga+"cue"+cuello+"delan"+talleDelantero+".png";
  }

  output2.innerHTML = slider2.value;
  slider2.oninput = function() { // anchura de hombro

      output2.innerHTML = this.value;
      
      var contornoPecho  = document.getElementById("rangeContornoPecho").value;
      var cintura        = document.getElementById("rangeCintura").value;
      var anchuraHombro  = this.value;
      var longitudManga  = document.getElementById("rangeLongitudManga").value;
      var cuello         = document.getElementById("rangeCuello").value;
      var talleDelantero = document.getElementById("rangeTalleDelantero").value;
      
      document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+contornoPecho+"cin"+cintura+"hom"+anchuraHombro+"man"+longitudManga+"cue"+cuello+"delan"+talleDelantero+".png";
  }

  output3.innerHTML = slider3.value;
  slider3.oninput = function() { // longitud de manga

      output3.innerHTML = this.value;

      var contornoPecho  = document.getElementById("rangeContornoPecho").value;
      var cintura        = document.getElementById("rangeCintura").value;
      var anchuraHombro  = document.getElementById("rangeAnchuraHombro").value;
      var longitudManga  = this.value;
      var cuello         = document.getElementById("rangeCuello").value;
      var talleDelantero = document.getElementById("rangeTalleDelantero").value;
      
      document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+contornoPecho+"cin"+cintura+"hom"+anchuraHombro+"man"+longitudManga+"cue"+cuello+"delan"+talleDelantero+".png";
  }

  output5.innerHTML = slider5.value;
  slider5.oninput = function() { // cuello

      output5.innerHTML = this.value;

      var contornoPecho  = document.getElementById("rangeContornoPecho").value;
      var cintura        = document.getElementById("rangeCintura").value;
      var anchuraHombro  = document.getElementById("rangeAnchuraHombro").value;
      var longitudManga  = document.getElementById("rangeLongitudManga").value;
      var cuello         = this.value;
      var talleDelantero = document.getElementById("rangeTalleDelantero").value;
      
      document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+contornoPecho+"cin"+cintura+"hom"+anchuraHombro+"man"+longitudManga+"cue"+cuello+"delan"+talleDelantero+".png";
  }

  output6.innerHTML = slider6.value;
  slider6.oninput = function() { // talle denlantero

      output6.innerHTML = this.value;

      var contornoPecho  = document.getElementById("rangeContornoPecho").value;
      var cintura        = document.getElementById("rangeCintura").value;
      var anchuraHombro  = document.getElementById("rangeAnchuraHombro").value;
      var longitudManga  = document.getElementById("rangeLongitudManga").value;
      var cuello         = document.getElementById("rangeCuello").value;
      var talleDelantero = this.value;
      
      document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+contornoPecho+"cin"+cintura+"hom"+anchuraHombro+"man"+longitudManga+"cue"+cuello+"delan"+talleDelantero+".png";
  }
 
</script>
<script>
  function cambioimgL() {
    document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho110cin101hom47man70cue42delan76.png";
    document.getElementById("rangeContornoPecho").value = "110";
    document.getElementById("rangeCintura").value = "101";
    document.getElementById("rangeAnchuraHombro").value = "47";
    document.getElementById("rangeLongitudManga").value = "70";
    document.getElementById("rangeCuello").value = "42";
    document.getElementById("rangeTalleDelantero").value = "76";
  }

  function cambioimgM() {
    document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho106cin96hom45.5man69cue41delan75.png";
    document.getElementById("rangeContornoPecho").value = "106";
    document.getElementById("rangeCintura").value = "96";
    document.getElementById("rangeAnchuraHombro").value = "45.5";
    document.getElementById("rangeLongitudManga").value = "69";
    document.getElementById("rangeCuello").value = "41";
    document.getElementById("rangeTalleDelantero").value = "75";
  }

  function cambioimgS() {
    document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho102cin91hom44man68cue40delan74.png";
    document.getElementById("rangeContornoPecho").value = "102";
    document.getElementById("rangeCintura").value = "91";
    document.getElementById("rangeAnchuraHombro").value = "44";
    document.getElementById("rangeLongitudManga").value = "68";
    document.getElementById("rangeCuello").value = "40";
    document.getElementById("rangeTalleDelantero").value = "74";
  }

    function showMessage(type, message) {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "timeOut": "2000",
            "extendedTimeOut": "2000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr[type](message);
    }

    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

</script>

        <?php 
            if(isset($_SESSION['COMPRA'])) { 
                if($_SESSION['COMPRA'] == "success") { ?>
                <script>
                    showMessage("success", 'El pago se realizó con éxito. Agradecemos su preferencia.');
                </script>
                <?php 
                unset($_SESSION['COMPRA']);
                }
            }
        ?>

</body>
</html>