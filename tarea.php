<?php 
	$titulo=$_GET['titulo'];
	$id=$_GET['id'];
?>
	<div data-role="page" data-theme="b">
		<div data-role="header">
			<h1>Lista de Tareas</h1>
		</div>
		<div data-role="content">
			<div data-role="controlgroup" data-type="horizontal">	<h2><?php echo $titulo ?></h2>
				<form action="realizar.php" method="post">
					<input type="text" value="<?php echo $id ?>" name="id">
					<button type="submit" data-role="button" data-theme="e" data-inline="true" rel="external">Realizada</a>
					<button href="#main" data-role="button" data-theme="c" data-inline="true">Volver</a>
				</form>
			</div>
		</div>
		<div data-role="footer" data-id="footer1">
			<div data-role="navbar" data-theme="a">
				<ul>
					<li><a href="#agregar" data-icon="plus" data-iconpos="notext"></a></li>
	                <li><a href="#" data-icon="check" data-iconpos="notext"></a></li>
	                <li><a href="#" data-icon="delete" data-iconpos="notext"></a></li>
				</ul>
			</div>
		</div>
	</div>

