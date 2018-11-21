<?php 
	require 'conexion.php';
	$id_categoria=$_POST['id_categoria'];
	$categoria=$_POST['categoria'];
	$activo=$_POST['activo'];

	$consulta=mysqli_query($conexion,"UPDATE categorias SET categoria='$categoria', activo='$activo' WHERE id_categoria='$id_categoria'");

	header('location: vista_categoria.php');

 ?>