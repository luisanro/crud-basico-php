<?php 
	$id_categoria=$_GET['id_categoria'];
	require 'conexion.php';

	$consulta=mysqli_query($conexion,"DELETE FROM categorias WHERE id_categoria='$id_categoria'");

	header('location: vista_categoria.php')
 ?>