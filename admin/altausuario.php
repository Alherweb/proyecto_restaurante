<?php
	include ("../conexion.php");
	if(!isset($_POST['nombre']) &&  !isset($_POST['apellido']) && !isset($_POST['usuario']) &&  !isset($_POST['password'])){
		header("Location: agregarusuario.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("../img/usuarios/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../img/usuarios/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "../img/usuarios/" .$random.'_'. $_FILES["file"]["name"];
		      		$nombre=$_POST['nombre'];
					$apellido=$_POST['apellido'];
					$usuario=$_POST['usuario'];
                                        $password=$_POST['password'];
					$Sql="insert into usuarios (nombre,apellido,usuario,password,imagen) values(
							'".$nombre."',
							'".$apellido."',
							'".$usuario."',
                                                        '".$password."',
							'".$imagen."')";
					mysql_query($Sql);
					header ("Location: agregarusuario.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>
