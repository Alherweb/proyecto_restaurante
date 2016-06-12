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
                    <h1 class="page-header">Modificar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modificar o Eliminar un producto
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Categoria</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $resultado=mysql_query("select * from productos");
                                            while($row=mysql_fetch_array($resultado)){
                                                    echo '
                                                    <tr>
                                                            <td>
                                                                    <input type="hidden" value="'.$row[0].'">'.$row[0].'
                                                                    <input type="hidden" class="imagen" value="'.$row[3].'">
                                                            </td>
                                                            <td><input type="text" class="nombre" value="'.$row[1].'"></td>
                                                            <td><input type="text" class="descripcion" value="'.$row[2].'"></td>
                                                            <td><input type="text" class="precio" value="'.$row[4].'"></td>
                                                            <td><input type="text" class="categoria" value="'.$row[5].'"></td>
                                                            <td><button class="eliminar" data-id="'.$row[0].'">Eliminar</button></td>
                                                            <td><button class="modificar" data-id="'.$row[0].'">Modificar</button></td>
                                                    </tr>
                                                    ';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
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
