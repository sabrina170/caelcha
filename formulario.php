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
    <link rel="stylesheet" href="static/css/full-width-pics.css">
    <link  rel="icon"   href="static/img/logoweb/fenix.png" type="image/png" />
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark gris scrolling-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
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
                  <a class="nav-link" href="conocenos .php">Conocenos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="tienda.php">Tienda</a>
                </li>
              </ul>
              <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                  <a class="nav-link"><i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mostrarCarrito.php"><i class="fas fa-shopping-cart">(
                            <?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>
                            )</i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Cerrar.php">Salir</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
<!-- fomrulario -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fullHeightModalTop">
  Launch demo modal
</button>

<!-- Full Height Modal Right -->
<div class="modal fade top" id="fullHeightModalTop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-top modal-top" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Finalize su compra</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Material input -->
 <!-- Grid row -->
 <div class="row">
    <!-- Grid column -->
    <div class="col">
      <!-- Material input -->
      <div class="md-form mt-0">
            <input type="text" id="nombre" class="form-control">
            <label for="form1">Nombre</label>
      </div>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col">
      <!-- Material input -->
      <div class="md-form mt-0">
      <input type="text" id="apellido" class="form-control">
            <label for="form1">Apellido</label>
      </div>
    </div>
  </div>
<!-- Material input -->
<div class="md-form">
  <input type="text" id="telefono" class="form-control">
  <label for="form1">Telefono</label>
</div>
<!-- Material input -->
<div class="md-form">
  <input type="text" id="direccion" class="form-control">
  <label for="form1">Direccion</label>
</div>
<div class="md-form">
  <input type="text" id="email" class="form-control">
  <label for="form1">Correo electronico</label>
</div>

      </div>
      <div class="modal-footer justify-content-center">
      <button type="button" class="btn btn-outline-danger btn-rounded waves-effect" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-outline-success btn-rounded waves-effect">Finalizar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->


<!-- fin -->
    <hr class="my-4">
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

    <footer>
      <div class="container-footer-all">
      <div class="container-body">
        <div class="column1">
          <h1>
            Envia tus Consultas y Reclamos.
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
</body>
</html>