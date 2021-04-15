<?php
    define("KEY","develoteca");
    define("COD","AES-128-ECB");

    if(isset($_POST['action']) && !empty($_POST['action'])) {
        $action = $_POST['action'];
        switch($action) {
            case 'detallesProducto' : detallesProducto(); break;
            case 'enviarEmail' : enviarEmail(); break;
            case 'enviarEmailContacto': enviarEmailContacto(); break;
            // ...
        }
    }

    function detallesProducto() {
        try {
            $connection = new PDO('mysql:host=localhost;dbname=caelclot_cael', 'caelclot_root', 'Appsitec123', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch(PDOException $e) {
            print "¡Error!: <br/>";
            return null;
        }
  
        $sql = $connection->prepare("SELECT * FROM tblproductos WHERE ID = ?");
        $type_id = $_POST['id_producto'];
        $sql->bindParam(1, $type_id);
        $sql->execute();
        $connection = null;
        $producto = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        echo json_encode($producto[0]);
    }


    function enviarEmail() {

        date_default_timezone_set('America/Lima');
        $fecha_fecha_actual = date("m").'/'.date("d").'/'.date("Y")."-".date("H:i:s");

        $contorno_pecho_array  = $_POST['contorno_pecho_array'];
        $cintura_array         = $_POST['cintura_array'];
        $anchura_hombros_array = $_POST['anchura_hombros_array'];
        $longitud_manga_array  = $_POST['longitud_manga_array'];
        $cuello_array          = $_POST['cuello_array'];
        $talle_delantero_array = $_POST['talle_delantero_array'];

        $talla_general_array   = $_POST['talla_general_array'];

        $producto_nombre_general_array   = $_POST['producto_nombre_general_array'];
        $producto_precio_general_array   = $_POST['producto_precio_general_array'];
        $producto_cantidad_general_array = $_POST['producto_cantidad_general_array'];

        $to = 'caelclot@caelclothing.com';
        $subject = 'CAEL - Compra completada - '.$fecha_fecha_actual;
        $from = 'caelclot@caelclothing.com';
 
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0'. "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
                    'Reply-To: '.$from."\r\n" .
                    'X-Mailer: PHP/' . phpversion();
 
        // Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h2 style="color:#000000;">CAEL - Compra completada</h2>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Cliente: </strong>'.$_POST['cliente'].'</p>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>DNI: </strong>'.$_POST['dni'].'</p>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Correo: </strong>'.$_POST['correo'].'</p>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Teléfono: </strong>'.$_POST['telefono'].'</p>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Dirección: </strong>'.$_POST['direccion'].'</p>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Monto total pagado: </strong>S/ '.$_POST['monto_pagado'].'</p>';

        $message .= '<hr/>';

        $message .= '<h2 style="color:#2C3E50;">Detalles de la compra</h2>';
        
        foreach( $producto_nombre_general_array as $key => $nombre ) {
            //print "The name is ".$n.", email is ".$email[$key].", and location is ".$location[$key].". Thank you\n";
            $message .= '<h3 style="color:#2C3E50;">Producto: '.$nombre.'</h4>';
            $message .= '<h4 style="color:#2C3E50;">Precio: '.$producto_precio_general_array[$key].'</h4>';
            $message .= '<h4 style="color:#2C3E50;">Cantidad : '.$producto_cantidad_general_array[$key].'</h4>';

            $message .= '<h4 style="color:#2C3E50;">Talla : '.$talla_general_array[$key].'</h4>';

            $message .= '<p style="color:#2E4053; font-size:12px;"><strong>Contorno pecho: </strong>'.$contorno_pecho_array[$key].' cm</p>';
            $message .= '<p style="color:#2E4053; font-size:12px;"><strong>Cintura: </strong>'.$cintura_array[$key].' cm</p>';
            $message .= '<p style="color:#2E4053; font-size:12px;"><strong>Anchura hombros: </strong>'.$anchura_hombros_array[$key].' cm</p>';
            $message .= '<p style="color:#2E4053; font-size:12px;"><strong>Longitud manga: </strong>'.$longitud_manga_array[$key].' cm</p>';
            $message .= '<p style="color:#2E4053; font-size:12px;"><strong>Cuello: </strong>'.$cuello_array[$key].' cm</p>';
            $message .= '<p style="color:#2E4053; font-size:12px;"><strong>Talle delantero: </strong>'.$talle_delantero_array[$key].' cm</p>';
            $message .= '<br/>';
        }

        $message .= '</body></html>';
 
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            header("HTTP/1.1 200 OK");
            echo 'Your mail has been sent successfully.';
        } else{
            header("HTTP/1.1 500 ERROR");
            echo 'Unable to send email. Please try again.';
        }
       
    }


    function enviarEmailContacto() {

        date_default_timezone_set('America/Lima');
        $fecha_fecha_actual = date("m").'/'.date("d").'/'.date("Y")."-".date("H:i:s");

        $contacto_nombre    = $_POST['contacto_nombre'];
        $contacto_email     = $_POST['contacto_email'];
        $contacto_asunto    = $_POST['contacto_asunto'];
        $contacto_mensaje   = $_POST['contacto_mensaje'];

        $to = 'caelclot@caelclothing.com';
        $subject = 'CAEL - Contacto - '.$fecha_fecha_actual;
        $from = 'caelclot@caelclothing.com';
 
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0'. "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
                    'Reply-To: '.$from."\r\n" .
                    'X-Mailer: PHP/' . phpversion();
 
        // Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h2 style="color:#000000;">CAEL - Contacto</h2>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Cliente: </strong>'.$contacto_nombre.'</p>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Correo: </strong>'.$contacto_email.'</p>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Asunto: </strong>'.$contacto_asunto.'</p>';
        $message .= '<p style="color:#2E4053; font-size:18px;"><strong>Mensaje: </strong>'.$contacto_mensaje.'</p>';
        $message .= '<hr/>';

        $message .= '</body></html>';
 
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            //header("HTTP/1.1 200 OK");
            http_response_code(200);
            echo 'Your mail has been sent successfully.';
        } else{
            //header("HTTP/1.1 500 ERROR");
            http_response_code(500);
            echo 'Unable to send email. Please try again.';
        }
       
    }


?>