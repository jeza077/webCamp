<?php 
      //TRY CATCH: PARA AGARRAR EL ERROR Y QUE LA PAGINA SIGA FUNCIONANDO.
        try {
            require_once('includes/funciones/bd_conexion.php');//ABRIMOS CONEXION DE LA BASE DE DATOS.
            $sql = " SELECT * FROM invitados ";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();//Para tomar el Error.  
        }
      
      ?> 
    
      <section class="invitados contenedor seccion">
          <h2>Invitados</h2>
          <ul class="lista-invitados clearfix"> 
          <!--DAR RESULTADOS DE LA BASE DE DATOS.-->
              <?php while( $invitados = $resultado->fetch_assoc()) { ?>
                  <li>
                    <div class="invitado">
                      <a class="invitado_info" href="#invitado<?php echo $invitados['invitado_id'];?>">
                          <img src="img/invitados/<?php echo $invitados['url_imagen'];?>" alt="imagen invitado">
                          <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'];?></p>
                      </a>
                    </div>
                  </li>     
                  <div style="display:none;">
                       <div class="invitado_info" id="invitado<?php echo $invitados['invitado_id'];?>">
                            <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'];?></h2>
                            <img src="img/invitados/<?php echo $invitados['url_imagen'];?>" alt="imagen invitado">
                            <p><?php echo $invitados['descripcion'];?></p>
                       </div> 
                  </div>   
              <?php } ?>
              
            </ul>
      </section>      

      <?php 
        $conn->close();//CERRAMOS CONEXION DE LA BASE DE DATOS.
      ?>   