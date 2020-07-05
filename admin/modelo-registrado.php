<?php
    error_reporting(E_ALL ^ E_NOTICE);
    include_once 'funciones/funciones.php';

//ELIMINAR REGISTRO
if($_POST['registro'] == 'eliminar'){

    $id_borrar = $_POST['id'];

    try {
        $stmt = $conn->prepare("DELETE FROM registrados WHERE ID_Registrado = ?");
        $stmt->bind_param("i", $id_borrar);        
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar 
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));

}


    //DATOS GENERALES
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    //BOLETOS
    $boletos_adquiridos = $_POST['boletos'];

    //CAMISAS Y ETIQUETAS
    $camisas = $_POST['pedido_extra']['camisas']['cantidad'];
    $etiquetas = $_POST['pedido_extra']['etiquetas']['cantidad'];

    $pedido = productos_json($boletos_adquiridos, $camisas, $etiquetas);

    $eventos = $_POST['registro_evento'];
    $registro_eventos = eventos_json($eventos);

    $regalo = $_POST['regalo'];
    $total = $_POST['total_pedido'];

    $fecha_registro = $_POST['fecha_registro'];
    $id_registro = $_POST['id_registro'];

//CREAR UNA REGISTRO
if($_POST['registro'] == 'nuevo'){
    /*
        $respuesta = array(
            'boletos' => $pedido
        );
        die(json_encode($_POST));
    */  

    try {
        $stmt = $conn->prepare('INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado, pagado) VALUES (?,?,?,NOW(),?,?,?,?,1)');
        $stmt->bind_param('sssssis', $nombre, $apellido, $email, $pedido, $registro_eventos, $regalo, $total);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_insertado' => $id_insertado
            );
        } else {
            $respuesta = array(
                'respuesta' => 'Error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    

    die(json_encode($respuesta));

}

//EDITAR REGISTRO
if($_POST['registro'] == 'actualizar'){

    try {
        $stmt = $conn->prepare("UPDATE registrados SET nombre_registrado = ?, apellido_registrado = ?, email_registrado = ?, fecha_registro = ?, pases_articulos = ?, talleres_registrados = ?, regalo = ?, total_pagado = ?, pagado = 1 WHERE ID_Registrado = ?");
        $stmt->bind_param("ssssssisi", $nombre, $apellido, $email, $fecha_registro, $pedido, $registro_eventos, $regalo, $total, $id_registro);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_actualizado' => $id_registro
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));

}

