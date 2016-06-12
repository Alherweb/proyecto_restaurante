<?php 
	include "../conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("delete from usuarios where Id=".$_POST['Id']);
		unlink("../img/usuarios/".$_POST['Imagen']);
		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){
		mysql_query("update usuarios set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
		mysql_query("update usuarios set Descripcion='".$_POST['Apellido']."' where Id=".$_POST['Id']);
		mysql_query("update usuarios set Precio='".$_POST['Usuario']."' where Id=".$_POST['Id']);
                mysql_query("update usuarios set Categoria='".$_POST['Password']."' where Id=".$_POST['Id']);
		echo 'El producto se ha modificado';
	}

?>