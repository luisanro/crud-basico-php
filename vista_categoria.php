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
	<title>CRUD basico con PHP</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="card">
			<div style="display: flex;" class="card-header">
				<h1 style=>Categorias</h1>
				<div style="margin: 10px 750px;">
					<a class="btn btn-danger" href="logout.php">Cerrar Sesión</a>
				</div>
			</div>
			<div class="card-body">		
				<a href="form_nueva_categoria.php" class="btn btn-primary">Nueva Categoria</a>
				<br>
				<br>
				<label style="margin-bottom: 30px; font-family: sans-serif; font-weight: 900; color: blue; border-bottom: 2px solid red;"> Bienvenido(a):<?php echo $_SESSION['usuario'];?></label>
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>Opciones</th>
							<th>Nombre de la categoria</th>
							<th >Estado</th>
						</tr>
					</thead>
					<tbody>					
						<?php
						 	require 'conexion.php';
						 	$consulta=mysqli_query($conexion,"SELECT* FROM categorias");
						 	while ($fila=mysqli_fetch_array($consulta)) {

						 		$id_categoria=$fila['id_categoria'];

						 		if ($fila['activo']==1) {
						 			$texto='Activo';
						 			$label='<span class="badge badge-success">';
						 		}else {
						 			$texto='Inactivo';
						 			$label='<span class="badge badge-danger">';
						 		}

						 		echo '<tr>';
						 		echo '<td><a href="form_editar_categoria.php?id_categoria='.$id_categoria.'" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-danger" onclick=elimina('.$id_categoria.')><i class="fas fa-trash-alt"></i></a></td>';
						 		echo '<td style="font-weight: 600;">'.$fila['categoria'].'</td>';
						 		echo '<td>'.$label.$texto.'</span></td>';
						 		echo '<tr>';
						 	}
						 ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
	<script>
		function elimina(id_categoria){
			if (confirm('Esta seguro de eliminar')) {
				location.href="eliminar_categoria.php?id_categoria="+id_categoria
			}
		}
	</script>
</html>
<?php 
	}
 ?>