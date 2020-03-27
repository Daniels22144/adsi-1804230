<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
	<h1>Crear de Usuario</h1>
	<hr>
	<a href="{{ url('users') }}">Ir a Lista de Usuarios</a>
	<hr>
	
	<form action="{{ url('users') }}" method="post">
		@csrf
		<input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
		<br><br>
		<input type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
		<br><br>
		<input type="number" name="phone" value="{{ old('phone') }}" placeholder="Teléfono">
		<br><br>
		<input type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="Fecha de nacimiento">
		<br><br>
		<select name="gender" value="{{ old('gender') }}" placeholder="Genero">
			<option>Seleccion genero...</option>
			<option>Male</option>
			<option>Female</option>
		</select>
		<br><br>
		<input type="text" name="address" value="{{ old('address') }}" placeholder="Direccion">
		<br><br>
		<input type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña">
		<br><br>
		<button type="submit"> Guardar </button>
	</form>
	</div>
		</div>
	</div>
</body>
</html>

		<!--<input type="text" name="gender" value="{{ old('gender') }}" placeholder="Genero">
