<?php
	$conexion=mysql_connect('localhost','root','root');
	mysql_select_db('tareas', $conexion);

	//$sql="SELECT categoria, COUNT(*) FROM tareas WHERE usuario='".$_SESSION['usuario']."' AND contrasena='".$_SESSION['contrasena']."' GROUP BY categoria";
	$sql="SELECT * FROM tareas WHERE hecha=0 AND usuario='".$_SESSION['usuario']."'";

	$resultado=mysql_query($sql,$conexion);

	echo '<ul data-role="listview" data-theme="c" data-inset="true">';
	echo '<li data-role="list-divider" role="heading" class="ui-li ui-li-divider ui-btn ui-bar-b ui-corner-top ui-btn-up-undefined"><h2>Tareas de '.$_SESSION['nombre'].'</h2></li>';

	while($fila=mysql_fetch_array($resultado)){

		echo'
			<li><a href="#">'.$fila['titulo'].'</a>
				<ul>
					<li>
						<p>'.$fila['contenido'].'</p>
						<div data-role="controlgroup" data-type="horizontal">
							<a href="realizar.php?id='.$fila['id_tarea'].'" type="submit" data-role="button" data-theme="a" data-inline="true" rel="external">Realizada</a>
							<a href="#main" data-role="button" data-theme="c" data-inline="true">Volver</a>
						</div>
					</li>
				</ul>
			</li>
			';
	}

	echo '
		</ul>
	';

	mysql_close($conexion);
				
?>
