
<?php
    
    $mensaje = "";

    if (isset($_POST['btnAccion'])) {

        switch ($_POST['btnAccion']) {
            case 'Agregar':
                if (is_numeric($_POST['id'])) {
                    $ID = $_POST['id'];
                } else {
                    $mensaje.="ID incorrecto"."</br>";
                    break;
                }

                if (is_string($_POST['nombre'])) {
                    $NOMBRE=$_POST['nombre'];
                } else {
                    $mensaje.="Nombre incorrecto"."</br>";
                    break;
                }

                if (is_numeric($_POST['cantidad'])) {
                    $CANTIDAD=$_POST['cantidad'];
                } else {
                    $mensaje.="Cantidad incorrecta"."</br>"; 
                    break;
                }

                if (is_numeric($_POST['precio'])) {
                    $PRECIO=$_POST['precio'];
                } else {
                    $mensaje.="Precio incorrecto"."</br>"; 
                    break;
                }
              
                if (!isset($_SESSION['CARRITO'])) {

                    $producto = array(
                        'ID'       => $ID,
                        'NOMBRE'   => $NOMBRE,
                        'CANTIDAD' => $CANTIDAD,
                        'PRECIO'   => $PRECIO,
                        'contorno_pecho'  => $_POST['contorno_pecho'],
                        'cintura'         => $_POST['cintura'],
                        'anchura_hombros' => $_POST['anchura_hombros'],
                        'longitud_manga'  => $_POST['longitud_manga'],
                        'cuello'          => $_POST['cuello'],
                        'talle_delantero' => $_POST['talle_delantero'],
                        'talla_general'   => $_POST['talla_general']
                    );
                    $_SESSION['CARRITO'][0] = $producto;
                    $mensaje = "Producto agregado al carrito";
                    break;

                } else {

                    $idProductos = array_column($_SESSION['CARRITO'], "ID");

                    if (in_array($ID,$idProductos)) {
                        echo '
                            <br/>
                            <br/>
                            <br/>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Upss!</strong> El producto ya ha sido agregado al carrito
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> ';
                        break;

                    } else {

                        $NumeroProductos = count($_SESSION['CARRITO']);
                        $producto = array(
                            'ID'        => $ID,
                            'NOMBRE'    => $NOMBRE,
                            'CANTIDAD'  => $CANTIDAD,
                            'PRECIO'    => $PRECIO,
                            'contorno_pecho' => $_POST['contorno_pecho'],
                            'cintura'        => $_POST['cintura'],
                            'anchura_hombros'=> $_POST['anchura_hombros'],
                            'longitud_manga' => $_POST['longitud_manga'],
                            'cuello'         => $_POST['cuello'],
                            'talle_delantero'=> $_POST['talle_delantero'],
                            'talla_general'  => $_POST['talla_general']
                        );
                        $_SESSION['CARRITO'][$NumeroProductos] = $producto;
                        $mensaje = "Producto agregado al carrito";
                        break;

                    }
            }
            //$mensaje=print_r($_SESSION,true);
           

            break;
            case 'Eliminar':
                if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
                    $ID=openssl_decrypt($_POST['id'],COD,KEY);
                    // $mensaje.="oK id correcto ".$ID."</br>";
                    foreach($_SESSION['CARRITO'] as $indice=>$producto)
                    {
                        if ($producto['ID']==$ID) {
                           unset($_SESSION['CARRITO'][$indice]);
                        }
                    }
                } else {$mensaje.="Upss.........id incorrecto"."</br>";
                }
                break;
    
        }
    }
    
?> 