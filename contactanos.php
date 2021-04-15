<?php
  include 'Global/correo.php';
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
    <link rel="stylesheet" href="static/css/toastr.min.css">
    <link  rel="icon"   href="static/img/logoweb/fenix.png" type="image/png"/>
</head>
<body style="background-image: url(static/img/tapiz.png);">

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
                  <a class="nav-link" href="conocenos.php">Conócenos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="galeria.php">Galería</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="tienda.php">Tienda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="contactanos.php">Contáctanos</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>
   <br><br>
   <br><br>

  <div class="container">

      <!--Section: Content-->
      <section class="dark-grey-text mb-5">
      
        
        <style>
          .map-container-section {
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
          }
          .map-container-section iframe {
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
          }
        </style>
        <!-- Section heading -->
        <h3 class="font-weight-bold  mb-3">CONTÁCTANOS</h3>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-7">

              <style>
                .border-top {
                  border-top: 5px solid #4d5566 !important;
                  border-top-left-radius: .25rem!important;
                  border-top-right-radius: .25rem!important;
                }
              </style>

            <!--Section: Content-->
            <section class="text-center dark-grey-text">

              <div class="card">
                <div class="card-body rounded-top border-top">
                  
                    <div class="row text-center d-flex justify-content-center my-3" >
                      <!-- <div class="col-lg-4 col-md-6" style="border-right: 2px solid grey !important;">
                        <i class="fas fa-map-marker-alt fa-2x mb-2 grey-text"></i>
                        <p><strong>DIRECCIÓN</strong></p>
                        <p class="font-weight-normal">New York, 94126 United States</p>
                      </div> -->
                      <div class="col-lg-4 col-md-6" style="border-right: 2px solid grey !important;">
                        <i class="fas fa-phone fa-2x mb-2 grey-text"></i>
                        <p><strong>TELÉFONO</strong></p>
                        <p class="font-weight-normal">+51 920 310 522</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <i class="fas fa-envelope fa-2x mb-2 grey-text"></i>
                        <p><strong>EMAIL</strong></p>
                        <p class="font-weight-normal">caelinformacion@gmail.com</p>
                      </div>
                      
                    </div>
                  <!--Section: Content-->
                  <form class="mb-4" action="">

                    <div class="row">
                      <div class="col-md-6 mb-4">

                        <!-- Name -->
                        <input type="text" id="name" class="form-control" placeholder="Nombre">

                      </div>
                      <div class="col-md-6 mb-4">

                        <!-- Email -->
                        <input type="email" id="email" class="form-control" placeholder="Email">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 mb-4">

                        <!-- Subject -->
                        <input type="text" id="subject" class="form-control" placeholder="Asunto">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">

                        <div class="form-group ">
                          <textarea class="form-control rounded" id="message" rows="4" placeholder="Cómo podemos ayudarlo?"></textarea>
                        </div>

                        <div class="text-center">
                          <button type="button" id='buyButton' class="btn btn-md" style="background-color:  #4d5566;color: white;" onclick="enviarCorreo()">Enviar</button>
                        </div>

                      </div>
                    </div>

                  </form>
                  
                </div>
              </div>

            </section>
            <!--Section: Content-->
          </div>
            <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-5">
             <div class="mb-4">
            <img src="static/img/Cael1.png" alt="" width="80%">
            </div>
            <!--Google map-->
            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62428.28558056664!2d-77.08103536741886!3d-12.059487751369856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1609357751633!5m2!1ses-419!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            
            

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!--Section: Content-->


</div>


<div class="container_boton">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
    <a href="https://www.facebook.com/caelclothing" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/caelclothing/" class="fab fa-instagram"></a>
        <a href="https://api.whatsapp.com/send?phone=51920310522&text=%20Saludos," class="fab fa-whatsapp"></a>
        <a href="tienda.php" class="fas fa-tshirt"></a>
    </div>
    <div class="btn-mas">
        
        <label for="btn-mas" class="icon-mas2"><i class="fas fa-plus"></i></label>
    </div>
</div> 
<!-- Footer -->
<footer class="page-footer font-small dark pt-4">
  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left ">
  
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-3 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold">Conocenos</h5>
      <div class="view">
            <img src="static/img/Cael.png" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask"></div>
            </a>
          </div>
          <br>
      <!-- <img src="static/img/Cael.png" width="300" height="100" class="d-inline-block align-top" alt="" loading="lazy">
        -->

    </div>
    <div class="col-md-1 mt-md-0 mt-3">
    </div>
    <!-- Grid column -->


    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold">Redes Sociales</h5>
      
        <ul class="list-unstyled">
            <li style="margin: 10px;">
              <a href="#!" style="font-size: 17px;"><i class="fab fa-facebook fa-lg white-text" style="margin: 7px;"></i>Siguenos en Facebook</a>
            </li>
            <li style="margin: 10px;">
              <a href="#!" style="font-size: 17px;"><i class="fab fa-instagram fa-lg white-text" style="margin: 7px;"></i>Siguenos en Instragram</a>
            </li>
            <li style="margin: 10px;">
              <a href="#!" style="font-size: 17px;"><i class="fab fa-whatsapp fa-lg" style="margin: 7px;"></i>Escribenos al Whatsapp</a>
            
            </li>
          
          </ul>

    </div>
    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold">Imformación Contactos</h5>
      
      <ul class="list-unstyled">
            <li style="margin: 10px;">
              <a href="#!" style="font-size: 17px;"><i class="fas fa-map-marker-alt mr-md-2 " style="margin: 7px;"></i>La romana, Republica de peru lima urb.la merced</a>
            </li>
            <li style="margin: 10px;">
              <a href="#!" style="font-size: 17px;"><i class="fas fa-phone-alt mr-md-2 " style="margin: 7px;"></i>920 310 522</a>
            </li>
            <li style="margin: 10px;">
              <a href="#!" style="font-size: 17px;"><i class="fas fa-envelope mr-md-2 " style="margin: 7px;"></i>caelinformacion@gmail.com</a>
            
            </li>
          
          </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  </div>
  <!-- Footer Text -->


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color: black;">
  © 2020 Todos los Derechos Reservados - <a href="https://www.appsitecinfo.com/">Appsitec</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <script src="static/js/toastr.min.js"></script>
</body>
<script>

    function enviarCorreo() {

        if($('#name').val() == ""){
            showMessage('warning', 'Nombres requeridos');
            return;
        }

        if($('#email').val() == ""){
            showMessage('warning', 'Correo requerido');
            return;
        }

        if(!validateEmail($('#email').val())){
            showMessage("warning", "El correo ingresado no es válido");         
            return;
        }

        if($('#subject').val() == ""){
            showMessage('warning', 'Asunto requerido');
            return;
        }

        if($('#message').val() == ""){
            showMessage('warning', 'Mensaje requerido');
            return;
        }

        $('#buyButton').prop('disabled', true);

        $.ajax({ 
            url: 'tiendaController.php',
            data: { 
                action: 'enviarEmailContacto',
                contacto_nombre:   $('#name').val(),
                contacto_email:    $('#email').val(),
                contacto_asunto:   $('#subject').val(),
                contacto_mensaje:  $('#message').val()
            },
            dataType: "json",
            type: 'POST',
            success: function(output) {
                //console.log(output);
                showMessage('success', 'Mensaje enviado correctamente');
                $('#buyButton').prop('disabled', false);
            },
            error: function(error) {
                //console.log(error);
                //showMessage('error', 'Mensaje requerido');
                showMessage('success', 'Mensaje enviado correctamente');
                $('#buyButton').prop('disabled', false);
            }
        });
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


</html>