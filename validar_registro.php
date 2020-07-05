<?php if(isset($_POST['submit']))://<!--isset revisara si existe 'submit'-->
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $total = $_POST['total_pedido'];
    $fecha =date('Y-m-d H:i:s');
    //Pedido
    $boletos = $_POST['boletos'];
    $camisas = $_POST['pedido_camisa'];
    $etiquetas = $_POST['pedido_etiqueta'];
    include_once 'includes/funciones/funciones.php';//LLAMAMOS EL ARCHIVO DONDE ESTA LA FUNCION PRODUCTOS_JSON.
    $pedido = productos_json($boletos, $camisas, $etiquetas);
    $eventos = $_POST['registro'];//Eventos
    $registro = eventos_json($eventos);
// >>>INSERTAMOS LOS DATOS A LA BASE DE DATOS UTILIZANDO --PREPARED STATEMENTS-- QUE ES UN METODO MAS EFICIENTE Y SEGURO PARA INSERTAR DATOS<<< 
//TRY CATCH: PARA AGARRAR EL ERROR Y QUE LA PAGINA SIGA FUNCIONANDO.
try {
    require_once('includes/funciones/bd_conexion.php');//ABRIMOS CONEXION DE LA BASE DE DATOS.
    $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);//usamos "ssssssis" para indicar que insertaremos "s" de string e "i" de int o enteros.
    $stmt->execute();
    $stmt->close();
    header('Location: validar_registro.php?exitoso=1');//PARA EVITAR LA REINSERCION DE DATOS EN LA BASE DE DATOS.
    $conn->close();
} catch (\Exception $e) {
    echo $e->getMessage();//Para tomar el Error.  
}
?>
<?php endif; ?>
<?php include_once 'includes/templates/header.php';?>
<section class="seccion contenedor">
     <h2>Resumen Registro</h2>

     <?php if(isset($_GET['exitoso'])):
        if($_GET['exitoso'] == "1"):
            echo "<h3>¡Registro exitoso!</h3>";  
        endif;
     endif; ?>

</section>

<?php include_once 'includes/templates/footer.php';?>