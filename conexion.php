<?php
$conexion = new mysqli('localhost','root','','db_negocio');
mysqli_query( $conexion, 'SET NAMES utf8');
//En caso de haber posibles errores
if (mysqli_connect_errno()) {
	printf("Falló conexión con la base de datos: %s\n",mysqli_connect_error());
	exit();
}
?>