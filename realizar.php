<?php
	session_start();
	$id=$_GET['id'];
	$conexion=mysql_connect('localhost','root','root') or die(mysql_error());
	mysql_select_db('tareas',$conexion);
	$sql="UPDATE tareas SET hecha=1 WHERE id_tarea=".$id." ";
	mysql_query($sql,$conexion) or die(mysql_error());

	mysql_close($conexion);

	echo '
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=principal.php">
				</head>
			</html>
		';

?>