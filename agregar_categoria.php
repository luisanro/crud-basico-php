<?php 
	require 'conexion.php';
	$categoria=$_POST['categoria'];
	$activo=$_POST['activo'];

	$query=mysqli_query($conexion,"INSERT INTO categorias(categoria,foto,activo) VALUES('$categoria','$imagen','$activo')");

	header('Location: vista_categoria.php');

 ?>