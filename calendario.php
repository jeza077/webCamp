<?php include_once 'includes/templates/header.php';?>

  <section class="seccion contenedor clearfix">
      <h2>Calendario de Eventos</h2>

      <?php 
      //TRY CATCH: PARA AGARRAR EL ERROR Y QUE LA PAGINA SIGA FUNCIONANDO.
        try {
            require_once('includes/funciones/bd_conexion.php');//ABRIMOS CONEXION DE LA BASE DE DATOS.
            $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";//CONSULTA A LA BASE DE DATOS.
            $sql .= " FROM eventos ";
            $sql .= " INNER JOIN categoria_evento ";
            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= " INNER JOIN invitados ";
            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
            $sql .= " ORDER BY evento_id "; 
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();//Para tomar el Error.  
        }
      
      ?> 
    
      <div class="calendario">
        <?php //DAR RESULTADOS DE LA BASE DE DATOS.
          $calendario = array(); 
          while( $eventos = $resultado->fetch_assoc()) {
            
            //Obtener la Fecha del evento para luego agrupar los eventos por Fechas.
            $fecha = $eventos['fecha_evento'];

            
            $evento = array(
              'titulo' => $eventos['nombre_evento'],
              'fecha' => $eventos['fecha_evento'],
              'hora' => $eventos['hora_evento'],
              'categoria' => $eventos['cat_evento'],
              'icono' => $eventos['icono'],
              'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
            );
            
            $calendario[$fecha][] = $evento;//Obtener los eventos por fecha.

        ?>
          <?php  } //While de fetch_assoc ?> 

          
          <?php 
            //Imprime todos los Eventos por fecha.
            foreach($calendario as $dia => $lista_eventos) { ?>
                <h3>
                    <i class="fas fa-calendar-alt"></i><!--Codigo de Font-Awesome para llamr el Icono de Calendario-->
                    <?php 
                        //UNIX(mac y linux)
                        setlocale(LC_TIME, 'es.ES.UTF-8');
                        //WINDOWS
                        setlocale(LC_TIME, 'spanish');        
                        
                        echo ucfirst(utf8_encode(strftime("%A, %d de %B del %Y", strtotime($dia) ))) ; #utf8_encode: para  los caracteres especiales. #ucfirts: convierte en Mayuscula la primer letra de la primer palabra ?>
                </h3>

            <!--Imprime el Contenido de los Eventos-->
                <?php foreach($lista_eventos as $evento) { ?>
                    <div class="dia">
                      <p class="titulo"><?php echo utf8_decode($evento['titulo']); ?></p>
                      <p class="hora">
                          <i class="fas fa-clock" aria-hidden="true"></i>
                          <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                      </p> 
                      <p>
                          <i class="fas <?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                          <?php echo $evento['categoria']; ?>
                      </p>
                      <p>
                          <i class="fas fa-user" aria-hidden="true"></i>
                          <?php echo $evento['invitado']; ?>
                      </p>

                
                    </div>

                <?php } // fin foreach de eventos ?>
           <?php } // fin foreach de dias ?>

      </div><!--.calendario-->

      <?php 
        $conn->close();//CERRAMOS CONEXION DE LA BASE DE DATOS.
      ?>   
        
  </section>
 
<?php include_once 'includes/templates/footer.php';?>