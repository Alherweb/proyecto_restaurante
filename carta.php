<?php
    include 'includes/header.php';
?>
    <!-- Header -->
    <header class="carta">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Carta</div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nuestra Carta</h2>
                    <h3 class="section-subheading text-muted">Te lo enviamos a domicilo.</h3>
                    <div class="filter mb90">
                        <form id="filter">
                            <fieldset class="group">
                                    <label class="btn btn-default btn-main"><input type="radio" name="filter" value="all" checked="checked">Todos</label>
                                    <label class="btn btn-default"><input type="radio" name="filter" value="entrantes">Entrantes</label>
                                    <label class="btn btn-default"><input type="radio" name="filter" value="sushi">Sushi</label>
                                    <label class="btn btn-default"><input type="radio" name="filter" value="temaki">Temaki</label>
                                    <label class="btn btn-default"><input type="radio" name="filter" value="carnes">Carnes</label>
                                    <label class="btn btn-default"><input type="radio" name="filter" value="marisco">Marisco</label>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="row grid">
                
                <?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>	
                <div class="col-md-3 col-sm-6 portfolio-item" data-groups='["<?php echo $f['categoria'];?>"]'>
                    <a href="#<?php echo $f['id'];?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/carta/productos/<?php echo $f['imagen'];?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $f['nombre'];?></h4>
                        <p class="text-muted"><?php echo $f['precio'];?> €</p>
                        <a href="carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al carro</a>
                    </div>
                </div>
                
                <?php
		}
                ?>
            </div>
        </div>
    </section>
    
    <?php
        include 'conexion.php';
        $re=mysql_query("select * from productos")or die(mysql_error());
        while ($f=mysql_fetch_array($re)) {
    
            ?>
        <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="<?php echo $f['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php echo $f['nombre'];?></h2>
                            <p class="item-intro text-muted"><?php echo $f['descripcion'];?></p>
                            <img class="img-responsive img-centered" src="img/carta/productos/<?php echo $f['imagen'];?>" alt="">
                            <p><?php echo $f['precio'];?> €</p>
                            <p><a href="carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al carro</a></p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar producto</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        <?php
        }
        ?>
    
<?php
    include 'includes/footer.php';
?>