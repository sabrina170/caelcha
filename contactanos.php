<?php
include 'Global/correo.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cael Web</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="static/css/estilo.css">
  <link rel="stylesheet" href="static/css/toastr.min.css">
  <link rel="stylesheet" href="md/css/mdb.min.css" />
  <link rel="icon" href="static/img/logoweb/fenix.png" type="image/png" />
  <link rel="stylesheet" href="nav/style.css">
</head>
<style>
  body {
    background-image: linear-gradient(rgba(6, 63, 109, 0.8),
        rgba(6, 63, 109, 0.8)), url(static/img/fondo1.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    opacity: red;
  }
</style>

<body>

  <header class="header">
    <nav class="navbar">
      <div class="burger" id="burger">
        <span class="burger-open">
          <i class="fas fa-bars fa-2x" style="color: white;"></i>
        </span>
        <span class="burger-close">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="background-color: white;">
            <path fill="#252a32" fill-rule="evenodd" d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z" />
          </svg>
        </span>
      </div>
      <ul class="menu" id="menu">
        <a href="index.php"><img src="static/img/Cael1.png" height="60px"></a>
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
      <!-- <img src="static/img/Cael1.png" height="60px"> -->
      <br><br>
    </nav>
  </header>

  <br><br><br><br>
  <div class="container">

    <!--Section: Content-->
    <section class="dark-grey-text mb-5">

      <!-- Section heading -->
      <h2 style="font-family: Audrey; color: white;letter-spacing: 0.25em;">CONTÁCTANOS</h2>
      <br>

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-6">

          <div class="row text-center d-flex justify-content-center">

            <!--Section: Content-->


            <div class="card">
              <div class="card-body rounded-top border-top" style="font-family: Audrey;">


                <!--Section: Content-->
                <form class="" action="">

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
                        <button type="button" id='buyButton' class="btn btn-md" style="background-color:  #3a77a5;color: white; font-family: Audrey; font-size: 15px;" onclick="enviarCorreo()">Enviar</button>
                      </div>

                    </div>
                  </div>

                </form>

              </div>
            </div>


            <!--Section: Content-->

          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-5">

          <div class="row text-center d-flex justify-content-center" style="font-family: Audrey;">
            <img src="static/img/Cael.png" alt="" width="80%" style="margin: 40px;">

            <div class="col-lg-4 col-md-6" style="border-right: 2px solid grey !important; color: white;">
              <i class="fas fa-phone fa-2x mb-2 white-text"></i>
              <p><strong>TELÉFONO</strong></p>
              <p class="font-weight-normal">+51 920 310 522</p>
            </div>
            <div class="col-lg-4 col-md-6" style="color: white;">
              <i class="fas fa-envelope fa-2x mb-2 white-text"></i>
              <p><strong>EMAIL</strong></p>
              <p class="font-weight-normal">caelinformacion@gmail.com</p>
            </div>

          </div>



        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!--Section: Content-->


  </div>
  <div class="footer-copyright text-center py-3" style="color: white; font-family: Audrey;">
    © 2021, Cael - Todos los Derechos Reservados.
  </div>
  <script src="nav/script.js"></script>
  <script type="text/javascript" src="md/js/mdb.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <script src="static/js/toastr.min.js"></script>
</body>
<script>
  function enviarCorreo() {

    if ($('#name').val() == "") {
      showMessage('warning', 'Nombres requeridos');
      return;
    }

    if ($('#email').val() == "") {
      showMessage('warning', 'Correo requerido');
      return;
    }

    if (!validateEmail($('#email').val())) {
      showMessage("warning", "El correo ingresado no es válido");
      return;
    }

    if ($('#subject').val() == "") {
      showMessage('warning', 'Asunto requerido');
      return;
    }

    if ($('#message').val() == "") {
      showMessage('warning', 'Mensaje requerido');
      return;
    }

    $('#buyButton').prop('disabled', true);

    $.ajax({
      url: 'tiendaController.php',
      data: {
        action: 'enviarEmailContacto',
        contacto_nombre: $('#name').val(),
        contacto_email: $('#email').val(),
        contacto_asunto: $('#subject').val(),
        contacto_mensaje: $('#message').val()
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