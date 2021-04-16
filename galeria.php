<?php
  include 'Global/correo.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cael Web</title>
    <link rel="stylesheet" href="static/css/estilo.css">
    <link  rel="icon"   href="static/img/logoweb/fenix.png" type="image/png"/>
<!-- MDB -->
<link rel="stylesheet" href="md/css/mdb.min.css" />
    <meta name="author" content="Syahrizaldev"><link rel="stylesheet" href="nav/style.css">

</head>
<body>
 
<header class="header">
    <nav class="navbar" style="background-color: white;">
      <div class="burger" id="burger">
        <span class="burger-open ">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
            <g fill="#252a32" fill-rule="evenodd">
              <path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z" />
            </g>
          </svg>
        </span>
        <span class="burger-close" >
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
            <path fill="#252a32" fill-rule="evenodd" d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z" />
          </svg>
        </span>
      </div>
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
    <img src="static/img/Cael1.png" height="60px">

    <br><br>
	</nav>
</header>
<br><br><br>
<br><br>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="column">
            <img src="static/galeria/9.png"/>
            <img src="static/galeria/2.png" />
            <img src="static/galeria/3.png">
          </div>
          <div class="column">
            <img src="static/galeria/4.png">
            <img src="static/galeria/8.png">
            <img src="static/galeria/6.png">
          </div>
          <div class="column">
            <img src="static/galeria/1.png">
            <img src="static/galeria/5.png">
            <img src="static/galeria/7.png">
          </div>
  
        </div>
      </div>

    </section>

    
    <div class="footer-copyright text-center py-3">
  © 2021, Cael - Todos los Derechos Reservados. 
   </div>
  <script type="text/javascript" src="md/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script  src="nav/script.js"></script>
</body>
</html>