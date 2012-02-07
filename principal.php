<?php 
if(!isset($_SESSION)) 
{ 
session_start(); 
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viwport" content="width=device-width,user-scalable=no">
	<link rel="shortcut icon" href="favicon.png">

	<title>grassTask</title>

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="micodigo.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="css/themes/grassTask.min.css" />	
</head>
<body>

	<div data-role="page" data-theme="a" id="main">
		<div data-role="header">
			<h1><img src="logo.png" alt="grassTasks"></h1>
		</div>

		<div data-role="content">
			<?php include 'categorias.php' ?>
		</div>

		<div data-role="footer" data-id="footer1">
			<div data-role="navbar" data-theme="a">
				<ul>
					<li><a href="#agregar" data-icon="plus" data-iconpos="notext"></a></li>
	                <li><a href="#realizadas" data-icon="check" data-iconpos="notext"></a></li>
	                <li><a href="unlog.php" data-icon="delete" data-iconpos="notext"></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div data-role="page" data-theme="b" id="agregar">
		<div data-role="header">
			<a href="#main" data-role="button" data-icon="home" data-iconpos="notext"></a>
			<h1><img src="logo.png" alt="grassTasks"></h1>
		</div>

		<div data-role="content">
			<h1>Agregar tarea</h1>
			<form action="agregarTarea.php" method="post" data-ajax="false">
	           	<label for="titulo">Titulo</label>
	            <input type="text" id="titulo" name="titulo" required >
	            <label for="contenido">Contenido</label>
	            <textarea id="contenido" name="contenido" required ></textarea>
	            <input type="submit" value="Agregar" data-theme="c" >
			
			</form>
		</div>

		<div data-role="footer" data-id="footer1" id="realizar">
			<div data-role="navbar" data-theme="a">
				<ul>
					<li><a href="#agregar" data-icon="plus" data-iconpos="notext"></a></li>
	                <li><a href="#realizadas" data-icon="check" data-iconpos="notext"></a></li>
	                <li><a href="unlog.php" data-icon="delete" data-iconpos="notext"></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div data-role="page" data-theme="b" id="realizadas">
		<div data-role="header">
			<a href="#main" data-role="button" data-icon="home" data-iconpos="notext"></a>
			<h1><img src="logo.png" alt="grassTasks"></h1>
		</div>

		<div data-role="content">
			<?php include('tareasrealizadas.php') ?>
		</div>

		<div data-role="footer" data-id="footer1" id="realizar">
			<div data-role="navbar" data-theme="a">
				<ul>
					<li><a href="#agregar" data-icon="plus" data-iconpos="notext"></a></li>
	                <li><a href="#realizadas" data-icon="check" data-iconpos="notext"></a></li>
	                <li><a href="unlog.php" data-icon="delete" data-iconpos="notext"></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div data-role="page" data-theme="b" id="realizar">
		<div data-role="header">
			<a href="#main" data-role="button" data-icon="home" data-iconpos="notext"></a>
			<h1>Completada</h1>
		</div>

		<div data-role="content">
			<?php include('tareasrealizadas.php') ?>
		</div>

		<div data-role="footer" data-id="footer1" id="realizar">
			<div data-role="navbar" data-theme="a">
				<ul>
					<li><a href="#agregar" data-icon="plus" data-iconpos="notext"></a></li>
	                <li><a href="#realizadas" data-icon="check" data-iconpos="notext"></a></li>
	                <li><a href="unlog.php" data-icon="delete" data-iconpos="notext"></a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>