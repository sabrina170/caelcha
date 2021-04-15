<?php
  include 'Global/correo.php';
  include 'Global/conexion.php';
  include 'carrito.php';
  if(isset($_GET['submit'])){
    if($_GET['rdo']){
        $rdo = $_GET['rdo'];
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cael Web</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="static/css/estilo.css">
  <link  rel="icon"   href="static/img/logoweb/fenix.png" type="image/png" />
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark gris scrolling-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="static/img/Cael.png" width="140" height="40" class="d-inline-block align-top" alt="" loading="lazy">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="conocenos.php">Conocenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="tienda.php">Tienda</a>
            </li>
          </ul>
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#centralModalSuccess">
                <i class="fas fa-shopping-cart">
                </i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Cerrar.php">Salir</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>
      <br/><br/><br/>
  <section>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4 text-dark">Tienda de ropa</h1>
      </div>
      <div class="col-lg-9">
      <!--carrousel tienda-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="static/img/carrousel/1.png" alt="First slide">
            </div>
          <div class="carousel-item">
               <img class="d-block w-100" src="static/img/carrousel/2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="static/img/carrousel/3.png" alt="Third slide">
           </div>
          </div>
           <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
          </a>
       </div>
       <hr class="my-4">
      <!--cfin de carrousel-->
      
      
      <div class="row">

      <?php
      $sql = $pdo->prepare('SELECT * FROM tblproductos');
      $sql->execute();
      $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        //print_r($resultado);
      ?>
      <div class="row">
        <?php
          foreach ($resultado as $producto) {
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?php echo $producto['Imagen']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $producto['Nombre']; ?></a>
                </h4>
                <h5>$<?php echo $producto['Precio']; ?></h5>
                <p class="card-text"><?php echo $producto['Descripcion']; ?></p>
              </div>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalQuickView<?php echo $producto['ID']?>">Ver Producto</button>  
            </div>
          </div>
        <?php
          }
        ?>
        </div>
      </div>
    </div>
  </div>
<!--botton flotante-->
  <div class="container_boton">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-whatsapp"></a>
        <a href="#" class="fas fa-tshirt"></a>
    </div>
    <div class="btn-mas">
        
        <label for="btn-mas" class="icon-mas2"><i class="fas fa-plus"></i></label>
    </div>
</div> 

<!-- Modal: modalQuickView -->
<?php
  foreach ($resultado as $producto) {
?>
<div class="modal fade" id="modalQuickView<?php echo $producto['ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
              data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100"
                    src="<?php echo $producto['Imagen']; ?>"
                    alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100"
                    src="<?php echo $producto['Imagen']; ?>"
                    alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100"
                    src="<?php echo $producto['Imagen']; ?>"
                    alt="Third slide">
                </div>
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
              <ol class="carousel-indicators">
                <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                  <img src="<?php echo $producto['Imagen']; ?>" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="1">
                  <img src="<?php echo $producto['Imagen']; ?>" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="2">
                  <img src="<?php echo $producto['Imagen']; ?>" width="60">
                </li>
              </ol>
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <br>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong><?php echo $producto['Nombre']; ?></strong>
            </h2>
            <h4 class="h4-responsive">
              <span class="green-text">
                <strong>$<?php echo $producto['Precio']; ?></strong>
              </span>
              <span class="grey-text">
                <small>
                  <s>$89</s>
                </small>
              </span>
            </h4>
            <!--Accordion wrapper-->
            <br>
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
              <!-- Accordion card -->
              <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">
                    <h5 class="mb-0">
                      Collapsible Group Item
                    </h5>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                  data-parent="#accordionEx">
                  <div class="card-body">
                  <?php echo $producto['Descripcion']; ?>
                  </div>
                </div>
              </div>
            </div>
            <br>
            
            <!-- Accordion wrapper -->
            <!-- Add to Cart -->
            <div class="card-body">
              <div class="text-center">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#fullHeightModalRight">
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
<?php
  }
?>
<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-height modal-right" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="GET" action="">  
        <div class="modal-body">
          <!--contedino del formulario-->
          <div class="d-flex justify-content-between">
            <label for="exampleForm2">Altura: </label>
            <small><span id="demo9"></span> cm.</small>
          </div>
          <input type="range" min="150" max="220" value="170" class="custom-range" id="myRange9">

          <div class="d-flex justify-content-between">
            <label for="exampleForm2">Peso: </label>
            <small><span id="demo10"></span> Kg.</small>
          </div>
          <input type="range" min="40" max="180" value="70" class="custom-range" id="myRange10">

          <div class="d-flex justify-content-between">
            <label for="exampleForm2">Años: </label>
            <small><span id="demo11"></span> Años.</small>
          </div>
          <input type="range" min="10" max="100" value="40" class="custom-range" id="myRange11">

          <div class="d-flex justify-content-between">
            <label for="exampleForm2">Talla de calzado: </label>
            <small><span id="demo12"></span> EU.</small>
          </div>
          <input type="range" min="30.5" max="42.5" value="36.5" class="custom-range" id="myRange12">
          <!-- Default inline 1-->
          <br>
          <br>
          <label for="exampleForm2">Talla de camisa de uso habitual:</label>
            <div class="text-center">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rdo" id="rdo" value="S">
                <label class="form-check-label" >S</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rdo" id="rdo" value="M">
                <label class="form-check-label" >M</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rdo" id="rdo" value="L">
                <label class="form-check-label" >L</label>
              </div>
              <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-secondary" name="submit" data-dismiss="modal" data-toggle="modal" data-target=".bd-example-modal-xl">ACEPTAR</button>
                <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extrae modal</button>-->
              </div>
            </div> 
             
          <!--fin delcontedino del formulario-->
        </div>
      </form>    
    </div>
  </div>
</div>

<!-- Full Height Modal Right -->

    </section>
<!-- modal de personalizar camisa-->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalPopoversLabel">Camisa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-6" style="margin-top:10%;">
                        <div class="text-center">
                          <label>Personaliza tu camisa</label>
                        </div>
                        <div class="text-center">
                            <img id="imgcamisa" style="margin-left:20px;margin-top:20px" width="350px" src="static/img/tallas/tallapecho110cin101hom47man70cue42delan76.png">
                        </div>
                        <div class="text-center" style="padding:30px;">
                          <small>las medidas en la imagen son las standares para la talla "
                            <?php echo $rdo; ?>"</small>
                        </div>
                    </div>
                    <div class="col-5">                   
                      <div class="form-group ">
                        <?php 
                          if ($rdo) {
                            if( $rdo == 'S' ){ 
                              ?>
                              <button id="tallas" onclick="cambioimgS()" class="btn" href="" style="margin-right:50px;">S</button>
                              <?php
                            }elseif( $rdo == 'M'){ 
                              ?>
                              <button id="tallam" onclick="cambioimgM()" class="btn" href="" style="margin-right:50px;">M</button>
                              <?php 
                            }else{ 
                              ?>
                              <button id="tallal" onclick="cambioimgL()" class="btn" href="">L</button>
                              <?php
                            }
                          }
                        ?>            
                      </div>
                      <?php 
                          if ($rdo) {
                            if( $rdo == 'S' ){ 
                              ?>
                                <div class="form-group">
                                    <label for="customRange1">A.- CONTORNO DE PECHO</label>
                                    <input type="range" min="100" max="104" value="102" class="custom-range" id="myRange">
                                    <small>Valor: <span id="demo"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">B.- CINTURA</label>
                                    <input type="range" min="89" max="93" value="91" class="custom-range" id="myRange1">
                                    <small>Valor: <span id="demo1"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">C.- ANCHURA DE HOMBROS</label>
                                    <input type="range" min="43" max="45" value="44" class="custom-range" id="myRange2">
                                    <small>Valor: <span id="demo2"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">D.- LONGITUD DE MANGA</label>
                                    <input type="range" min="67" max="69" value="68" class="custom-range" id="myRange3">
                                    <small>Valor: <span id="demo3"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">E.- CUELLO</label>
                                    <input type="range" min="39" max="41" value="40" class="custom-range" id="myRange5">
                                    <small>Valor: <span id="demo5"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">F.- TALLE DELANTERO</label>
                                    <input type="range" min="73" max="75" value="74" class="custom-range" id="myRange6">
                                    <small>Valor: <span id="demo6"></span> cm.</small>
                                </div>
                              <?php
                                }elseif( $rdo == 'M'){
                              ?>
                                  <div class="form-group">
                                      <label for="customRange1">A.- CONTORNO DE PECHO</label>
                                      <input type="range" min="104" max="108" value="106" class="custom-range" id="myRange">
                                      <small>Valor: <span id="demo"></span> cm.</small>
                                  </div>
                                  <div class="form-group">
                                      <label for="formControlRange">B.- CINTURA</label>
                                      <input type="range" min="94" max="98" value="96" class="custom-range" id="myRange1">
                                      <small>Valor: <span id="demo1"></span> cm.</small>
                                  </div>
                                  <div class="form-group">
                                      <label for="formControlRange">C.- ANCHURA DE HOMBROS</label>
                                      <input type="range" min="44.5" max="46.5" value="45.5" class="custom-range" id="myRange2">
                                      <small>Valor: <span id="demo2"></span> cm.</small>
                                  </div>
                                  <div class="form-group">
                                      <label for="formControlRange">D.- LONGITUD DE MANGA</label>
                                      <input type="range" min="68" max="70" value="69" class="custom-range" id="myRange3">
                                      <small>Valor: <span id="demo3"></span> cm.</small>
                                  </div>
                                  <div class="form-group">
                                      <label for="formControlRange">E.- CUELLO</label>
                                      <input type="range" min="40" max="42" value="41" class="custom-range" id="myRange5">
                                      <small>Valor: <span id="demo5"></span> cm.</small>
                                  </div>
                                  <div class="form-group">
                                      <label for="formControlRange">F.- TALLE DELANTERO</label>
                                      <input type="range" min="74" max="76" value="75" class="custom-range" id="myRange6">
                                      <small>Valor: <span id="demo6"></span> cm.</small>
                                  </div>
                              <?php 
                                }else{ 
                              ?>
                                <div class="form-group">
                                    <label for="customRange1">A.- CONTORNO DE PECHO</label>
                                    <input type="range" min="108" max="112" value="110" class="custom-range" id="myRange">
                                    <small>Valor: <span id="demo"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">B.- CINTURA</label>
                                    <input type="range" min="99" max="103" value="101" class="custom-range" id="myRange1">
                                    <small>Valor: <span id="demo1"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">C.- ANCHURA DE HOMBROS</label>
                                    <input type="range" min="46" max="48" value="47" class="custom-range" id="myRange2">
                                    <small>Valor: <span id="demo2"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">D.- LONGITUD DE MANGA</label>
                                    <input type="range" min="69" max="71" value="70" class="custom-range" id="myRange3">
                                    <small>Valor: <span id="demo3"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">E.- CUELLO</label>
                                    <input type="range" min="41" max="43" value="42" class="custom-range" id="myRange5">
                                    <small>Valor: <span id="demo5"></span> cm.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">F.- TALLE DELANTERO</label>
                                    <input type="range" min="75" max="77" value="76" class="custom-range" id="myRange6">
                                    <small>Valor: <span id="demo6"></span> cm.</small>
                                </div>
                              <?php
                            }
                          }
                        ?>            
                    </div>
                </div>     
            </div>
        </div>
      <div class="modal-footer justify-content-center">
        <button class="btn btn-primary" name="btnAccion" onclick="anyadirCarrito()" type="submit" value="Agregar">Agregar
          <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i>
        </button>
        <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">No, Gracias</a>
      </div>
    </div>
  </div>
</div>

<!-- fin de  modal de personalizar camisa-->
<!-- modal lista de productos -->
<!-- Central Modal Medium Success -->
<div class="modal fade right" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-top-right modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">Lista</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>
       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
          <aside class="col-sm-4">
            <h2>Carrito</h2>
            <!-- Elementos del carrito -->
            <ul id="carrito" class="list-group"></ul>
            <hr>
            <!-- Precio total -->
            <p class="text-right">Total: <span id="total"></span>&euro;</p>
            <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
          </aside>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         <a type="button" class="btn btn-success">Get it now <i class="far fa-gem ml-1 text-white"></i></a>
         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->
<!-- endmodal -->
    <hr class="my-4">
    <footer>
      <div class="container-footer-all">
      <div class="container-body">
        <div class="column1">
          <h1>
            Envia tus Consultas.
          </h1>
          <div class="card">
         <div class="card-body px-lg-5 pt-0">
    <form class="text-center" style="color: #757575;" action="#!">
        <div class="md-form mt-3">
            <input type="text" id="materialContactFormName" class="form-control">
            <label for="materialContactFormName">Nombre y Apellido</label>
        </div>
        <div class="md-form">
            <input type="email" id="materialContactFormEmail" class="form-control">
            <label for="materialContactFormEmail">E-mail</label>
        </div>
        <div class="md-form">
            <input type="email" id="materialContactFormAsunto" class="form-control">
            <label for="materialContactFormAsunto">Asunto</label>
        </div>
        <div class="md-form">
            <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
            <label for="materialContactFormMessage">Message</label>
        </div>
        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Enviar</button>

    </form>
  </div>
</div>
        </div>
        <div class="column2">
          <h1>Redes Sociales</h1>
          <div class="row-icon">
            <img src="static/img/footer/facebook.png" alt="">
            <label for="">Siguenos en Facebook</label>

          </div>
          <div class="row-icon">
            <img src="static/img/footer/instagram.png" alt="">
            <label for="">Siguenos en Instragram</label>

          </div>
          <div class="row-icon">
            <img src="static/img/footer/whatsapp.png" alt="">
            <label for="">Escribenos al Whatsapp</label>

          </div>

        </div>
        <div class="column3">
          <h1>Informacion Contactos</h1>
          <div class="row2">
             <img src="static/img/footer/ubicacion.png" alt="">
             <label for="">La romana, Republica de peru lima
               urb.la merced
             </label>
          </div>
          <div class="row2">
            <img src="static/img/footer/telefono.png" alt="">
            <label for="">
              967-497-689
            </label>
         </div>
         <div class="row2">
          <img src="static/img/footer/mensaje.png" alt="">
          <label for="">
            caelinformacion@gmail.com
          </label>
       </div>

        </div>
      </div>
    </div>
    <div class="container-footer">
      <div class="footer">
      <div class="copyright">
        © 2020 Todos los Derechos Reservados - <a href="https://www.appsitecinfo.com/">Appsitec</a>
      </div>
    </div>
   </div>
    </footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
  window.onload = function(){

    let carrito = [];
    let total = 0;
    let $carrito = document.querySelector('#carrito');
    let $total = document.querySelector('#total');
    let $botonVaciar = document.querySelector('#boton-vaciar');
    
    function anyadirCarrito () {
          // Anyadimos el Nodo a nuestro carrito
          carrito.push(this.getAttribute('marcador'))
          // Calculo el total
          calcularTotal();
          // Renderizamos el carrito 
          renderizarCarrito();
    }
    function renderizarCarrito() {
      // Vaciamos todo el html
      $carrito.textContent = '';
      // Quitamos los duplicados
      let carritoSinDuplicados = [...new Set(carrito)];
      // Generamos los Nodos a partir de carrito
      carritoSinDuplicados.forEach(function (item, indice) {
          // Obtenemos el item que necesitamos de la variable base de datos
          let miItem = baseDeDatos.filter(function(itemBaseDatos) {
              return itemBaseDatos['id'] == item;
          });
          // Cuenta el número de veces que se repite el producto
          let numeroUnidadesItem = carrito.reduce(function (total, itemId) {
              return itemId === item ? total += 1 : total;
          }, 0);
          // Creamos el nodo del item del carrito
          let miNodo = document.createElement('li');
          miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
          miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0]['nombre']} - ${miItem[0]['precio']}€`;
          // Boton de borrar
          let miBoton = document.createElement('button');
          miBoton.classList.add('btn', 'btn-danger', 'mx-5');
          miBoton.textContent = 'X';
          miBoton.style.marginLeft = '1rem';
          miBoton.setAttribute('item', item);
          miBoton.addEventListener('click', borrarItemCarrito);
          // Mezclamos nodos
          miNodo.appendChild(miBoton);
          $carrito.appendChild(miNodo);
      })
    }
    function borrarItemCarrito() {
      console.log()
      // Obtenemos el producto ID que hay en el boton pulsado
      let id = this.getAttribute('item');
      // Borramos todos los productos
      carrito = carrito.filter(function (carritoId) {
          return carritoId !== id;
      });
      // volvemos a renderizar
      renderizarCarrito();
      // Calculamos de nuevo el precio
      calcularTotal();
    }
    function calcularTotal() {
        // Limpiamos precio anterior
        total = 0;
        // Recorremos el array del carrito
        for (let item of carrito) {
            // De cada elemento obtenemos su precio
            let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                return itemBaseDatos['id'] == item;
            });
            total = total + miItem[0]['precio'];
        }
        // Formateamos el total para que solo tenga dos decimales
        let totalDosDecimales = total.toFixed(2);
        // Renderizamos el precio en el HTML
        $total.textContent = totalDosDecimales;
    }
    function vaciarCarrito() {
        // Limpiamos los productos guardados
        carrito = [];
        // Renderizamos los cambios
        renderizarCarrito();
        calcularTotal();
    }
    $botonVaciar.addEventListener('click', vaciarCarrito);
  }
  
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
  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  var slider1 = document.getElementById("myRange1");
  var output1 = document.getElementById("demo1");
  var slider2 = document.getElementById("myRange2");
  var output2 = document.getElementById("demo2");
  var slider3 = document.getElementById("myRange3");
  var output3 = document.getElementById("demo3");
  //var slider4 = document.getElementById("myRange4");
  //var output4 = document.getElementById("demo4");
  var slider5 = document.getElementById("myRange5");
  var output5 = document.getElementById("demo5");
  var slider6 = document.getElementById("myRange6");
  var output6 = document.getElementById("demo6");
  //var slider7 = document.getElementById("myRange7");
  //var output7 = document.getElementById("demo7");

  output.innerHTML = slider.value;
  slider.oninput = function() {
      output.innerHTML = this.value;
      var x = this.value;
      var i;
      var sl1 = document.getElementById("myRange1").value;
      var sl2 = document.getElementById("myRange2").value;
      var sl3 = document.getElementById("myRange3").value;
      //var sl4 = document.getElementById("myRange4").value;
      var sl5 = document.getElementById("myRange5").value;
      var sl6 = document.getElementById("myRange6").value;
      //var sl7 = document.getElementById("myRange7").value;
      for(i=102;i<=112;i++){
        if(x == i){
          //document.getElementById("imgcamisa").src = "static/img/tallaL"+i+".png";
          document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+i+"cin"+sl1+"hom"+sl2+"man"+sl3+"cue"+sl5+"delan"+sl6+".png";
        }
      }              
  }
  
  output1.innerHTML = slider1.value;
  slider1.oninput = function() {
      output1.innerHTML = this.value;
      var x = this.value;
      var i;
      var sl = document.getElementById("myRange").value;
      var sl2 = document.getElementById("myRange2").value;
      var sl3 = document.getElementById("myRange3").value;
      //var sl4 = document.getElementById("myRange4").value;
      var sl5 = document.getElementById("myRange5").value;
      var sl6 = document.getElementById("myRange6").value;
      //var sl7 = document.getElementById("myRange7").value;
      for(i=91;i<=103;i++){
        if(x == i){
          document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+sl+"cin"+i+"hom"+sl2+"man"+sl3+"cue"+sl5+"delan"+sl6+".png";
        }
      }
  }

  output2.innerHTML = slider2.value;
  slider2.oninput = function() {
      output2.innerHTML = this.value;
      var x = this.value;
      var i;
      var sl = document.getElementById("myRange").value;
      var sl1 = document.getElementById("myRange1").value;
      var sl3 = document.getElementById("myRange3").value;
      //var sl4 = document.getElementById("myRange4").value;
      var sl5 = document.getElementById("myRange5").value;
      var sl6 = document.getElementById("myRange6").value;
      //var sl7 = document.getElementById("myRange7").value;
      for(i=44;i<=48;i++){
        if(x == i){
          document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+sl+"cin"+sl1+"hom"+i+"man"+sl3+"cue"+sl5+"delan"+sl6+".png";
        }
      }
  }

  output3.innerHTML = slider3.value;
  slider3.oninput = function() {
      output3.innerHTML = this.value;
      var x = this.value;
      var i;
      var sl = document.getElementById("myRange").value;
      var sl1 = document.getElementById("myRange1").value;
      var sl2 = document.getElementById("myRange2").value;
      //var sl4 = document.getElementById("myRange4").value;
      var sl5 = document.getElementById("myRange5").value;
      var sl6 = document.getElementById("myRange6").value;
      //var sl7 = document.getElementById("myRange7").value;
      for(i=67;i<=71;i++){
        if(x == i){
          document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+sl+"cin"+sl1+"hom"+sl2+"man"+i+"cue"+sl5+"delan"+sl6+".png";
        }
      }
  }
  /*
  output4.innerHTML = slider4.value;
  slider4.oninput = function() {
      output4.innerHTML = this.value;
      var x = this.value;
      var i;
      for(i=38;i<=44;i++){
        if(x == i){
          document.getElementById("imgcamisa").src = "static/img/tallaLbrazo"+i+".png";
        }
      }
  }*/
  output5.innerHTML = slider5.value;
  slider5.oninput = function() {
      output5.innerHTML = this.value;
      var x = this.value;
      var i;
      var sl = document.getElementById("myRange").value;
      var sl1 = document.getElementById("myRange1").value;
      var sl2 = document.getElementById("myRange2").value;
      //var sl4 = document.getElementById("myRange4").value;
      var sl3 = document.getElementById("myRange3").value;
      var sl6 = document.getElementById("myRange6").value;
      //var sl7 = document.getElementById("myRange7").value;
      for(i=40;i<=43;i++){
        if(x == i){
          document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+sl+"cin"+sl1+"hom"+sl2+"man"+sl3+"cue"+i+"delan"+sl6+".png";
        }
      }
  }

  output6.innerHTML = slider6.value;
  slider6.oninput = function() {
      output6.innerHTML = this.value;
      var x = this.value;
      var i;
      var sl = document.getElementById("myRange").value;
      var sl1 = document.getElementById("myRange1").value;
      var sl2 = document.getElementById("myRange2").value;
      //var sl4 = document.getElementById("myRange4").value;
      var sl3 = document.getElementById("myRange3").value;
      var sl5 = document.getElementById("myRange5").value;
      //var sl7 = document.getElementById("myRange7").value;
      for(i=74;i<=77;i++){
        if(x == i){
          document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho"+sl+"cin"+sl1+"hom"+sl2+"man"+sl3+"cue"+sl5+"delan"+i+".png";
        }
      }
  }
  /*
  output7.innerHTML = slider7.value;
  slider7.oninput = function() {
      output7.innerHTML = this.value;
      var x = this.value;
      var i;
      for(i=16.5;i<=19.5;i++){
        if(x == i){
          document.getElementById("imgcamisa").src = "static/img/tallaLpuño"+i+".png";
        }
      }
  }

  if ( slider.value === "103") {
    document.getElementById("imgcamisa").src = "static/img/tallam103.png";
  }
  if ( slider.value === "104") {
    document.getElementById("imgcamisa").src = "static/img/tallam104.png";
  } */  
</script>
<script>
  <?php
    if($rdo){
      if($rdo == 'S'){
        ?>
        document.getElementById("imgcamisa").src = "static/img/tallaL102.png";
        document.getElementById("myRange").value = "102";
        document.getElementById("myRange1").value = "91";
        document.getElementById("myRange2").value = "44";
        document.getElementById("myRange3").value = "68";
        //document.getElementById("myRange4").value = "44";
        document.getElementById("myRange5").value = "40";
        document.getElementById("myRange6").value = "74";
        //document.getElementById("myRange6").value = "19.5";
        <?php
      }elseif($rdo == 'M'){
        ?>
        document.getElementById("imgcamisa").src = "static/img/tallaL106.png";
        document.getElementById("myRange").value = "106";
        document.getElementById("myRange1").value = "96";
        document.getElementById("myRange2").value = "45.5";
        document.getElementById("myRange3").value = "69";
        //document.getElementById("myRange4").value = "41";
        document.getElementById("myRange5").value = "41";
        document.getElementById("myRange6").value = "75";
        //document.getElementById("myRange6").value = "18";
        <?php
      }else{
        ?>
        document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho110cin101hom47man70cue42delan76.png";
        document.getElementById("myRange").value = "110";
        document.getElementById("myRange1").value = "101";
        document.getElementById("myRange2").value = "47";
        document.getElementById("myRange3").value = "70";
        //document.getElementById("myRange4").value = "38";
        document.getElementById("myRange5").value = "42";
        document.getElementById("myRange6").value = "76";
        //document.getElementById("myRange7").value = "16.5";
        <?php
      }
    }
  ?>
  function cambioimgL(){
    document.getElementById("imgcamisa").src = "static/img/tallas/tallapecho110cin101hom47man70cue42delan76.png";
    document.getElementById("myRange").value = "110";
    document.getElementById("myRange1").value = "101";
    document.getElementById("myRange2").value = "47";
    document.getElementById("myRange3").value = "70";
    //document.getElementById("myRange4").value = "38";
    document.getElementById("myRange5").value = "42";
    document.getElementById("myRange6").value = "76";
    //document.getElementById("myRange7").value = "16.5";
  }
  function cambioimgM(){
    document.getElementById("imgcamisa").src = "static/img/tallaL106.png";
    document.getElementById("myRange").value = "106";
    document.getElementById("myRange1").value = "96";
    document.getElementById("myRange2").value = "45.5";
    document.getElementById("myRange3").value = "69";
    //document.getElementById("myRange4").value = "41";
    document.getElementById("myRange5").value = "41";
    document.getElementById("myRange6").value = "75";
    //document.getElementById("myRange6").value = "18";
  }
  function cambioimgS(){
    document.getElementById("imgcamisa").src = "static/img/tallaL102.png";
    document.getElementById("myRange").value = "102";
    document.getElementById("myRange1").value = "91";
    document.getElementById("myRange2").value = "44";
    document.getElementById("myRange3").value = "68";
    //document.getElementById("myRange4").value = "44";
    document.getElementById("myRange5").value = "40";
    document.getElementById("myRange6").value = "74";
    //document.getElementById("myRange6").value = "19.5";
  }
</script>
</body>
</html>