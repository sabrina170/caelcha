<?php
    if(isset($_POST['submit'])){
        if( $_POST['usuario'] ){
            $user = $_POST['usuario'];
        }
        if($_POST['pass']){
            $pass = $_POST['pass'];
        }
        if($_POST['rdo']){
            $rdo = $_POST['rdo'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <p>Usuario: <input type="text" name="usuario" id="usuario"></p>

    <p>Contraseña: <input type="password" name="pass" id="pass"></p>

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
    </div>

    <p><input type="submit" name="submit" value="Enviar datos"></p>

    </form>
    <?php
        if( $_POST['usuario'] ){
            echo $user;
        }
        if($_POST['pass']){
            echo $pass;
        }
        if($_POST['rdo']){
            echo $rdo;
        }
    ?>
    
</body>
</html>