<?php 
	
	error_reporting(E_ALL);
	
	$conexion=mysql_connect("localhost","root","") or die("problemas de conexion");
	mysql_select_db("multimediadb",$conexion) or die("no existe la base de datos.");
	$rutaEnServidor='img';
	$rutaTemporal=$_FILES['imagen']['tmp_name'];
	$nombreimagen=$_FILES['imagen']['name'];	
	$res=mysql_query("insert into imagen(cod_imagen,nombre,fechar_reg,altura,anchura,tamanio) values(10,'$_POST[nombre]','2013-12-12 12:00:00',12,12,230)",$conexion) or die("problemas" .mysql_error());
	if ($res){

		echo 'inserción con exito';
	}
	else{

		echo 'no se puedo insertar';

	} 
