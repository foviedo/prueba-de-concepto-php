<?php
include 'conexion.php';
$id = $_GET['id'];
$delete = $con -> query("DELETE FROM alumnos WHERE id='$id'");
if($delete){
	echo "<script>
	alert('re piola');
	location.href = 'formularioInsertar.php';
	</script>";
} else {
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href = 'formularioInsertar.php';
	</script>";
}
?>