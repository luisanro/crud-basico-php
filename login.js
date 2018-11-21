$("#formulario").on("submit",function(e){
	e.preventDefault() //evita que se ejecute la función normal del submit

	let usuario=$("#usuario").val() //obtenemos el texto introducido por el usuario
	let clave=$("#clave").val() //obtenemos el texto introducido por el usuario

	$.ajax({
		type: "POST",
		url: "verificar.php",
		dataType: "json",
		data: "usuario=" + usuario + "&clave=" + clave,
		success: function(datos){
			if (datos.encontrado=='si') {
				location.href='vista_categoria.php'
			}else {
				$("#respuesta").html('<div class="alert alert-danger" role="alert">Usuario y/o clave incorrectos</div>')
			}
		}
	})
})