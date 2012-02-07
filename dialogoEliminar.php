<?php
	$id=$_GET['id_tarea'];
	$titulo=$_GET['titulo'];
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

			<div data-role="page" data-theme="b">
				<div data-role="header">
					<h1>Realizar Tarea</h1>
				</div>

				<div data-role="content">
					<div data-role="controlgroup">
						<a href="<?php  echo 'realizar.php?id_tarea='.$id.'' ?>" data-role="button" data-theme="e">Realizar</a>
						<a href="principal.php" data-role="button" data-theme="d">Cancelar</a>
					</div>
				</div>

				<div data-role="footer" data-id="footer1">
				</div>
			</div>
	';

