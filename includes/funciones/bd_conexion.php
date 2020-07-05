<?php 
    //CONECTAMOS PHP CON LA BASE DE DATOS.
    $conn = new mysqli('localhost', 'root', '', 'gdlwebcamp');

    if($conn->connect_error) {
        echo $error -> $conn->connect_error; 
    }

    // PARA QUE SE LEAN BIEN LOS CARACTERES ESPECIALES. 
    if(!mysqli_set_charset($conn, 'utf8')) {
        printf('Error cargando los caracteres', mysqli_error($conn)); 
        exit(); 
    }
?>

