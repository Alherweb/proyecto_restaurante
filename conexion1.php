<?php
	$server="db628617020.db.1and1.com";
	$username="dbo628617020";
	$password="vertrigo1";
	$db='db628617020';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>