<?php
	require_once "funconex.php";
	$conexion=conexion();
	$c=$_POST['id_curso'];
	$b=$_POST['boleta'];
	$n=$_POST['nombre'];
	$p=$_POST['apaterno'];
	$m=$_POST['amaterno'];
	$t=$_POST['telefono'];
	$co=$_POST['correo'];
	$u=$_POST['usuario'];
	$pw=$_POST['clave'];
	$tu=$_POST['tipo_usuario'];

	$sql="INSERT INTO usuario (id_curso,boleta,nombre,apaterno,amaterno,telefono,correo,usuario,clave,tipo_usuario) values ('$c','$b','$n','$p','$m','$t','$co','$u','$pw','$tu')";

$result=mysqli_query($conexion,$sql);
 ?>