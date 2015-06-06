<!doctype html>
<?php
/**
 * 1.- Crear un array multidimensional de 5 personas [nombre,apellido,telefono,twitter]
 * 2.- Recorrerlo para imprimirlo en una tabla
 * 3.- Agregar un formulario para buscar en la misma pagina dentro del array en cualquiera  de los campos del array
 * 4.- Convertir a un usuario en admin agregando el indice rol con valor "admin" y filtrarlo si en la URL viene &admin=true
 *
 */
//Definición del datasource

$dataSource = array();
$dataSource[] = array('nombre' => 'Oscar', 'apellido' => 'Arzola', 'telefono' => 59545454, 'twitter' => 'soydelicioso', 'rol' => 'admin');
$dataSource[] = array('nombre' => 'Martin', 'apellido' => 'Fuentes', 'telefono' => 59545454, 'twitter' => 'milord');
$dataSource[] = array('nombre' => 'Karina', 'apellido' => 'Martin', 'telefono' => 59545454, 'twitter' => 'chica34');
$dataSource[] = array('nombre' => 'Karina', 'apellido' => 'Admin', 'telefono' => 59545454, 'twitter' => 'notengo', 'rol' => 'admin');
$dataSource[] = array('nombre' => 'Kitzia', 'apellido' => 'Loco', 'telefono' => 59545454, 'twitter' => 'kitsi');

//Definición parametros de busqueda

$busqueda = (!empty($_GET['busqueda'])) ? $_GET['busqueda'] : null;
$admin = (!empty($_GET['admin'])) ? true : false;

//Creación de adaptadores o callback de filtros

$filtroRol = function($item) {
	if ('admin' === $item['rol']) {
		return true;
	}
};

$filtroBusqueda = function($item) use ($busqueda) {
	foreach ($item as $val) {
		if (stristr($val,$busqueda)) {
			return true;
		}
	}
};

//Agregación de filtros

if ($busqueda) {
	$dataSource = array_filter($dataSource, $filtroBusqueda);
}
if (true === $admin) {
	$dataSource = array_filter($dataSource, $filtroRol);
}
?>
<html>
<head>
	<title>Embed code Style Contacts</title>
	<meta charset="utf-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<p class="well">
		Contactos <?php echo 'Cool'; ?>
	</p>
	<div class="row">
		<div class="col-md-12">
			<h3>Buscar</h3>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form id="busqueda" method="GET" action="embed.php" role="form" class="form">
					<div class="form-group">
						<input type="text" class="form-control input-sm" name="busqueda" placeholder="Ejemplo José">
					</div>
					<div class="form-group">
						<label>
							<input type="checkbox" value="true" name="admin">
							Solo admins VIP
						</label>
					</div>
					<button type="submit" class="btn btn-success">Buscar</button>
				</form>
			</div>
		</div>
	</div>
	<table class="table">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Telefono</th>
			<th>Twitter</th>
		</tr
		<?php
		if (is_array($dataSource))
			foreach ($dataSource as $persona):
				?>
				<tr>
					<td><?php echo $persona['nombre']; ?></td>
					<td><?php echo $persona['apellido']; ?></td>
					<td><?php echo $persona['telefono']; ?></td>
					<td><?php echo $persona['twitter']; ?></td>
				</tr>
			<?php endforeach; ?>
	</table>
	<?php if(true): ?>

	<?php endif; ?>
</div>
</body>
</html>