<?php 

  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  $id = $_GET['id'];

  if(!filter_var($id, FILTER_VALIDATE_INT)){
      die("Error!");
  }

  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Administrador
        <small>llena el formulario para editar un administrador</small>
      </h1>
    </section>

    <div class="row">
        <div class="col-md-8">
            <!-- Main content -->
            <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Administrador</h3>
                </div>
                <div class="box-body">
                    <?php
                        $sql = "SELECT * FROM `admins` WHERE `id_admin` = $id";
                        $resultado = $conn->query($sql);
                        $admin = $resultado->fetch_assoc();


                    ?>
                    <form class="form-horizontal" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="usuario" class="col-sm-2 control-label">Usuario:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese Usuario" value="<?php echo $admin['usuario']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre" value="<?php echo $admin['nombre']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese Password">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="hidden" name="registro" value="actualizar">
                        <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-info pull-right">Guardar</button>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
    </div>

  </div>
  <!-- /.content-wrapper -->

  <?php 

    include_once 'templates/footer.php';

  ?>
 
