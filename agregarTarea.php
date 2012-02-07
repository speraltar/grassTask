<?php 
	session_start();
	$tarea=$_POST['titulo'];
	$contenido=$_POST['contenido'];
	$usuario=$_SESSION['usuario'];

	$conexion=mysql_connect('localhost','root','root');
	mysql_select_db('tareas',$conexion);

	$sql="INSERT INTO  tareas VALUES (NULL ,  '".$usuario."',  '".$tarea."','".$contenido."',  0)";

	$resultado=mysql_query($sql,$conexion) or die(mysql_error());

	mysql_close($conexion);

	echo'
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=principal.php">
				</head>
			</html>
			';
?>