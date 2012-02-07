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
	<title>jQuery Mobile</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head>
<body>

	<div data-role="page" data-theme="b" id="agregar">
		<div data-role="header">
			<h1>Agregar</h1>
		</div>

		<div data-role="content">
			<form action="agregarTarea.php" method="post" data-ajax="false">
	           	<label for="titulo">Tarea</label>
	            <input type="text" id="titulo" name="titulo" >
	            <input type="submit" value="Agregar" data-theme="c" >
			
			</form>
		</div>

		<div data-role="footer" data-id="footer1" id="realizar">
			<div data-role="navbar" data-theme="a">
				<ul>
					<li><a href="#" data-icon="plus" data-iconpos="notext"></a></li>
	                <li><a href="#" data-icon="check" data-iconpos="notext"></a></li>
	                <li><a href="#" data-icon="delete" data-iconpos="notext"></a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>