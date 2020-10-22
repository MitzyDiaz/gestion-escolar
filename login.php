<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){

	require 'conexion.php';
	sleep(2);
	session_start();

	$cnx->set_charset('utf8');

	$user=$cnx->real_escape_string($_POST['loginUser']);
	$pas=$cnx->real_escape_string($_POST['loginPwd']);

	if ($nueva_consulta = $cnx->prepare("SELECT usuario, tipo_usuario FROM control_escolar.usuario WHERE Usuario = ? AND Password = ?")) {

		$nueva_consulta->bind_param('ss',$user,$pas);

		$nueva_consulta->execute();

		$resultado = $nueva_consulta->get_result();

		if($resultado->num_rows==1){
		$datos=$resultado->fetch_assoc();
		$_SESSION['usuario']= $datos;
		echo json_encode(array('error'=>false,'tipo'=>$datos['tipo_usuario']));
		}
		else{
		echo json_encode(array('error'=> true));
		}
		$nueva_consulta->close();
	}
}

$cnx->close();
