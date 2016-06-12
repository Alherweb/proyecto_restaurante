<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Alvaro Hernandez">

    <title>Restaurante Alvaro</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/estilo.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Restaurante Alvaro</a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="" href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a class="" href="conocenos.php">Conocenos</a>
                    </li>
                    <li>
                        <a class="" href="carta.php">Carta</a>
                    </li>
                    <!-- 
                    <li>
                        <a class="" href="reservas.php">Reservas</a>
                    </li> 
                    -->
                    <li>
                        <a class="" href="contacto.php">Contacto</a>
                    </li>
                    <li>
                        <a class="" href="carritodecompras.php"><i class="fa fa-shopping-cart fa-fw"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                        <div class="col-md-12">
                                            <form class="form" role="form" method="post" action="./login/verificar.php" accept-charset="UTF-8" id="login-nav">
                                                <?php 
                                                if(isset($_GET['error'])){
                                                        echo '<center>Datos No Validos</center>';
                                                }
                                                ?>
                                                <div class="form-group">
                                                         <label class="sr-only" for="exampleInputEmail2">Usuario</label>
                                                         <input type="text" class="form-control" id="usuario" name="Usuario" placeholder="Usuario" required>
                                                </div>
                                                <div class="form-group">
                                                         <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                                                         <input type="password" class="form-control" id="password" name="Password" placeholder="Contraseña" required>
                                                </div>
                                                <div class="form-group">
                                                         <button type="submit" name="aceptar" value="Aceptar" class="btn btn-primary btn-block">Entrar</button>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="container-fluid main-container">
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    
