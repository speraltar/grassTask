<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viwport" content="width=device-width,user-scalable=no">
	<title>grassTask</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head>
<body>

	<div data-role="page" data-theme="b" id="agregar">
		<div data-role="header">
			<h1><img src="logo.png" alt="grassTasks"></h1>
		</div>

		<div data-role="content">
			<h2>Registrate</h2>
			<form action="agregarusuario.php" method="post" data-ajax="false">
	           	<label for="titulo">Nombre</label>
	            <input type="text" id="nombre" name="nombre" required >
	            <label for="titulo">Apellido</label>
	            <input type="text" id="apellido" name="apellido" required >
	            <label for="titulo">Email</label>
	            <input type="email" id="email" name="email" required >
	           	<label for="titulo">Usuario</label>
	            <input type="text" id="usuario" name="usuario" required >
	            <label for="titulo">Contraseña</label>
	            <input type="text" id="contrasena" name="contrasena" required >
	            <label for="titulo">Edad</label>
	            <input type="range" id="edad" name="edad" value="15" min="10" max="80" required >
	            <input type="submit" value="Agregar" data-theme="c" >
			
			</form>
		</div>

		<div data-role="footer" data-id="footer1" id="realizar">
		<p>Copyright © 2012 grassTask, Inc. All rights reserved.</p>
		</div>
	</div>
</body>
</html>