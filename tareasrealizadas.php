<?php
	$conexion=mysql_connect('localhost','root','root');
	mysql_select_db('tareas', $conexion);

	//$sql="SELECT categoria, COUNT(*) FROM tareas WHERE usuario='".$_SESSION['usuario']."' AND contrasena='".$_SESSION['contrasena']."' GROUP BY categoria";
	$sql="SELECT * FROM tareas WHERE hecha=1 AND usuario='".$_SESSION['usuario']."'";

	$resultado=mysql_query($sql,$conexion);

	echo '<ul data-role="listview" data-theme="c" data-inset="true">';
	echo '<li data-role="list-divider" role="heading" class="ui-li ui-li-divider ui-btn ui-bar-b ui-corner-top ui-btn-up-undefined"><h2>Realizadas por '.$_SESSION['nombre'].'</h2></li>';

	while($fila=mysql_fetch_array($resultado)){

		echo'
			<li><a href="#">'.$fila['titulo'].'</a><a href="#" data-icon="check" data-iconpos="notext"></a></li>
			';
	}

	echo '
		</ul>
	';

	mysql_close($conexion);
				
?>
