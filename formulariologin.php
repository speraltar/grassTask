<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viwport" content="width=device-width,user-scalable=no">
	<link rel="shortcut icon" href="favicon.png">
	<title>grasstask</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="css/themes/grassTask.min.css" />
</head>
<body>
	<div data-role="page" data-theme="b">
		<div data-role="header">
		</div>
		<div data-role="content">
			<h1><img src="big_logo.png" alt="grassTasks"></h1>
			<p>A Touch-Optimized Web for Smartphones & Tablets</p>
			<form action="login.php" method="post" data-ajax="false">
	           	<label for="nombre">Usuario</label>
	            <input type="text" id="nombre" name="usuario" required >

	           	<label for="contrasena">Contraseña</label>
	            <input type="password" id="contrasena" name="contrasena" required >
	            <input type="submit" value="Entrar" data-theme="c" >
			
			</form>
		</div>
		<div data-role="footer" data-position="fixed" class="ui-bar">

				<a href="formularioregistro.php" data-role="button" data-theme="e" data-icon="star">Registrate</a>
		</div>
	</div>
</body>
</html>