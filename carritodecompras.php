<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysql_query("select * from productos where id=".$_GET['id']);
						while ($f=mysql_fetch_array($re)) {
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}




	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from productos where id=".$_GET['id']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
        
        include 'includes/header.php';
?>

    <!-- Header -->
    <header class="carrito">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Carrito</div>
            </div>
        </div>
    </header>
    
    
<section id="carrito" class="">
    <div class="container">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subotal</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody class="producto">
                        
                        <?php
                            $total=0;
                            if(isset($_SESSION['carrito'])){
                            $datos=$_SESSION['carrito'];

                            $total=0;
                            for($i=0;$i<count($datos);$i++){
                        ?>
                        
                        <tr>
                            <td><img src="img/carta/productos/<?php echo $datos[$i]['Imagen'];?>"></td>
                            <td><?php echo $datos[$i]['Nombre'];?></td>
                            <td><?php echo $datos[$i]['Precio'];?> €</td>
                            <td><input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
                                        data-precio="<?php echo $datos[$i]['Precio'];?>"
							data-id="<?php echo $datos[$i]['Id'];?>"
							class="cantidad">
                            </td>
                            <td><div class="subtotal"><?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?> €</div></td>
                            <td><a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a></td>
                        </tr>
                        
                        <?php
                            $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
                            }

                            }else{
                                    echo '<center><h2>No has añadido ningun producto</h2></center>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="col-lg-4 col-lg-offset-8">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <tbody>
                        <tr>
                            <th>Total</th>
                            <th id="total"><?php echo $total ;?> €</th>
                        </tr>
                    </tbody>
                </table>
                <?php
                if($total!=0){
					//echo '<a href="compras/compras.php" class="btn btn-xl">Comprar</a>';
			?>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="formulario">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="upload" value="1">
					<input type="hidden" name="business" value="tu_correo@gmail.com">
					<input type="hidden" name="currency_code" value="EUR">
					
					<?php 
						for($i=0;$i<count($datos);$i++){
					?>
						<input type="hidden" name="item_name_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Nombre'];?>">
						<input type="hidden" name="amount_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Precio'];?>">
						<input	type="hidden" name="quantity_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Cantidad'];?>">	
					<?php 
						}
					?>
						

					<input type="submit" value="comprar" class="aceptar btn btn-xl" style="">
                                        <a href="carta.php" class="btn btn-xl">Carta</a>
			</form>
			<?php
			}
			
		?>
                
            </div>
        </div>
    </div>
</section>
    
    
    
    
<?php
    include 'includes/footer.php';
?>