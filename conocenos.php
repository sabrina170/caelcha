<?php
include 'Global/correo.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <link rel="icon" href="static/img/logoweb/fenix.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="md/css/mdb.min.css" />
  <meta name="author" content="Syahrizaldev">
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

  <!-- Navbar-->
  <header class="header">
    <nav class="navbar">
      <div class="burger" id="burger">
        <span class="burger-open ">
          <i class="fas fa-bars fa-2x" style="color: white;"></i>
        </span>
        <span class="burger-close" style="background-color: white;">
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



  <br><br><br><br><br>
  <div class="container">
    <section class="dark-grey-text ">
      <div class="d-flex justify-content-center md-4">
        <img src="static/img/Cael.png" height="150px">
      </div>
      <br><br><br><br>
      <div class="row pr-lg-16 mb-4">
        <div class="col-md-6 mb-4">


          <h2 class=" mb-4" style="color: white; font-family: Audrey;
          letter-spacing: 0.25em;">QUIENES SOMOS</h2>

          <p style="color: white;font-family: Audrey; font-size: 20px;">Somos una marca peruana especializada
            en camisas a medida con los más altos estándares de
            calidad en el mercado latinoamericano.</p>
          <p style="color: white;font-family: Audrey; font-size: 20px;">
            Somos una marca especializada en ropa a medida con los más
            altos estándares de calidad en el mercado peruano.</p>
        </div>
        <div class="col-md-6 mb-4">
          <h2 class=" mb-4" style="color: white; font-family: Audrey;
          letter-spacing: 0.25em;">FIT GARANTIZADO</h2>

          <p style="color: white;font-family: Audrey; font-size: 20px;">
            En Cael nos preocupamos por la calidad de todos nuestros productos,
            por lo que aseguramos el fit de nuestras prendas para todos nuestros clientes.</p>
          <p style="color: white;font-family: Audrey; font-size: 20px;">
            En caso no te sientas satisfecho puedes devolver el articulo
            para modificarlo y ajustarlo a tu cuerpo sin cargo adicional..
          </p>

        </div>
      </div>

    </section>
  </div>

  <div class="footer-copyright text-center py-3" style="color: white; font-family: Audrey;">
    © 2021, Cael - Todos los Derechos Reservados.
  </div>

  <script src="nav/script.js"></script>
  <script type="text/javascript" src="md/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>