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
                    <h1 class="page-header">Pedidos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- /.panel -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php
                                $numeroventa=1;
                                $re=mysql_query("select * from compras where numeroventa=$numeroventa");
                                while ($f=mysql_fetch_array($re)) {
                                
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $f['numeroventa']?>" aria-expanded="false" aria-controls="collapseOne">
					Compra Número: <?php echo $f['numeroventa']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="<?php echo $f['numeroventa']?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Imagen</th>
                                                    <th>Nombre</th>
                                                    <th>Precio</th>
                                                    <th>Cantidad</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $re1=mysql_query("select * from compras where numeroventa=$numeroventa");
                                                    while ($f1=mysql_fetch_array($re1)) {
                                                    echo '<tr class="odd gradeX">
                                                        <td><img src="../img/carta/productos/'.$f1['imagen'].'" width="100px" heigth="100px" /></td>
                                                        <td>'.$f1['nombre'].'</td>
                                                        <td>'.$f1['precio'].'</td>
                                                        <td class="center">'.$f1['cantidad'].'</td>
                                                        <td class="center">'.$f1['subtotal'].'</td>
                                                    </tr>';
                                                        }   
                                                        $numeroventa++;
                                                        $re=mysql_query("select * from compras where numeroventa=$numeroventa");
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                             
                        } 
                    ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<?php
    include 'includes/footer.php';
?>