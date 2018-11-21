<?php 
	require 'conexion.php';

	$nombre='Juan Perez';
	$usuario='admin';
	$clave='admin123';

	$clavehash=hash("SHA256",$clave);

	$query=mysqli_query($conexion,"INSERT INTO usuarios (
		nombre,usuario,clave) VALUES ('$nombre','$usuario','$clavehash')");
 ?>