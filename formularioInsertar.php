<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="insertar.php", method="post">
	<input type="text" name="nombre" placeholder="Nombre del alumno"> <br>
	<input type="text" name="apePaterno" placeholder="Apellido paterno del alumno"> <br>
	<input type="text" name="apeMaterno" placeholder="Apellido materno del alumno"> <br>
	<input type="submit" name="guardar">
</form>
<br>
<table>
	<th>ID</th>
	<th>Nombre</th>
	<th>Apellido parterno</th>
	<th>Apellido materno</th>
	<th></th>
	<th></th>
	<?php
	$sel = $con ->query("SELECT * FROM alumnos");
	while($fila = $sel -> fetch_assoc()){

	?>
	<tr>
		<td><?php echo $fila['id'] ?></td>
		<td><?php echo $fila['nombre'] ?></td>
		<td><?php echo $fila['apePaterno'] ?></td>
		<td><?php echo $fila['apeMaterno'] ?></td>
		<td><a href="update.php?id=<?php echo$fila['id']?>">EDITAR</a></td>
		<td><a href="delete.php?id=<?php echo $fila['id']?>">ELIMINAR</a></td>

	</tr>
	<?php } ?>
</table>
</body>
</html>