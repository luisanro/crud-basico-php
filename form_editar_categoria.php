<?php 
	$id_categoria=$_GET['id_categoria'];
	require 'conexion.php';

	$buscar=mysqli_query($conexion,"SELECT * FROM categorias WHERE id_categoria='$id_categoria'");

	$fila=mysqli_fetch_array($buscar);
	$categoria=$fila['categoria'];
	$activo=$fila['activo'];

	session_start();
	if (!isset($_SESSION['usuario'])) {
		header("Location: login.html");
	}else {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Editar Categorias</h1>
	<form action="modificar_categoria.php" method="post">
		<label>Nombre de la categoria:</label>
		<input type="hidden" name="id_categoria" value="<?php echo $id_categoria; ?>">
		<input type="text" name="categoria" value="<?php echo $categoria;?>">
		<br>
		<label>Estado:</label>
		<select name="activo">
			<option value="1" <?php if ($activo==1){echo 'selected';}?>>Activo</option>
			<option value="0" <?php if ($activo==0){echo 'selected';}?>>Inactivo</option>
		</select>
		<br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>

<?php 
	}
 ?>