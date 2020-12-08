<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$apePaterno = $_POST['apePaterno'];
$apeMaterno= $_POST['apeMaterno'];
$ins = $con-> query("INSERT INTO alumnos (nombre, apePaterno, apeMaterno) VALUES ('$nombre','$apePaterno','$apeMaterno')");
if($ins) {
	echo "todo bien <br>";
	echo "<script>
	location.href = 'formularioInsertar.php';
	</script>";
} else {
	echo "algo anda mal <br>";
}
?>