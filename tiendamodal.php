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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSuccess">Launch
   modal
</button>

 <!-- Central Modal Medium Success -->
 <div class="modal fade right" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-top-right modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">Modal Success</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
             ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,
             ab officiis totam.</p>
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