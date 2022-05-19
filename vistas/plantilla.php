<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Crud Final</title>

	<!--=====================================
	PLUGINS DE CSS
	======================================-->	

	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!--=====================================
	PLUGINS DE JS
	======================================-->	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

</head>
<body>


	<!--=====================================
	 PRIMERO - CABECERA CON LOGOTIPO
	======================================-->

	<div class="container-fluid">
		
		<h3 class="text-center py-3">LOGO</h3>

	</div>

	<!--=====================================
	SEGUNDO - BOTONERA - MENU
	======================================-->

	<div class="container-fluid  bg-light">
		
		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">

				<li class="nav-item">
					<a class="nav-link" href="registro.html">Registro</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="ingreso.html">Ingreso</a>
				</li>

				<li class="nav-item">
					<a class="nav-link active" href="index.html">Inicio</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#">Salir</a>
				</li>

			</ul>

		</div>

	</div>

	<!--=====================================
	TERCERO - CONTENIDO
	======================================-->

	<div class="container-fluid">
		
		<div class="container py-5">

			<table class="table table-striped">
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>John</td>
						<td>Doe</td>
						<td>john@example.com</td>
					</tr>
					<tr>
						<td>Mary</td>
						<td>Moe</td>
						<td>mary@example.com</td>
					</tr>
					<tr>
						<td>July</td>
						<td>Dooley</td>
						<td>july@example.com</td>
					</tr>
				</tbody>
			</table>

		</div>

	</div>


	
</body>
</html>