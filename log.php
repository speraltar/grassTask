<?php
if(!isset($_SESSION)) 
{ 
session_start(); 
}  

$utc = date('U');
$anio = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');

$usuariolog = $_SESSION['usuario'];
$contrasenalog = $_SESSION['contrasena'];

@$ip = getenv(REMOTE_ADDR);
$navegador = $_SERVER['HTTP_USER_AGENT'];

$conexion = mysql_connect('localhost','root','root');
mysql_select_db('favoritos',$conexion);

$consulta = "INSERT INTO logs VALUES('".$utc."','".$anio."','".$mes."','".$dia."','".$hora."','".$minuto."','".$segundo."','".$ip."','".$navegador."','".$usuariolog."','".$contrasenalog."')";

$resultado = mysql_query($consulta,$conexion) or die(mysql_error());;

mysql_close($conexion);

?>