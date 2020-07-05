<?php
error_reporting(E_ALL ^ E_NOTICE); 
if(!isset($_POST['submit'])){
    exit("Hubo un error");
}

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

require 'includes/paypal.php';

if(isset($_POST['submit']))://<!--isset revisara si existe 'submit'-->
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $total = $_POST['total_pedido'];
    $fecha =date('Y-m-d H:i:s');
    //Pedido
    $boletos = $_POST['boletos'];
    $numero_boletos = $boletos;

    $pedidoExtra = $_POST['pedido_extra'];
    $camisas = $_POST['pedido_extra']['camisas']['cantidad'];
    $precioCamisa = $_POST['pedido_extra']['camisas']['precio'];
    $etiquetas = $_POST['pedido_extra']['etiquetas']['cantidad'];
    $precioEtiquetas = $_POST['pedido_extra']['etiquetas']['precio'];
    include_once 'includes/funciones/funciones.php';//LLAMAMOS EL ARCHIVO DONDE ESTA LA FUNCION PRODUCTOS_JSON.
    $pedido = productos_json($boletos, $camisas, $etiquetas);
    $eventos = $_POST['registro'];//Eventos
    $registro = eventos_json($eventos);

    /* // ------- PROBAR SIN INSERTAR A LA BASE SE AGREGA EXIT AL FINAL PARA QUE NO SE INSERTE NADA A LA BD
    echo "<pre>";
    var_dump($pedidoExtra);
    echo "</pre>";
    // exit;
    // endif; 
    */

    // >>>INSERTAMOS LOS DATOS A LA BASE DE DATOS UTILIZANDO --PREPARED STATEMENTS-- QUE ES UN METODO MAS EFICIENTE Y SEGURO PARA INSERTAR DATOS<<< 
    //TRY CATCH: PARA AGARRAR EL ERROR Y QUE LA PAGINA SIGA FUNCIONANDO.
    try {
        require_once('includes/funciones/bd_conexion.php');//ABRIMOS CONEXION DE LA BASE DE DATOS.
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);//usamos "ssssssis" para indicar que insertaremos "s" de string e "i" de int o enteros.
        $stmt->execute();
        $ID_registro = $stmt->insert_id;
        $stmt->close();
        // header('Location: validar_registro.php?exitoso=1');//PARA EVITAR LA REINSERCION DE DATOS EN LA BASE DE DATOS.
        $conn->close();
    } catch (\Exception $e) {
        echo $e->getMessage();//Para tomar el Error.  
    }
endif;


//Metodo de Pago
$compra = new Payer();
$compra->setPaymentMethod('paypal');
// echo $compra->getPaymentMethod();


//Articulo
$articulo = new Item();
$articulo->setName($producto)
         ->setCurrency('USD')
         ->setQuantity(1)
         ->setPrice($precio);
// echo $articulo->getPrice();

$i = 0;
$arreglo_pedido = array();
foreach($numero_boletos as $key => $value) {
    if( (int) $value['cantidad'] > 0) {
        //Crear cada articulo segun se vayan añadiendo
        ${"articulo$i"} = new Item();
        $arreglo_pedido[] = ${"articulo$i"};
        ${"articulo$i"}->setName('Pase: ' . $key)
                       ->setCurrency('USD')
                       ->setQuantity( (int) $value['cantidad'] )
                       ->setPrice( (int) $value['precio'] );
        $i++;
    }
}
// echo $articulo0->getQuantity();//Probar si se estan creando correctamente los articulos

foreach($pedidoExtra as $key => $value) {
    if( (int) $value['cantidad'] > 0) {
        if($key == 'camisas'){
            $precio = (float) $value['precio'] * .93;
        }else {
            $precio = (int) $value['precio'];
        }
        ${"articulo$i"} = new Item();
        $arreglo_pedido[] = ${"articulo$i"};
        ${"articulo$i"}->setName('Extras: ' . $key)
                       ->setCurrency('USD')
                       ->setQuantity( (int) $value['cantidad'] )
                       ->setPrice( $precio );
        $i++;
    }
}
// echo $articulo2->getName();

//Lista de Articulos comprados
$listaArticulos = new ItemList();
$listaArticulos->setItems($arreglo_pedido);
// echo "<pre>";
// var_dump($listaArticulos);
// echo "</pre>";



//Cantidad
$cantidad = new Amount();
$cantidad->setCurrency('USD')
         ->setTotal($total);
// echo $total;


//Transaccion
$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
            ->setItemList($listaArticulos)
            ->setDescription('Pago GDLWEBCAMP')
            ->setInvoiceNumber($ID_registro);
// echo $transaccion->getInvoiceNumber();


//Redireccionar
$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago-finalizado.php?&id_pago={$ID_registro}")
              ->setCancelUrl(URL_SITIO . "/pago-finalizado.php?&id_pago={$ID_registro}");
// echo $redireccionar->getReturnUrl();



//Procesar el PAGO
$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));

try {
    $pago->create($apiContext);
} catch (Paypal\Exception\PaypalConnectionException $pce) {
    echo "<pre>";
    print_r(json_decode($pce->getData()));
    exit;
    echo "</pre>";
}

$aprobado = $pago->getApprovalLink();

header("Location: {$aprobado}");
