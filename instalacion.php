<?php 
	$conexion = mysql_connect('localhost','root','root') or die('Ha sido imposible realizar la conexion');
	$sql = "CREATE DATABASE tareas";
	mysql_query($sql, $conexion);
	mysql_select_db("tareas");
//####################Crear tabla de tareas
	$consulta = 'CREATE TABLE tareas(
				usuario Char(40) Not Null,
				contrasena Char(40) Not Null,
				titulo Char(40) Not Null,
				contenido varchar (100) Not Null,
				categoria Char (40),
				valoracion Int)';

	mysql_query($consulta,$conexion);
	mysql_close($conexion);
	//Contenido de prueba para la tabla tareas
	$conexion = mysql_connect('localhost','root','root') or die('Ha sido imposible realizar la conexion');
	mysql_select_db("tareas");
	$consulta = "INSERT INTO tareas VALUES(
				'speraltar',
				'speraltar',
				'Bañar al perro',
				'ya se tiene que bañar el manny',
				'Personal',
				7)";
	//Insertar
	$resultado = mysql_query($consulta, $conexion);
	//Cerrar
	mysql_close($conexion);
//####################Crear tabla de usuarios
	//Conexion
	$conexion = mysql_connect('localhost', 'root', 'root') or die('Ha sido imposible establecer la conexion');
	$db_selected = mysql_select_db('tareas', $conexion);
	//Crear tabla
	$consulta = "CREATE TABLE usuarios(
	usuario Char(40) Not Null,
	contrasena Char(40) Not Null,
	nombre Char(40) Not Null,
	apellido Char (100) Not Null,
	edad Int,
	permisos Int)";
	//Insertar contenido en la tabla
	$resultado = mysql_query($consulta, $conexion);
	//Cerrar la conexion
	mysql_close($conexion);
	//Contenido de prueba para la tabla usuarios
	//Establecer
	$conexion = mysql_connect('localhost', 'root', 'root') or die('Ha sido imposible establecer la conexion');
	$db_selected = mysql_select_db('tareas', $conexion);
	//Preparar
	$consulta = "INSERT INTO usuarios VALUES('speraltar', 'speraltar', 'Sergio Alberto', 'Peralta', 25, 1)";
	//Insertar
	$resultado = mysql_query($consulta,$conexion);
	//Cerrar
	mysql_close($conexion);
//####################Crear tabla de logs
	//Conexion
	$conexion = mysql_connect('localhost', 'root', 'root') or die('Ha sido imposible establecer la conexion');
	$db_selected = mysql_select_db('tareas', $conexion);
	//Crear tabla
	$consulta = "CREATE TABLE logs(
	utc Int,
	anio Int,
	mes Int,
	dia Int,
	hora Int,
	minuto Int,
	segundo Int,
	ip Char(50),
	navegador Char(100),
	usuario Char(40),
	contrasena Char(40)
	)";
	//Insertar contenido en la tabla
	$resultado = mysql_query($consulta, $conexion);
	//Cerrar la conexion
	mysql_close($conexion);
	//Contenido de prueba para la tabla logs
	//Establecer
	$conexion = mysql_connect('localhost', 'root', 'root') or die('Ha sido imposible establecer la conexion');
	$db_selected = mysql_select_db('tareas', $conexion);
	//Preparar
	$consulta ="INSERT INTO logs VALUES(00000000, 2011,11,29,11,09,30,'127.0.0.1', 'chrome', 'speraltar','speraltar')";
	//Insertar
	$resultado = mysql_query($consulta,$conexion);
	//Cerrar
	mysql_close($conexion);
?>