<?php
	session_start();

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	$conexion=mysql_connect('localhost','root','root');
	mysql_select_db('tareas', $conexion);

	$consulta = "SELECT * FROM usuarios";
	$r=mysql_query($consulta,$conexion);

	while($fila=mysql_fetch_array($r)){
		$usuariobasedatos = $fila['usuario'];
		$contrasenabasedatos = $fila['contrasena'];
		$permisosenbase = $fila['permisos'];
		$nombre=$fila['nombre'];
		if($usuario == $usuariobasedatos & $contrasena == $contrasenabasedatos){
		//Si el resultado es positivo asignar
			$_SESSION['usuario'] = $usuario;
			$_SESSION['contrasena'] = $contrasena;
			$_SESSION['permisos'] = $permisosenbase;
			$_SESSION['nombre'] = $nombre;

			echo'
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=principal.php">
				</head>
			</html>
			';
		}/*else{
			echo'
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=formulariologin.php">
				</head>
			</html>
			';
		}*/
	}
?>