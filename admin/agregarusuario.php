<?php
    session_start();
            include "../conexion.php";
            if(isset($_SESSION['Usuario'])){

            }else{
                    header("Location: ./index.php?Error=Acceso denegado");
            }
    include 'includes/header.php';
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agregar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nuevo Usuario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="altausuario.php" method ="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" type="text" name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido</label>
                                            <input class="form-control" type="text" name="apellido">
                                        </div>
                                        <div class="form-group">
                                            <label>Usuario</label>
                                            <input class="form-control" type="text" name="usuario">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input class="form-control" type="text" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input type="file" name="file">
                                        </div>
                                        <button type="submit" class="btn btn-default aceptar" name="accion" value="Enviar">Aceptar</button>
                                        <button type="reset" class="btn btn-default">Borrar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row-->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

        <?php
    include 'includes/footer.php';
?>
