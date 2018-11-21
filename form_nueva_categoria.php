<?php 
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
	<h1>Registro de cantegorías</h1>
	<form action="agregar_categoria.php" method="post" enctype="multipart/form-data">
		<label>Nombre de la categoria:</label>
		<input type="text" name="categoria">
		<br>
		<label>Estado:</label>
		<select name="activo">
			<option value="1">Activo</option>
			<option value="0">Inactivo</option>
		</select>
		<br>
		<input type="file" name="foto"><br><br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>

<?php 
	}
 ?>