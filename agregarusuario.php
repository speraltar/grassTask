<?php
	session_start(); 
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	$edad=$_POST['edad'];

	$_SESSION['usuario'] = $usuario;
	$_SESSION['contrasena'] = $contrasena;

	$conexion=mysql_connect('localhost','root','root');
	mysql_select_db('tareas',$conexion);

	$sql="INSERT INTO usuarios VALUES ('".$usuario."' ,  '".$contrasena."',  '".$email."','".$nombre."',  '".$apellido."', ".$edad.",  3)";

	$resultado=mysql_query($sql,$conexion) or die(mysql_error());

	mysql_close($conexion);

	echo'
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=formulariologin.php">
				</head>
			</html>
			';
?>