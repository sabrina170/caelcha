<?php
  if(isset($_POST['email'])){
    $email_to = 'luis.diaz.tr@tecsup.edu.pe';
    if(!isset($_POST['nombre']) ||
    !isset($_POST['email']) || 
    !isset($_POST['asunto']) || 
    !isset($_POST['mensaje'])){
      echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
      echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
      die();
    }
    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message.= "Nombre: ".$_POST['nombre']."\n";
    $email_message.= "Comentarios: ".$_POST['mensaje']."\n\n";

    $email_from = $_POST['email'];
    $email_subject = $_POST['asunto'];
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
  }
?>