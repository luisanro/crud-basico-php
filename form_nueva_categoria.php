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
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<div class="card col-12 col-md-4 mx-auto mt-5 p-0">
		<h1 style="margin-bottom: 20px;" class="card-header bg-info text-white text-center">Registro de cantegorías</h1>
		<div class="input-group mb-3">
				<form style="padding: 10px;" action="agregar_categoria.php" method="post" enctype="multipart/form-data">
					<label>Nombre de la categoria:</label>
					<input style="border: 1px solid gray; border-radius: 5px; margin-left: 10px;" type="text" name="categoria">
					<br>
					<div class="input-group-prepend">
						<label class="input-group-text">Estado:
							<select style="margin-left: 10px;" class="custom-select" name="activo">
								<option value="1">Activo</option>
								<option value="0">Inactivo</option>
							</select>
						</label>
					</div>
					<br>
					<input class="btn btn-success" type="submit" value="Guardar">
				</form>
		</div>
	</div>
</body>
</html>

<?php 
	}
 ?>