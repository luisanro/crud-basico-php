<?php 
	require 'conexion.php';

	$usuario=mysqli_real_escape_string($conexion, $_POST['usuario']);
	$clave=mysqli_real_escape_string($conexion, $_POST['clave']);
	$clavehash=hash("SHA256",$clave);

	$consulta=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clavehash'");

	$cuantos=mysqli_num_rows($consulta);
	$array=array();

	if ($cuantos>0) {
		$array['encontrado']='si';
		session_start();
		$_SESSION['usuario']=$usuario;
	}else {
		$array['encontrado']='no';
	}

	echo json_encode($array);
 ?>