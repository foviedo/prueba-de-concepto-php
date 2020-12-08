<?php
include 'conexion.php';
$id = $_GET['id'];
$sel = $con -> query("SELECT * FROM alumnos WHERE id ='$id'");
if($fila = $sel -> fetch_assoc()){

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="hacerEfectivoUpdate.php", method="post">
	<input type="hidden" name="id" value="<?php echo $fila['id']?>">
	<input type="text" name="nombre" placeholder="Nombre del alumno" value="<?php echo $fila['nombre']?>"> <br>
	<input type="text" name="apePaterno" placeholder="Apellido paterno del alumno" value="<?php echo $fila['apePaterno']?>"> <br>
	<input type="text" name="apeMaterno" placeholder="Apellido materno del alumno" value="<?php echo $fila['apeMaterno']?>"> <br>
	<input type="submit" name="Actualizar">
</form>
<br>

</body>
</html>