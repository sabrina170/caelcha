<?php
  $talla = $_POST['rdotalla'];  
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
        <div class="row justify-content-center" style="margin-top:200px; margin-bottom:200px;">
            <div class="col-8" style="border:2px solid gray">
                <div class="row">
                    <div class="col-6" style="margin-top:70px;">
                        <div class="text-center">
                          <label>Personaliza tu camisa</label>
                        </div>
                        <div class="text-center">
                            <img id="imgcamisa" style="margin-left:20px;margin-top:80px" width="500px" src="static/img/tallas/tallapecho110cin101hom47man70cue42delan76.png">
                        </div>
                        <div class="text-center" style="padding:30px;">
                          <small>las medidas en la imagen son las standares para la talla "<?php echo $talla ?>"</small>
                        </div>
                    </div>
                    <div class="col-5" style="margin-top:50px;margin-bottom:50px;">                   
                      <div class="form-group ">
                        <?php 
                          if ($talla) {
                            if( $talla == 'S' ){ 
                              ?>
                              <button id="tallas" onclick="cambioimgS()" class="btn" href="" style="margin-right:50px;">S</button>
                              <?php
                            }elseif( $talla == 'M'){ 
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
                          if ($talla) {
                            if( $talla == 'S' ){ 
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
                                }elseif( $talla == 'M'){
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
                for(i=40;i<=42;i++){
                  if(x == i){
                    document.getElementById("imgcamisa").src = "static/img/tallaLcuello"+i+".png";
                  }
                }
            }

            output6.innerHTML = slider6.value;
            slider6.oninput = function() {
                output6.innerHTML = this.value;
                var x = this.value;
                var i;
                for(i=74;i<=76;i++){
                  if(x == i){
                    document.getElementById("imgcamisa").src = "static/img/tallaLdelantero"+i+".png";
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
            if($talla){
              if($talla == 'S'){
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
              }elseif($talla == 'M'){
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