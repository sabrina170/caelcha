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
    <link  rel="icon"   href="static/img/logoweb/fenix.png" type="image/png"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="md/css/mdb.min.css" />
    <meta name="author" content="Syahrizaldev"><link rel="stylesheet" href="nav/style.css">

  </head>
  <style>
  body {
    background-image: url(static/img/fondo1.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>

  <body>

    <!-- Navbar-->
<header class="header">
	<nav class="navbar">
		<div class="burger active" id="burger">
			<span class="burger-open ">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
					<g fill="#252a32" fill-rule="evenodd">
						<path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z" />
					</g>
				</svg>
			</span>
			<span class="burger-close">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
					<path fill="#252a32" fill-rule="evenodd" d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z" />
				</svg>
			</span>
		</div>
		<ul class="menu active" id="menu">
    <img src="static/img/Cael1.png" height="60px">
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



	</nav>
</header>



<main class="main">
	<div class="container">
		<div class="wrapper">
          <div class="d-flex justify-content-end align-items-end">
        <a class="btn btn-primary btn-rounded" href="tienda.php" 
        style="background-color: #20405e ;opacity: 0.9;
        font-family: Audrey;
        font-size:15px;
        margin:40px;
        " href="#!" role="button"
        >TIENDA</a>
      </div>
    </div>
	</div>
</main>

<div class="footer-copyright text-center py-3">
  © 2021, Cael - Todos los Derechos Reservados. 
   </div>

<script  src="nav/script.js"></script>
    <script type="text/javascript" src="md/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
